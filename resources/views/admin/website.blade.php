<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo_umtas.png">
    <title>Daftar Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .jojo {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        h2, h3 {
            color: #333;
            margin-bottom: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        .alert {
            padding: 10px 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        .btn-close {
            float: right;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ccc;
            text-align: left;
        }

        thead {
            background-color: #343a40;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-buttons {
            white-space: nowrap;
        }

        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            margin-right: 5px;
            cursor: pointer;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #000;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 8px 16px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-section {
            margin-top: 30px;
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .jojo {
                display: flex;
                flex-direction: column;
            }
            .yoyo {
                display: flex;
                flex-direction: column;
            }
            .wgi {
                display: flex;
                flex-direction: column;
            }
            .jned {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <x-app-layout>
       <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('daftar website') }}
        </h2>
    </x-slot>
        <br>
        <br>
        <div class="container">
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
            <div class="jojo">
                <table class="yoyo">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Website</th>
                        <th>URL</th>
                        <th>Type</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="wgi">
                    @foreach ($websites as $website)
                        <tr class="jned">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $website->name }}</td>
                            <td>{{ $website->url }}</td>
                            <td>{{ $website->type }}</td>
                            <td class="action-buttons">
                                <a href="{{ route('admin.website.edit', ['id' => $website->id]) }}">
                                    <button class="btn btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                </a>
                                <form action="{{ route('admin.website.destroy', ['id' => $website->id]) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="form-section">
                <h3>{{ isset($websitedetail) ? 'Edit Website' : 'Tambah Website Baru' }}</h3>
                <form action="{{ isset($websitedetail) ? route('admin.website.update', ['id' => $websitedetail->id]) : route('admin.website.store') }}" method="post">
                    @csrf
                    @if (isset($websitedetail))
                        @method('put')
                    @endif

                    <div class="form-group">
                        <label for="name" class="form-label">Nama Website</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $websitedetail->name ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="url" class="form-label">URL</label>
                        <input type="text" class="form-control" id="url" name="url" value="{{ old('url', $websitedetail->url ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $websitedetail->type ?? '') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    </x-app-layout>
</body>
</html>
