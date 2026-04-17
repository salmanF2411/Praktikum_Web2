<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile</h1>
    <ul>
        <li>
            Nama: {{ $user->full_name }}!
        </li>
        <li>Email : 123@gmail.com</li>
    </ul>

    <div>
        Selamat datang, {{ $user->full_name }}!
    </div>
</body>
</html>