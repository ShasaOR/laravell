<!-- resources/views/users/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
</head>
<body>
    <h1>Tambah Pengguna Baru</h1>
    <form action="{{ route('Pengguna.store') }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
