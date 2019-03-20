<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 20/03/19
 * Time: 14:24
 */

$errors = [];
$inputValues = [];

if ($_POST) {

    if (empty($_POST['imageUrl'])) {
        $errors['imageUrl'] = 'The url must be filled in';
    }

    if (empty($_POST['shortTitle'])) {
        $errors['shortTitle'] = 'The short title must be filled in';
    }

    if (empty($_POST['price'])) {
        $errors['price'] = 'The price must be filled in';
    }

    if (is_int($_POST['price'])) {
        $errors['price'] = 'The price must be a round number';
    }

    if (empty($_POST['technicalDescription'])) {
        $errors['technicalDescription'] = 'The technical description must be filled in';
    }

    if (empty($errors)) {
        header('Location:/categories/electromenager.php');
    }

}

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
        <main>
            <h2>Ajouter un produit</h2>
            <form class="addForm" method="post" action="" enctype="application/x-www-form-urlencoded">
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-9">
                        <label for="imageUrl">Image url</label>
                        <input type="text" class="form-control" id="imageUrl" name="imageUrl" value="<?= trim($_POST['imageUrl']);?>" required>
                        <p class="errors"> <?php
                            if (isset($errors['imageUrl'])):
                                echo $errors['imageUrl'];
                            endif;
                            ?>
                        </p>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="shortTitle">Short title</label>
                        <input type="text" class="form-control" id="shortTitle" name="shortTitle" value="<?= trim($_POST['shortTitle']);?>" >
                        <p class="errors"> <?php
                            if (isset($errors['shortTitle'])):
                                echo $errors['shortTitle'];
                            endif;
                            ?>
                        </p>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="<?= trim($_POST['price']);?>" required>
                        <p class="errors"> <?php
                            if (isset($errors['price'])):
                                echo $errors['price'];
                            endif;
                            ?>
                        </p>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="longTitle">Long title</label>
                        <input type="text" class="form-control" id="longTitle" name="longTitle" value="<?= trim($_POST['longTitle']);?>">                               } ?>">
                    </div>
                    <div class="form-group col-md-9">
                        <label for="size">Size</label>
                        <input type="text" class="form-control" id="size" name="size" value="<?= trim($_POST['size']);?>">
                    </div>
                    <div class="form-group col-md-9">
                        <label for="power">Power</label>
                        <input type="text" class="form-control" id="power" name="power" value="<?= trim($_POST['power']);?>">
                    </div>
    <!--COLOR EN CASE A COCHER-->
                    <div class="form-group col-md-9">
                        <label for="colors">Color</label>
                        <select class="form-control" id="colors" name="colors">
                            <?php
                            $colorsAvailable = ['Choose a color', 'Blue', 'Black', 'Green', 'Pink', 'Grey', 'White', 'Silver'];
                            for ($i = 0; $i < count($colorsAvailable); $i++) : ?>
                            <option <?php
                            if ($_POST['colors'] == $colorsAvailable[$i]) {?> selected="selected"<?php } ?> >
                                <?= $colorsAvailable[$i]; ?>
                            </option>
                            <?php endfor ?>
                        </select>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="technicalDescription">Technical description</label>
                        <textarea class="form-control" id="technicalDescription" rows="3" name="technicalDescription" "><?= trim($_POST['technicalDescription']);?></textarea>
                        <p class="errors"> <?php
                            if (isset($errors['technicalDescription'])):
                                echo $errors['technicalDescription'];
                            endif;
                            ?>
                        </p>
                    </div>
                </div>
                <div class="center">
                    <button type="submit" class="btn btnForm">+ Add</button>
                </div>
            </form>
        </main>


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

