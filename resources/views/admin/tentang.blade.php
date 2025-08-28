<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>Edit Tentang Kami</title>
  <style>
     * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
     }
     .container {
        max-width: 1000px;
        margin: auto;
     }
    .container-tentang {
      max-width: 80%;
      margin: 40px auto;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h2, h3 {
      margin-bottom: 20px;
      color: #333;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
      color: #555;
    }
    input[type="file"],
    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }
    textarea {
      resize: vertical;
    }
    .preview {
      margin-top: 10px;
      text-align: center;
    }
    .preview img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      border: 1px solid #ccc;
    }
    button {
      padding: 8px 16px;
      background: #0066cc;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background: #004a99;
    }
    .upload-image, .desc {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      background-color: #fdfdfd;
    }

    /* Arsip style */
    .archive {
      margin-top: 30px;
    }
    .archive h3 {
      margin-bottom: 15px;
      color: #333;
    }
    #archive-list {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }
    .info-card {
      flex: 1 1 calc(33.333% - 15px);
      max-width: calc(33.333% - 15px);
      border: 2px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      background: #fafafa;
      box-sizing: border-box;
    }
    .info-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 6px;
      margin-bottom: 10px;
    }
    .info-title {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .info-description {
      font-size: 14px;
      color: #444;
      margin-bottom: 15px;
    }
    .button-group {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    .btn-edit {
        background: #ffdd00;
        padding: 6px 12px;
        border-radius: 6px;
        color: black;
        font-size: 14px;
        text-decoration: none;
    }
    .btn-edit:hover { background: #d98c1d; color: white; }
        .btn-aktif {
        background: #00ff26be;
        padding: 6px 12px;
        border-radius: 6px;
        color: rgb(255, 255, 255);
        font-size: 14px;
        text-decoration: none;
    }
    .btn-aktif:hover { background: #00ff265d; color: white; }
    .btn-delete {
        background: #d9534f;
        padding: 6px 12px;
        border-radius: 6px;
        color: white;
        font-size: 14px;
        border: none;
    }
    .active-label {
      position: absolute;
      top: 10px;
      right: 10px;
      background: green;
      color: white;
      padding: 3px 8px;
      font-size: 12px;
      border-radius: 4px;
    }
    .btn-delete:hover { background: #b52b27; }
    .btn-save {
        background: #0066cc;
        color: white;
        font-size: 14px;
        height: 35px;
        width: 100px;
        margin-top: 10px;
        border-radius: 6px;
    }
    .btn-save:hover {
        background: #004589;
    }
    @media (max-width: 992px) {
      .info-card {
        flex: 1 1 calc(50% - 15px);
        max-width: calc(50% - 15px);
      }
    }
    @media (max-width: 600px) {
      .info-card {
        flex: 1 1 100%;
        max-width: 100%;
      }
    }
    .info-description {
      font-size: 14px;
      color: #555;
      margin-bottom: 15px;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
    }
  </style>
</head>
<body>
<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Tentang Kami') }}
      </h2>
   </x-slot>

<div class="bawah">
  <div class="container">
    <br>

    {{-- Flash Message --}}
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
        <button type="button" class="btn-close" onclick="this.parentElement.style.display='none';">&times;</button>
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
          <button type="button" class="btn-close" onclick="this.parentElement.style.display='none';">&times;</button>
      </div>
    @endif

    <!-- Form Tambah/Edit Informasi -->
    <div class="container-tentang">
      <h3>{{ isset($tentang_kami_detail) ? 'Edit Tentang Kami' : 'Tambah Tentang Kami' }}</h3>
      <form id="aboutForm"
            action="{{ isset($tentang_kami_detail) ? route('admin.tentang.update', ['id' => $tentang_kami_detail->id]) : route('admin.tentang.store') }}"
            method="POST" enctype="multipart/form-data">
          @csrf
          @if(isset($tentang_kami_detail))
              @method('PUT')
          @endif
          <div class="form-group">
              <input type="text" name="judul" placeholder="Judul Tentang Kami"
                     value="{{ isset($tentang_kami_detail) ? $tentang_kami_detail->judul : old('judul') }}" required>
          </div>
          <div class="form-group">
              <textarea id="description" class="desc" name="deskripsi" rows="10" placeholder="Deskripsi" required>{{ isset($tentang_kami_detail) ? $tentang_kami_detail->deskripsi : old('deskripsi') }}</textarea>
          </div>
          <div class="form-group">
              <input id="image" class="upload-image" type="file" name="image" accept="image/*"
                     @if(!isset($tentang_kami_detail)) required @endif>
          </div>
          <div class="preview">
              <img id="preview-img"
                   src="{{ isset($tentang_kami_detail) ? url('uploads/'.$tentang_kami_detail->image) : '' }}"
                   alt="Preview Gambar">
          </div>
          <button type="submit" class="btn-save">Simpan</button>
      </form>

    <!-- Arsip Tentang Kami -->
<div class="archive">
  <h3>Arsip Tentang Kami</h3>
  <div id="archive-list">
      @foreach ($tentang_kami as $item)
      <div class="info-card" style="position: relative;">
        <img src="{{ url('uploads/'.$item->image) }}" alt="{{ $item->judul }}" />

        {{-- Label hijau jika aktif --}}
        @if($item->is_active)
            <span class="active-label">Aktif</span>
        @endif

        <div class="info-content">
          <div class="info-title">{{ $item->judul }}</div>
          <div class="info-description">{{ $item->deskripsi }}</div>
          <div class="button-group">
            <a href="{{ route('admin.tentang.edit', ['id' => $item->id]) }}" class="btn-edit">
              <i class="fas fa-edit"></i> Edit
            </a>
            <form action="{{route('admin.tentang.delete', ['id' => $item->id])}}"
                  method="POST" class="d-inline"
                  onsubmit="return confirm('Yakin ingin menghapus informasi ini?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-delete">
                <i class="fas fa-trash-alt"></i> Hapus
              </button>
            </form>
            <form action="{{ route('admin.tentang.set-active', $item->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn-aktif">Set Active</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
  </div>
</div>
</div>
</div>
</x-app-layout>

<script>
  // Preview gambar saat upload
  const imageInput = document.getElementById('image');
  const previewImg = document.getElementById('preview-img');

  imageInput.addEventListener('change', function(event) {
    const reader = new FileReader();
    reader.onload = function(){
      previewImg.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const maxLength = 150;

    document.querySelectorAll(".info-description").forEach(function (elem) {
        const fullText = elem.dataset.full;
        if (fullText.length > maxLength) {
            const shortText = fullText.substring(0, maxLength) + "...";
            elem.innerText = shortText;

            const btn = elem.parentElement.querySelector(".toggle-deskripsi");
            btn.addEventListener("click", function () {
                if (btn.innerText === "Selengkapnya") {
                    elem.innerText = fullText;
                    btn.innerText = "Sembunyikan";
                } else {
                    elem.innerText = shortText;
                    btn.innerText = "Selengkapnya";
                }
            });
        } else {
            elem.innerText = fullText;
            const btn = elem.parentElement.querySelector(".toggle-deskripsi");
            btn.style.display = "none";
        }
    });
});
</script>
</body>
</html>
