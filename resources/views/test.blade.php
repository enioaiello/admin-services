@include('layouts.header')
        <main class="main">
            <div class="container">
                <img src="{{ asset('images/articlesui/banner.png') }}" alt="ArticlesUI 4" class="banner">
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
                <div class="alert">
                    Je suis une alerte simple
                </div>
                <div class="alert danger">
                    Je suis une alerte importante
                </div>
                <div class="alert details">
                    <div class="head">
                        <img src="{{ asset('images/logo.png') }}" alt="Icon" class="icon">
                        <h3 class="subtitle">Notification</h3>
                    </div>
                    <p class="content">Vous consultez la page de test <strong>ArticlesUI</strong> en version 4. Certains éléments peuvent ne pas fonctionner correctement. Merci de faire une
                        <a href="https://github.com/enioaiello/atomix/issues" target="_blank" class="link">issue</a> en cas de problème.</p>
                </div>
                <form class="form">
                    <h2 class="title">Connexion</h2>
                    <div class="inputs">
                        <label class="label">
                            <input type="email" name="email" id="email" placeholder="Adresse email" class="input">
                        </label>
                        <label class="label">
                            <input type="password" name="password" id="password" placeholder="Mot de passe" class="input">
                        </label>
                        <a href="#" class="link">Mot de passe oublié</a>
                        <input type="submit" value="Se connecter" class="button">
                    </div>
                </form>
            </div>
        </main>
@include('layouts.footer')
