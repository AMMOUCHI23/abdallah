<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant au cœur d'Amiens, commander en ligne parmi une large sélection de plats, manger sur place ou à emporter. Des Menus variés pour le plaisir des petis et de grands dans votre réstaurant The District">
    <title>Réstaurant The District</title>
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
    

      <div class="contenaire mt-5 mx-3">
        <div class="row justify-content-center">
            <div class="col-md-4 mx-3">
                <img src="assets/media/img/category/Plats principaux/courgettes-farcies-au-riz-sauvage.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-md-5 mx-3">
                <h2 class="text-primary">Courgettes farcies </h2>
                <h4 class="py-3">9.00 €</h4>
                <label class="card-text text-end  " for="quantite"><h5>Quantité</h5></label>
              <input type="number" class="text-center quantite" placeholder="1" name="quantite" >
              <h5 class="text-primary mt-3">Ingrédients :</h5>
              <p>Courgette, riz sauvage, beurre, saucisse italienne, oignon, ail, maïs, tomate,persil, fromage, œuf, sel et poivre du moulin.</p>
              <a href="#" class="btn btn-primary my-2">Ajouter au panier</a><br>
              <a href="plats_catégorie_plats_principaux.php" class="btn btn-lg btn-primary my-5 " >Continuer les achats <command></a>
                <a href="#" class="btn btn-lg btn-success  ms-md-5 " >Passer la commande <command></a>
            </div>
        </div>
      </div>


    </div>
    <div class="container d-none">
        <div class="row text-center my-5 ">
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-lg">Précédent</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary  btn-lg">Suivant</button>
            </div>

        </div>

    </div>

    <div class="container text-center rounded-pill col-sm-4 col-6-md bg-danger-subtle mt-5">
        <div class="row justify-content-center flex ">
            <div class="col-3 py-2 ">
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
</body>

</html>