<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="logo">Dashboard</h1>
        <div class="navbar">
            <ul class="navbar-nav">
                <li><a href="">Home</a></li>
                <li><a href="" class="about-gaktau">About</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="porfil">
        <div class="main-welcome">
            <h1 class="text-profil">Welcome, {{ $user->name }}</h1>
            <p class="text-profil">Email: {{ $user->email }}</p>
            <div class="about">
                <a href="" class="btn-about">apa</a>
                <a href="" class="btn-about">apa</a>
                <a href="" class="btn-about">apa</a>
                <a href="" class="btn-about">#valorant</a>
            </div>
        </div>

    </div>
</body>
</html>
