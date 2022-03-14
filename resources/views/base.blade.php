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
                <a href="/"><img src="./img/Marvel.png" style="height: 70px" alt=""></a>
            </div>

        <!-- Hamburger menu -->
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        
        <div class="navbar-links">
            <ul>

                <li><a href="/listCharacter"><span class="menu_primary">Liste Personnages</span></a></li>
                <li><a href="/listDrawer"><span class="menu_primary">Liste Déssinateurs</span></a></li>
                
                <li><a href="/addCharacter"><span class="menu_primary">Ajout Personnage</span></a></li>
                <li><a href="/addDrawer"><span class="menu_primary">Ajout Déssinateur</span></a></li>

                @if(Session::get('loginId'))
                    <li><a href="/dashboard"><span class="connect">Mon Profil</span></a></li>
                @endif
                
                @if(!Session()->has('loginId'))
                    <li><a href="/login"><span class="connect">Connexion</span></a></li>
                @endif  
                
                {{-- <li><a href="/registration">S'inscrire</a></li> --}}

            </ul>
        </div>
    </nav>
    </header>

    <main>

        @yield('content')

    </main>

    <script src="/js/main.js"></script>

    <footer>Copyright 2021 © Tout droits réservés. Thomas Vidal </footer>

</body>
</html>




