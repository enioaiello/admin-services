<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Admin Services est un site Internet permettant aux utilisateurs de publier des applications web et de les utiliser">
        <title>Admin Services</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <!-- Métadonnées Open Graph -->
        <meta property="og:title" content="Admin Services">
        <meta property="og:description" content="Créez et utilisez des applications au format wep-app">
        <meta property="og:image" content="https://exemple.com/image.jpg">
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
                    <!-- <li class="navbar-element">
                        <a href="#" title="Retour" id="backPage"><i class="ri-arrow-left-line"></i></a>
                    </li> -->
                    <li class="navbar-element logout-container">
                        <a href="#" class="logout-button">
                            <img src="https://enioaiello.github.io/assets/images/profile.png" alt="Photo de profil" class="profile-picture">
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <div class="container">
                <h1>Page de test</h1>
                <h2>Veuillez lire</h2>
                <p>La recréation d'ArticlesUI et du service entier est en cours. Cette page sert donc à tester les différents composants d'ArticlesUI.</p>
                <hr>
                <p>Lorem ipsum <a href="http://www.google.com" class="link">dolor sit ammet</a>.</p>
                <code class="code">
                    Test
                </code>
            </div>
        </main>
    </body>
</html>
