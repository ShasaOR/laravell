<!-- resources/views/users/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
</head>
<body>
    <h1>Detail Pengguna</h1>
    <p>ID: {{ $user->id }}</p>
    <p>Nama: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <a href="{{ route('Pengguna.index') }}">Kembali ke Daftar Pengguna</a>
</body>
</html>
