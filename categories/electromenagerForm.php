<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 20/03/19
 * Time: 14:24
 */

require '../src/electroFunctions.php';

$errors = [];
$inputValues = [];
$colorsAvailable = ['Blue', 'Black', 'Green', 'Pink', 'Grey', 'White', 'Silver'];

$data = cleanArray($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($data['imageUrl'])) {
        $errors['imageUrl'] = 'The url of the image must be filled in';
    }

    $maxLengthUrl = 255;
    if (strlen($data['imageUrl'])> $maxLengthUrl) {
        $errors['imageUrl'] = 'The size of the url must be less than ' . $maxLengthUrl . ' characters';
    }

    if (empty($data['shortTitle'])) {
        $errors['shortTitle'] = 'The short title must be filled in';
    }

    $maxLengthShortTitle = 50;
    if (strlen($data['shortTitle'])> $maxLengthShortTitle) {
        $errors['shortTitle'] = 'The size of the url must be less than ' . $maxLengthShortTitle . ' characters';
    }

    if (empty($data['price'])) {
        $errors['price'] = 'The price must be filled in';
    }

    if (!is_numeric($data['price'])) {
        $errors['price'] = 'The price must be a number';
    }

    if (empty($data['longTitle'])) {
        $data['longTitle'] = $data['shortTitle'];
    }

    $maxLengthLongTitle = 100;
    if (strlen($data['longTitle'])> $maxLengthLongTitle) {
        $errors['longTitle'] = 'The size of the url must be less than ' . $maxLengthLongTitle . ' characters';
    }

    if ($data['colors'] === 'Choose your color') {
        $errors['colors'] = 'You must select a color';
    } elseif (!in_array($data['colors'], $colorsAvailable)) {
        $errors['colors'] = 'You must select a color in the list : ' . implode($colorsAvailable, ', ');
    }

    if (empty($data['technicalDescription'])) {
        $errors['technicalDescription'] = 'The technical description must be filled in';
    }

    if (empty($errors)) {
        header('Location:/categories/electromenagerForm.php');
        exit();
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
        <main class="container">
            <h2>ADD A NEW PRODUCT</h2>
            <form class="addForm" method="POST" action="" enctype="application/x-www-form-urlencoded">
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-9">
                        <label for="imageUrl">
                            Image product
                            <span class="errors"> * <?php
                                if (isset($errors['imageUrl'])):
                                    echo $errors['imageUrl'];
                                endif;
                                ?>
                            </span>
                        </label>
                        <input type="text" class="form-control" id="imageUrl" name="imageUrl"
                               value="<?= htmlentities($data['imageUrl']) ?? '';?>" placeholder="Enter the image url" required>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="shortTitle">
                            Short title
                            <span class="errors">*  <?php
                                if (isset($errors['shortTitle'])):
                                    echo $errors['shortTitle'];
                                endif;
                                ?>
                            </span>
                        </label>
                        <input type="text" class="form-control" id="shortTitle" name="shortTitle"
                               value="<?= htmlentities($data['shortTitle']) ?? '';?>"
                               placeholder="Enter a short title (max 50 chars)" required>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="price">
                            Price
                            <span class="errors">
                                *
                                <?php
                                if (isset($errors['price'])):
                                    echo $errors['price'];
                                endif;
                                ?>
                            </span>
                        </label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price"
                               value="<?= $data['price'] ?? '';?>" placeholder="Enter a price" required>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="longTitle">Long title</label>
                        <input type="text" class="form-control" id="longTitle" name="longTitle" placeholder="Enter a Long title (optionnal)"
                               value="<?= $data['longTitle'] ?? '';?>">
                    </div>
                    <div class="form-group col-md-9">
                        <label for="size">Size</label>
                        <input type="text" class="form-control" id="size" name="size" placeholder="Enter a price (only numbers)"
                               value="<?= htmlentities($data['size']) ?? '';?>">
                    </div>
                    <div class="form-group col-md-9">
                        <label for="power">Power</label>
                        <input type="text" class="form-control" id="power" name="power" placeholder="Enter the power of the product"
                               value="<?= htmlentities($data['power']) ?? '';?>">
                    </div>
    <!--COLOR EN CASE A COCHER-->
                    <div class="form-group col-md-9">
                        <label for="colors">
                            Color
                            <span class="errors">
                                *
                                <?php
                                if (isset($errors['colors'])):
                                    echo $errors['colors'];
                                endif;
                                ?>
                            </span>
                        </label>
                        <select class="form-control" id="colors" name="colors">
                            <option value="" disabled selected>Choose your color</option>
                            <?php

                            foreach ($colorsAvailable as $color) : ?>
                            <option <?php
                            if (isset($data['colors']) && $data['colors'] === $color) :?> selected="selected"<?php endif; ?> >
                                <?= $color; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="technicalDescription">
                            Technical description
                            <span class="errors">
                                *
                                <?php
                                if (isset($errors['technicalDescription'])):
                                    echo $errors['technicalDescription'];
                                endif;
                                ?>
                            </span>
                        </label>
                        <textarea class="form-control" id="technicalDescription" rows="3" name="technicalDescription"
                        placeholder="Enter a technical description" wrap="hard"> <?= htmlentities($data['technicalDescription']) ?? '';?>
                        </textarea>
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

