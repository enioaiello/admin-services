<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Admin Services est un site Internet permettant aux utilisateurs de publier des applications web et de les utiliser">
    <title>Admin Services</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Métadonnées Open Graph -->
    <meta property="og:title" content="Admin Services">
    <meta property="og:description" content="Créez et utilisez des applications au format wep-app">
    <meta property="og:image" content="{{ asset('images/banner.png') }}">
    <meta property="og:url" content="https://exemple.com">
    <meta property="og:type" content="website">
</head>
<body class="body">
<header class="header">
    <nav class="container navbar">
        <a href="/" class="brand">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Admin Services" class="icon">
        </a>
        <ul class="navbar-list">
{{--            @auth--}}
{{--                <li class="navbar-element logout-container">--}}
{{--                    <a href="{{ route('profile.show') }}" class="logout-button">--}}
{{--                        <img src="{{ Auth::user()->profile_photo_url ?? asset('images/profile/default.png') }}"--}}
{{--                             alt="Photo de profil"--}}
{{--                             class="profile-picture">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endauth--}}
{{--            @guest--}}
{{--                <li class="navbar-element">--}}
{{--                    <a href="{{ route('login') }}" class="login-button link"><i class="ri-user-fill"></i></a>--}}
{{--                </li>--}}
{{--            @endguest--}}
            @auth
                <li class="navbar-element">
                    <a href="{{ route('login') }}" class="login-button link"><i class="ri-user-fill"></i></a>
                </li>
            @endauth
            @guest
                <li class="navbar-element logout-container">
                    <a href="{{ route('dashboard') }}" class="logout-button">
                        <img src="{{ Auth::user()->profile_photo_url ?? asset('images/profile/default.png') }}"
                             alt="Photo de profil"
                             class="profile-picture">
                    </a>
                </li>
            @endguest
        </ul>
    </nav>
</header>
