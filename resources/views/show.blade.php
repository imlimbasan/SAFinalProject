<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <div class="container">
        <h1>Profil utilizator</h1>
        <p>Nume: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <!-- Alte informații despre utilizator -->
    </div>
</body>
</html>
