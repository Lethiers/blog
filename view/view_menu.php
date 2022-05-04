<?php
    //test si connecté
    if(isset($_SESSION['connexion'])){

        if(isset($_POST['admin'])){

            /*-------Admin-------*/

echo'
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Article
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Cree Article</a></li>
                            <li><a class="dropdown-item" href="#">Voir Liste des Articles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Cree Categories</a></li>
                            <li><a class="dropdown-item" href="#">Voir Categories</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="#">Liste des Utilisateurs</a></li>
                </ul>
            </div>
        </div>
        <div class="d-flex align-items-center dropstart">
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Mon compte</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Detail du compte</a></li>
                            <li><a class="dropdown-item" href="#">Se deconnecter</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
</nav>'
}
else{
            /*-------Utilisateur-------*/

echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav" href="#"></a>
            <a class="nav-link" style="color: white" href="#">Liste des Articles</a>
        </li>
    </ul>
    </div>
    <div class="d-flex align-items-center dropstart">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Mon compte</a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Detail du compte</a></li>
                    <li><a class="dropdown-item" href="#">Se deconnecter</a></li>
                </ul>
                </li>
            </ul>
            </div>
    </div>
</div>
</nav>'
    }
}
    else{

            /*-------Visiteur-------*/
            echo '
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" style="color: white" href="#">Liste des Articles</a>
                    </li>
                </ul>
                </div>
                <div class="d-flex align-items-center">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white" href="#">Se Connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white" href="#">Cree un compte</a>
                        </li>
                        </ul>
                </div>
            </div>
            </nav>';
}
?> 