<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <script src="../../public/js/script.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
          rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="../../public/asset/img/favicon.png">
</head>


<body>
<header>
    <!--  Navigation  -->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Mon portefolio</li>
            <li class="sidebar-nav-item"><a href="../public/index.php">Accueil</a></li>
            <li class="sidebar-nav-item"><a href="../src/Template/listPosts.php">Nos articles</a></li>
            <li class="sidebar-nav-item"><a href="#">Services</a></li>
            <li class="sidebar-nav-item"><a href="#">Portfolio</a></li>
            <li class="sidebar-nav-item"><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center mt-3">
                <img src="../../public/asset/img/logo_transparent.png" alt="" class="w-25">
            </div>

        </div>
    </div>

</header>


<div class="container">
    <div class="row">
        <h2>Nos derniers articles</h2>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>Nom de l'article</h3>
                        <p>Date de l'article</p>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis euismod metus
                            id aliquet. Vivamus elementum accumsan iaculis. Vestibulum ante ipsum primis in faucibus
                            orci luctus et ultrices posuere cubilia curae; Ut lacus augue, gravida id elementum ac,
                            rutrum nec arcu. Duis in felis at leo congue accumsan dictum a ligula.</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="../src/Template/onePost.php">Lire l'article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>Nom de l'article</h3>
                        <p>Date de l'article</p>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis euismod metus
                            id aliquet. Vivamus elementum accumsan iaculis. Vestibulum ante ipsum primis in faucibus
                            orci luctus et ultrices posuere cubilia curae; Ut lacus augue, gravida id elementum ac,
                            rutrum nec arcu. Duis in felis at leo congue accumsan dictum a ligula.</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="../src/Template/onePost.php">Lire l'article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>Nom de l'article</h3>
                        <p>Date de l'article</p>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis euismod metus
                            id aliquet. Vivamus elementum accumsan iaculis. Vestibulum ante ipsum primis in faucibus
                            orci luctus et ultrices posuere cubilia curae; Ut lacus augue, gravida id elementum ac,
                            rutrum nec arcu. Duis in felis at leo congue accumsan dictum a ligula.</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="../src/Template/onePost.php">Lire l'article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <h2 class="justify-content-center align-items-center d-flex">Contactez-nous</h2>
        <div class="col-6">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Objets</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Message</label>
                    <textarea class="form-control" aria-label="With textarea"></textarea>

                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Je ne suis pas un robot, promis !</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
require("../src/Template/footer.php");