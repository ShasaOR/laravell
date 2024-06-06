<!-- resources/views/users/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
</head>
<body>
    <h1>Edit Pengguna</h1>
    <form action="{{ route('Pengguna.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
