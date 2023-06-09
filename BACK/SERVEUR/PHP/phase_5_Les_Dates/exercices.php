<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices sur les dates </title>
</head>

<body>
<h3>1- Trouver le numéro de la semaine de la date 14/07/2019</h3>
    <?php
    // Trouver le numéro de la semaine de la date 14/07/2019
    $myDate = strtotime("07/14/2019");
    $myDate1 = strtotime("01/01/2019");
    //Nombre de seconde dans la semaine
    $semaine = 3600 * 24 * 7;
    echo "Le numéro de la semaine de 14/07/2019 est: " . ceil(($myDate - $myDate1) / ($semaine));
    ?>

    <h3>2- Nombre de jour qui reste pour la fin  de ma formation</h3>
    <?php

    //Trouver le nombre de jour qui reste pour la fin  de ma formation
    $finFormation = strtotime("07/28/2023");
    
    echo "Nombre de jour qui reste pour la fin de ma formation est: " . floor((strtotime("07/28/2023") - time()) / (3600 * 24))." jours";
    ?>


     <h3>3- L'année Bissextile</h3>
    <?php
    /*Pour déterminer q'une année est bissextile on teste 29/02 de cette année avec la fonction checkdate(),
     si le résultat est true donc l'année est bissextile, sinon l'année n'est pas bissextile*/
    //Exemple 
    
    if (checkdate(02, 29, 2023)) {
        echo "L'année 2023 est bissextile";
    } else {
        echo "L'année 2023 n'est pas bissextile";
    }
    ?>


     <h3>4- la date erronée</h3>
     <?php
    //Montrez que la date du 32/17/2019 est erronée
    if (checkdate(17, 32, 2019)) {
        echo "La date est valide";
    } else {
        echo "La date est erronée";
    }
    ?>

   
<h3>5- Afficher l'heure sous forme 11h25 </h3>
<?php
    
    //Affichez l'heure courante sous cette forme : 11h25
    echo date("H\hi");
    ?>


<h3>6- Ajouter un mois à la date courante </h3>
<?php

    //Ajouter un mois à la date courante
    echo date("d-m-Y", strtotime("+1 month"));
    ?>


    <h3>7- le 1000200000  correspond au 11 septembre 2001 11:20:00  y avait les  attentats du 11 septembre 2001 à New York</h3>

    <?php
    //le 1000200000 y avait les  attentats du 11 septembre 2001 à New York
    echo date("d/m/Y H:i:s", 1000200000)


    ?>

</body>

</html>