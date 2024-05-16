<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Member</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
            margin-bottom: 50px; 
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Member</h1>
        <form action="{{ route('member.update', $member->id)  }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="no_identitas">Nomor Identitas:</label>
                <input type="number" class="form-control" id="no_identitas" name="no_identitas" value="{{ old('no_identitas', $member->no_identitas) }}">
                @error('no_identitas')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="nama_member" value="{{ old('nama_member', $member->nama_member) }}">
                @error('nama_member')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password', $member->password) }}">
                @error('password')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $member->alamat) }}">
                @error('alamat')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor HP:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $member->no_hp) }}">
                @error('no_hp')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tgl_join">Tanggal Join:</label>
                <input type="date" class="form-control" id="tgl_join" name="tgl_join" value="{{ old('tgl_join', $member->tgl_join) }}">
                @error('tgl_join')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('member.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>