<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <header id="header">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid w-100">
                <a class="navbar-brand b-flex menu-pricipal" href="#">
                    <img src="public/images/logo.png" alt="Téléthon">
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="collectes_read.php">Les collectes</a>
                        </li>
                        <!-- class="active" page actuelle-->
                        <li class="nav-item">
                            <a class="nav-link" href="stands_read.php">Les stands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="partners_read.php">Les partenaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="events_read.php">Les évènements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog_read.php">Le blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages_read.php">Les pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users_read.php">Les utilisateurs</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="public/images/profil.jpg" alt="Photo de profil">
                                Mon profil     
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profile_update.php">Changer le compte</a></li>
                                <li><a class="dropdown-item" href="profile_change.php">Géger le compte</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="profile_exit.php">Se déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>

                    

                </div>
            </div>
        </nav>

    </header>