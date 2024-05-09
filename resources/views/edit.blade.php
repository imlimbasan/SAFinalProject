<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <div class="container">
        <h1>Editare profil</h1>
        <form action="{{ route('profil.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nume:</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizează profil</button>
        </form>
    </div>
</body>
</html>
