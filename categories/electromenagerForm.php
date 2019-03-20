<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 20/03/19
 * Time: 14:24
 */



?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--  Call fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alegreya|Ubuntu" rel="stylesheet">

        <!-- Call local style sheets-->
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/electromenager.css"/>
        <link rel="stylesheet" href="../css/ElectromenagerForm.css"/>

        <title>WB2 - Home appliance - ADD</title>
    </head>
    <body>
<!-- Header -->
        <?php

        $classValueBanner = 'home_appliance_banner';
        $imgBannerSrc = '../images/home_appliance_banner.png';
        $titleBanner = 'Home appliance';
        $textBanner = 'Fashion equipment for cooking and housekeeping';

        include '../header.php';

        ?>


<!-- Main -->
        <h2>Ajouter un produit</h2>
        <form class="addForm">
            <div class="form-row justify-content-center">
                <div class="form-group col-md-9">
                    <label for="imageUrl">Image url</label>
                    <input type="text" class="form-control" id="imageUrl" name="imageUrl">
                </div>
                <div class="form-group col-md-9">
                    <label for="shortTitle">Short title</label>
                    <input type="text" class="form-control" id="shortTitle" name="shortTile">
                </div>
                <div class="form-group col-md-9">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group col-md-9">
                    <label for="longTitle">Long title</label>
                    <input type="text" class="form-control" id="longTitle" name="longTitle">
                </div>
                <div class="form-group col-md-4">
                    <label for="size">Size</label>
                    <input type="text" class="form-control" id="size" name="size">
                </div>
                <div class="form-group col-md-4">
                    <label for="power">Power</label>
                    <input type="text" class="form-control" id="power" name="power">
                </div>
<!--COLOR EN CASE A COCHER-->
                <div class="form-group col-md-9 center">
                    <?php
                        $colorsAvailable = ['Blue', 'Black', 'Green', 'Pink', 'Grey', 'White', 'Silver'];
                    for ($i = 0; $i < count($colorsAvailable); $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="color<?=$i?>" name="colors">
                        <label class="form-check-label" for="color<?=$i?>"><?= $colorsAvailable[$i] ?></label>
                    </div>
                    <?php endfor ?>
                </div>
                <div class="form-group col-md-9">
                    <label for="exampleFormControlTextarea1">Technical description</label>
                    <textarea class="form-control" id="technicalDescription" rows="3" name="technicalDescription"></textarea>
                </div>


            </div>
            <div class="center">
                <button type="submit" class="btn btnForm">Sign in</button>
            </div>
        </form>


<!-- Footer -->
        <?php

        include '../footer.php';

        ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <!-- Font Awesome  -->
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"
            integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP"
            crossorigin="anonymous"></script>

    </body>
</html>

