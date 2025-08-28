<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Project</title>
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

    </style>
</head>
<body>
  <x-app-layout>
       <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Project') }}
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

    <!-- Form Tambah daftar project -->

    <div class="card">
        <h3>{{ isset($projectdetail) ? 'Edit Project' : 'Tambah Project' }}</h3>
        <form action="{{ isset($projectdetail) ? route('admin.project.update', ['id' => $projectdetail->id]) : route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($projectdetail))
                @method('PUT')
            @endif
            <div class="form-group">
                <input type="text" name="name" placeholder="nama Project" value="{{ isset($projectdetail) ? $projectdetail->name : old('name') }}" required>
            </div>
              <div class="form-group">
                <input type="text" name="link" placeholder="Link" value="{{ isset($projectdetail) ? $projectdetail->link : old('link') }}" required>
            </div>
            <label for="description"></label>
            <textarea name="description" class="form-control" placeholder="Deskripsi" required>
                {{ isset($projectdetail) ? $projectdetail->description : old('description') }}
            </textarea>
            <div class="form-group">
                <textarea name="detail" rows="10" placeholder="Detail" required>{{ isset($projectdetail) ? $projectdetail->detail : old('detail') }}</textarea>
            </div>

            <div class="form-group">
                <input type="file" name="image" accept="image/*" @if(!isset($projectdetail)) required @endif>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Project</button>
        </form>
    </div>

   <br>

  <div class="info-container">
     <!-- Card 1 -->

    @foreach ($projects as $project)
    <div class="info-card">
      <img src="{{ url('uploads/'.$project->image) }}" alt="{{ $project ->name }}"
         style="width:100%; height:200px; object-fit:cover;" />
        <div class="info-content">
        <div class="info-title">{{ $project->name }}</div>
        <div class="info-link">
          <i class="fa fa-link"></i>
          <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a>
        </div>
        <div class="info-description">
          {{ $project->description }}
        </div>
        <div class="button-group">
          <a href="{{ route('admin.project.edit', ['slug' =>$project->slug]) }}" class="btn btn-edit">
              <i class="fas fa-edit"></i>
              Edit
          </a>
          <form action="{{route('admin.project.delete', ['id' => $project->id])}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus informasi ini?');">
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


    <!-- Tambahkan card lainnya jika perlu -->
  </div>
</div>
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

</x-app-layout>
</body>
</html>
