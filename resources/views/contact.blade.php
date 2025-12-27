<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Page</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/blog">Blog</a>
    <a href="/about">About</a>
    <a href="/contact">contact</a>
    <h1>Halaman Contact</h1>
    <ul>
        <li>Email: {{ $email }}</li>
        <li>Github: {{ $github }}</li>
    </ul>
</body>
</html>