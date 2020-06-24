<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Boolpress</title>
</head>
<body>
    <div id="app">
        <header class="header mb-5">
            <nav class="navbar navbar-expand navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('home') }}">Boolpress</a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{ route('posts.create') }}" class="nav-link">Write a new post</a></li>
                        <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link">Users</a></li>
                        <li class="nav-item"><a href="\schematics" target="_blank" class="nav-link">Schematics</a></li> <!-- Just for testing -->
                    </ul>
                </div>
            </nav>
        </header>