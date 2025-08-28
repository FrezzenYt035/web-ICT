<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Informasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo_umtas.png">
    <style>
        /* RESET */
        * {
            margin: 0; padding: 0;
            box-sizing: border-box;
        }
        .bawah {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            padding: 20px;
            margin-bottom: 10px;
            scale: 0.85;
        }

        .form-group {
            margin-bottom: 16px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            background-color: #f9f9f9;
        }

        textarea {
            resize: vertical;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .btn-primary {
            background-color: #4f46e5;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc2626;
            color: #fff;
        }

        .btn-warning {
            background-color: #facc15;
            color: #000;
        }

        .btn + .btn {
            margin-left: 10px;
        }

        .info-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .info-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.07);
            overflow: hidden;
            width: calc(50% - 10px);
            min-width: 300px;
        }

        .info-card img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .info-content {
            padding: 16px;
        }

        .info-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .info-desc {
            font-size: 14px;
            color: #555;
            margin-bottom: 12px;
        }

        .info-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding: 0 16px 16px;
        }

        .edit-form {
            margin-top: 16px;
            background: #f9fafb;
            padding: 12px;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .info-card {
                width: 100%;
            }
        }

        h2 {
      margin-bottom: 30px;
    }

    .info-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .info-card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      width: 300px;
    }

    .info-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .info-content {
      padding: 15px;
    }

    .info-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .info-description {
      font-size: 14px;
      color: #555;
      margin-bottom: 15px;
      overflow: hidden;        /* Sembunyikan teks yang kelebihan */
      text-overflow: ellipsis; /* Tambahkan tanda titik-titik (...) */
      display: -webkit-box;
      -webkit-line-clamp: 2;   /* Batas baris, bisa diubah */
      -webkit-box-orient: vertical;
    }

    .button-group {
      display: flex;
      justify-content: space-between;

    }

    .btn {
      padding: 8px 12px;
      font-size: 14px;
      border: none;
      border-radius: 4px;
      color: white;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-edit {
      background-color: #ffc107;
    }

    .btn-edit:hover {
      background-color: #e0a800;
    }

    .btn-delete {
      background-color: #dc3545;
    }

    .btn-delete:hover {
      background-color: #c82333;
    }
    .alert {
      padding: 15px;
      margin: 20px 0;
      border-radius: 5px;
      position: relative;
      font-size: 16px;
      line-height: 1.5;
}

.alert-success {
  background-color: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
}

.alert-danger {
  background-color: #f8d7da;
  color: #721c24;
  border: 1px solid #f5c6cb;
}

.alert ul {
  margin: 0;
  padding-left: 20px;
}

.closebtn {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 20px;
  cursor: pointer;
  color: inherit;
}


 /* Tombol bulat tambah */
    .add-btn {
    width: 50px;
    height: 50px;
    background-color: #1E3A8A; /* Biru */
    color: white;
    border: none;
    border-radius: 50%;
    font-size: 24px;
    font-weight: bold;
    display: flex;               /* Flexbox aktif */
    align-items: center;         /* Vertikal tengah */
    justify-content: center;     /* Horizontal tengah */
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}
    .add-btn:hover {
        background-color: #14295d;
    }

    /* Container Grid */
    .card-grid {
        display: grid;
        align-items: flex-start; /* sejajarkan bagian atas */
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Lebar card lebih besar */
    }

    .info-card {
        display: flex;
        flex-direction: column;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        transition: transform 0.2s ease;
    }

    .info-card:hover {
        transform: translateY(-5px);
    }

    .info-card img {
        width: 100%;
        height: 220px; /* Tinggi gambar lebih besar */
        object-fit: cover;
    }

    .card-body {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 20px; /* Padding lebih besar */
    }

    .card-title {
        font-size: 20px; /* Judul lebih besar */
        font-weight: bold;
        margin: 0 0 10px 0;
    }

    .card-text {
        flex: 1;
        font-size: 15px; /* Deskripsi sedikit lebih besar */
        color: #555;
        line-height: 1.4;
    }

    .card-button {
        display: inline-block;
        padding: 10px 16px;
        background: #ffc107;
        color: #000;
        text-decoration: none;
        border-radius: 6px;
        font-size: 15px;
        font-weight: bold;
        text-align: center;
        margin-top: 15px;
        transition: background 0.2s ease;
    }

    .card-button:hover {
        background: #e0a800;
    }
    .angka {
        width: 100%;
        height: 50px;
    }
    .phone {
        position: relative;
    }
    .phone::before {
        content: '+62';
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 14px;
        color: #555;
        pointer-events: none;
    }
    .phone input {
        padding-left: 45px;
    }
    </style>
</head>
<body>
  <x-app-layout>
       <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Anggota') }}
        </h2>
    </x-slot>
    <div class="bawah">
        <div class="container">
    <br>
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
            <!-- Form Tambah Informasi -->

    <div class="card">
        <h3>{{ isset($teamDetail) ? 'Edit Informasi' : 'Tambah Anggota' }}</h3>
        <form action="{{ isset($teamDetail) ? route('admin.team.update', ['id' => $teamDetail->id]) : route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($teamDetail))
                @method('PUT')
            @endif
            <div class="form-group">
                <input type="text" name="name" placeholder="Nama Anggota" value="{{ isset($teamDetail) ? $teamDetail->name : old('name') }}" required>
            </div>
            <div class="form-group">
            <div class="phone">
                <input type="number" class="angka" name="no_WA" placeholder="" value="{{ isset($teamDetail) ? $teamDetail->no_WA : old('no_WA') }}" required>
            </div>

            </div>
            <div class="form-group">
                <input type="text" name="position" placeholder="Jabatan" value="{{ isset($teamDetail) ? $teamDetail->position : old('position') }}" required>
            </div>
            <div class="form-group">
                <textarea name="bio" placeholder="Bio" required>{{ isset($teamDetail) ? $teamDetail->bio : old('bio') }}</textarea>
            </div>
            <div class="form-group">
            <input type="file" name="image" accept="image/*" @if(!isset($teamDetail)) required @endif>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>



<!-- Grid Card -->
<div class="info-container">
    <!-- Card 1 -->
    @foreach ($team as $teamMember)
    <div class="info-card">
      <img src="{{ url('uploads/'.$teamMember->image) }}" alt="{{ $teamMember->name }}"
         style="width:100%; height:200px; object-fit:cover;" />
        <div class="info-content">
        <div class="info-title">{{ $teamMember->name }}</div>
        <div class="info-description">
          {{ $teamMember->position }}
        </div>
           <div class="button-group">
          <a href="{{ route('admin.team.edit', ['slug' =>$teamMember->slug]) }}" class="btn btn-edit">
              <i class="fas fa-edit"></i>
              Edit
          </a>
          <form action="{{route('admin.team.delete', ['id' => $teamMember->id])}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus anggota ini?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-delete">
              <i class="fas fa-trash-alt"></i>
              Hapus
            </button>
          </form>
        </div>
      </div>
    </div>
    @endforeach


</x-app-layout>
</body>
</html>
