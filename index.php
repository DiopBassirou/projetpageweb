<?php
require "action/checkTheCommande.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <nav class="nav-lien navbar navbar-expand-lg position-fixed navbar-dark bg-dark w-100">
        <div class="container-fluid ">
            <a href="#" class="navbar-brand">MENU</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#voir">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="voir">
                <ul class=" navbar-nav ms-auto ">
                    <li class="nav-item"><a href="#" class="nav-link text-white me-4">Acceuil</a></li>
                    <li class="nav-item"><a href="#" class="nav-link  text-white me-4">Decouvert</a></li>
                    <li class="nav-item"><a href="#" class="nav-link  text-white me-4">Apropos</a></li>
                    <li class="nav-item"><a href="#" class=" btn btncommand me-4">Commender</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="banner py-3">
        <div class="container my-5 py-5 ">
            <div class="row">
                <div class=" col col-md-6 "></div>
                <div class=" col col-md-6 ">
                    <div class=" my-5 py-5">
                <h1 class="text-acceui">
                    Restaurant Multi-Saveur A votre Gout Dans la ville De Mbour
                </h1>
                <p>
                    <button class="btn btncommand ">Commender Maintenant</button>
                    <button class="btn btncommande  ms-4">Reserver</button>
                </p>
            </div>
        </div>
        </div>
        </div>
    </section>
    <section class="mesfruits py-3">
        <dic class="container ">
            <div class="card">
                <div class="row my-3">
                    <div class="col-6">
                        <img src="/images/pizza-6478478_640.jpg" class="card-img img-fluid " style="height: 300px;"
                            alt="">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h1 class="card-title">VOIR LES PRODUITS</h1>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Omnis nisi dolor autem laboriosam dolore id sunt eligendi debitis.
                                Corrupti libero
                                sapiente debitis veritat
                            </p>
                            <p class="card-text">updat 3min ago</p>
                            <button class="btn btncommand"><a href="#">Acheter</a></button>
                        </div>
                    </div>
                </div>
                <div class="row my-3 ">
                    <div class="col-6">
                        <div class="card-body">
                            <h1 class="card-title">VOIR LES PRODUITS</h1>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Omnis nisi dolor autem laboriosam dolore id sunt eligendi debitis.
                                Corrupti libero
                                sapiente debitis veritat
                            </p>
                            <p class="card-text">updat 3min ago</p>
                            <button class="btn btncommand"><a href="#">Acheter</a></button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="carousel slide" data-bs-ride="carousel" id="okii">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/images/platter-2009590_640.jpg" class=" card-img img-fluid d-block w-100" style="height: 300px;" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/food-5282718_640.jpg" class="card-img img-fluid d-block w-100" style="height: 300px;" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/platter-2009590_640.jpg" class="card-img img-fluid d-block w-100" style="height: 300px;" alt="">
                                </div>
                            </div>
                            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#okii"><span
                                    class="carousel-control-prev-icon"></span></button>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-6">
                        <img src="/images/gyro-1759333_640.jpg" class="card-img img-fluid " style="height: 300px;" alt="">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h1 class="card-title">VOIR LES PRODUITS</h1>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Omnis nisi dolor autem laboriosam dolore id sunt eligendi debitis.
                                Corrupti libero
                                sapiente debitis veritat
                            </p>
                            <p class="card-text">updat 3min ago</p>
                            <button class="btn btncommand"><a href="#">Acheter</a></button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="mesvariete py-3">
        <div class="container">
            <div class="row">
                <div class="card justify-content-center  text-center nav-light bg-transparent">
                    <h3 class="text-light">Nos varietes</h3>
                    <div class="card-header">
                        <ul class="nav justify-content-center text-uppercase  fs-5 pb-3">
                            <li class="nav-item">
                                <a href="" class="nav-link text-white ">mespot</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-white">link</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-white">savourer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body text-white">
                        <h5 class="card-title">spcial title traitrement</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis impedit </p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <div class="col">
                    <div class="card">
                        <img src="/images/sushi-8113165_640.jpg" style="height: 300px;" alt="" class="img-card-top">
                        <div class="card-body">
                            <h5 class="card-title">poisson</h5>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Reprehenderit, ducimus accusamus. Illum tempore aspernatur, explicabo
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/images/istockphoto-556561965-612x612.jpg" style="height: 300px;" alt="" class="img-card-top">
                        <div class="card-body">
                            <h5 class="card-title">poisson</h5>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Reprehenderit, ducimus accusamus. Illum tempore aspernatur, explicabo
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/images/steak-978666_640.jpg" style="height: 300px;" alt="" class="img-card-top ">
                        <div class="card-body">
                            <h5 class="card-title">poisson</h5>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Reprehenderit, ducimus accusamus. Illum tempore aspernatur, explicabo
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/images/istockphoto-1182493107-612x612.jpg" style="height: 300px;" alt="" class="img-card-top">
                        <div class="card-body">
                            <h5 class="card-title">poisson</h5>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Reprehenderit, ducimus accusamus. Illum tempore aspernatur, explicabo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="card bg-dark">
                    <div class="card-body text-white text-center">
                        <h1 class="card-title">LES DELICES INTERDITS</h1>
                        <p class="card-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi debitis ullam quam? Eaque veniam sapiente perspiciatis. Id, laudantium ipsa, dicta reprehenderit numquam officia facere totam atque adipisci vitae dolor animi.
                        </p>
                    </div>
                    <div class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <img src="/images/food-829055_640.jpg" class=" card-img mb-5 d-block w-80" style="height: 600px;" alt="">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/image.png" class="card-img mb-5 d-block w-80" style="height: 600px;" alt="">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/drink-8257030_640.jpg" class="card-img mb-5 d-block w-80" style="height: 600px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="formulaire py-5 ">
        <div class="container">
            <form action="" method="post">
                <div class="row text-light text-uppercase">
                    <div class="col-md-5 mb-3">
                        <labbel for="exempl" class="form-label">Vos Commands</labbel>
                        <input id="exempl" name="commande" type="text" class="form-control">
                    </div>
                    <div class="col-md-5 mb-3">
                        <labbel class="form-label">Votre mail</labbel>
                        <input type="email" name="mail" class="form-control">
                    </div>
                    <div class="col-md-5 mb-3">
                        <labbel class="form-label">Nom Et Prenom</labbel>
                        <input type="text" name="nomPrenom" class="form-control">
                    </div>
                    <div class="col-md-5 mb-3">
                        <labbel class="form-label">Veuillez Saisir Un COntact</labbel>
                        <input type="number" name="contact" class="form-control">
                    </div>
                    <div class="col-md-5 mb-3">
                        <labeel class="form-label">Veuillez Selectioner le nombre de place que vous reservez</labeel>
                        <input type="number" name="placeReserver" class="form-control" id="">
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="" class="form-label">Veuillez Donner Le Jour Et L'heur Que vous prevoyez pour Venir</label>
                        <input type="datetime-local" name="heurDarriver" value="" class="form-control">
                    </div>
                </div>
                <input class="btn-primary text-center" value="valider" type="submit" name="valider" id="">
            </form>
        </div>
        <?php if(isset($error)):?>
        <h1><?= $error ?></h1>
        <?php endif ?>
    </section>
    <section class="footer py-5">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-md-3 col">
                        <h4>Le restaurant</h4>
                        <ul class="list-unstyled">
                            <li><a href="" class="text-decoration-none text-dark">Active</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Link</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Link</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Disable</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col">
                        <h4>Mes partenaires</h4>
                        <ul class="list-unstyled">
                            <li><a href="" class="text-decoration-none text-dark">Active</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Link</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Link</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Disable</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col">
                        <h4>Lien utiles</h4>
                        <ul class="list-unstyled">
                            <li><a href="" class="text-decoration-none text-dark">Active</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Link</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Link</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Disable</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col">
                        <h4>Mes offres</h4>
                        <ul class="list-unstyled">
                            <li><a href="" class="text-decoration-none text-dark">Active</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Link</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Link</a></li>
                            <li><a href="" class="text-decoration-none text-dark">Disable</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    <script src="/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>