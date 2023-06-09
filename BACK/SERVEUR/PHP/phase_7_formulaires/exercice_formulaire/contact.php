<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fil Rouge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>
    <nav class="p_navbar navbar  navbar-expand-lg bg-danger-subtle">

        <div class="container-fluid text-uppercase mx-4 py-3 ">
            <img src="assets/media/img/the_district_brand/fond.png" class="img-fluid rounded" id="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto  mb-lg-0 nav-fill pe-5 ">

                    <li class="nav-item px-2 ">
                        <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="categorie.html">Catégorie</a>
                    </li>
                    <li class="nav-item px-2 ">
                        <a class="nav-link active" aria-current="page" href="plats.html">Plats</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-5" type="Recherche" placeholder="Rechercher..." aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Recherche</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col">
                <img class="img-fluid rounded" id="fond" src="assets/media/img/fond2.png" alt="image nom de réstaurant"
                    titre="image nom de réstaurant">
            </div>
        </div>
    </div>
    <form method="post" action="monscript.php" name="contact" class="row g-3 my-5 ms-3">
        <div class="row justify-content-center">
            <div class="col-md-4 my-3">
                <label for="inputNom" class="form-label">Nom*</label>
                <input type="text" class="form-control" name="nom" id="inputNom">
                <p id="nom_inv" style="color: red;"></p>
            </div>
            <div class="col-md-4 my-3">
                <label for="inputPrenom" class="form-label">Prénom*</label>
                <input type="text" class="form-control" name="prenom" id="inputPrenom">
                <p id="prenom_inv" style="color: red;"></p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 my-3">

                <label for="inputEmail" class="form-label">Email*</label>
                <input type="email" class="form-control" name="email" id="inputEmail">
                <p id="email_inv" style="color: red;"></p>
            </div>
            <div class="col-md-4 my-3">
                <label for="inputTelephone" class="form-label">Téléphone*</label>
                <input type="tel" class="form-control" name="telephone" id="inputTelephone">
                <p id="telephone_inv" style="color: red;"></p>
            </div>
        </div>
        </div>
        <div class="row  justify-content-center">
            <div class="col-md-8 my-3">
                <label for="text" class="">Votre demande*</label>
                <textarea class="form-control" placeholder="Votre demande..." name="text" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <p id="text_inv" style="color: red;"></p>
                <p id="obligatoire"> * Champs Obligatoires</p>
            </div>
        </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-3 mt-3">
                <button type="submit" id="envoi" class="btn btn-primary btn-lg">Envoyer</button>

            </div>
        </div>
    </form>

    <div class="container text-center rounded-pill col-sm-4 col-6-md bg-danger-subtle ">
        <div class="row justify-content-center flex ">
            <div class="col-3   py-2 ">
                <img class="img-fluid rounded survol" id="insta" src="assets/media/img/Instagram-Icon.png" width="50px"
                    alt="image de logo instagram" title="image de logo instagram">
            </div>
            <div class="col-3 py-2">
                <img class="img-fluid rounded survol" id="face" src="assets/media/img/face.png"
                    alt="image de logo facebook" width="50px" title="image de logo facebook">
            </div>
            <div class="col-3 py-2">
                <img class="img-fluid rounded survol" id="whatsapp" src="assets/media/img/whatsapp.png" width="50px"
                    alt="image de logo whatsapp" title="image de logo whatsapp">
            </div>
            <div class="col-3 py-2">
                <img class="img-fluid rounded survol" id="twitter" src="assets/media/img/twitter.png" width="50px"
                    alt="image de logo twitter" title="image de logo twitter">

            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="assets/javascript/script.js"></script>
</body>

</html>