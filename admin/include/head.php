<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header id="header">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="public/image/logo.png" alt="Téléthon">
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="collectes_read.php">Les collectes</a>
                        </li>
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
                            <a class="nav-link active" aria-current="page" href="blog.php">Le blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users_read.php">Les utilisateurs</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mon profil
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profile_update.php">Modifier son profil</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="profile_exit.php">Se déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>

                    

                </div>
            </div>
        </nav>

    </header>