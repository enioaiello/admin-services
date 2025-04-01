@include('layouts.header')
        <main class="main">
            <div class="container">
                <h1 class="title">Page de test</h1>
                <h2 class="subtitle">Veuillez lire</h2>
                <p class="paragraph">La recréation d'ArticlesUI et du service entier est en cours. Cette page sert donc à tester les différents composants d'ArticlesUI.</p>
                <p class="paragraph">Lorem ipsum <a href="http://www.google.com" class="link">dolor sit ammet</a>.</p>
                <code class="code">
                    Test
                </code>
                <div class="button-container">
                    <a href="#" class="button">Bouton</a>
                    <a href="#" class="button denied">Bouton désactivé</a>
                    <a href="#" class="button danger">Bouton danger</a>
                </div>
                <div class="article-container">
                    <article class="article">
                        <h3 class="title">Test</h3>
                        <p class="paragraph">Je suis un paragraphe</p>
                        <div class="button-container">
                            <a href="#" class="button">Voir</a>
                            <a href="#" class="button danger">Supprimer</a>
                        </div>
                    </article>
                    <article class="article">
                        <h3 class="title">Test 2</h3>
                        <p class="paragraph">Je suis un paragraphe</p>
                        <div class="button-container">
                            <a href="#" class="button">Voir</a>
                        </div>
                    </article>
                    <article class="article">
                        <img src="{{ asset('images/banner.png') }}" alt="Bannière" class="banner">
                        <h3 class="title">Test 3</h3>
                        <p class="paragraph">Je suis un paragraphe</p>
                        <div class="button-container">
                            <a href="#" class="button">Voir</a>
                            <a href="#" class="button icon"><i class="ri-information-fill"></i></a>
                        </div>
                    </article>
                </div>
                <div class="spinner"></div>
                <div style="height: 75vh;"></div>
            </div>
        </main>
@include('layouts.footer')
