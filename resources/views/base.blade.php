<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar">
        
        <div class="brand-title">
            <a href="/">Accueil</a>
        </div>

        <!-- Hamburger menu -->
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        
        <div class="navbar-links">
            <ul>

                <li><a href="/listCharacter">Liste des Personnages</a></li>
                <li><a href="/listDrawer">Liste des Déssinateurs</a></li>
                
                <li><a href="/addCharacter">Ajouter un Personnage</a></li>
                <li><a href="/addDrawer">Ajouter un Déssinateur</a></li>
              
                <li><a href="/login">Se connecter</a></li>
                
                <li><a href="/dashboard">Mon Profil</a></li>
                {{-- <li><a href="/registration">S'inscrire</a></li> --}}



            </ul>
        </div>
    </nav>
    </header>

    <main>
        @yield('content')
    </main>
    <script src="/js/main.js"></script>

</body>
</html>




