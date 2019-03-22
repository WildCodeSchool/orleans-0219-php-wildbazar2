<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alegrya|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style_wildbazar_form.css">
    <title>Formulaire_fashion!</title>
</head>
<body>

<?php

$classValueBanner = 'fashion-banner';
$imgBannerSrc = '../images/mode homme.jpg';
$titleBanner = 'Fashion';
$textBanner = '';
include 'header.php';

$productName = $productPrice = $productDescription = $productSize = $productColor = $productSex = $productImage = "";


$errors = [];
function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["image"])) {
        $errors["image"] = "Image url is required";
    } else {
        $productImage = testInput($_POST["image"]);
    }
    if (empty($_POST["name"])) {
        $errors["name"] = "Name is required";
    } else {
        $productName = testInput($_POST["name"]);
    }
    if (empty($_POST["price"])) {
        $errors["price"] = "Price is required";
    } else {
        $productPrice = testInput($_POST["price"]);
    }
    if (empty($_POST["description"])) {
        $errors["description"] = "Description is required";
    } else {
        $productDescription = testInput($_POST["description"]);
    }
    if (empty($_POST["size"])) {
        $errors["size"] = "A size is required";
    } else {
        $productSize = testInput($_POST["size"]);
    }
    if (empty($_POST["color"])) {
        $errors["color"] = "A color is required";
    } else {
        $productColor = testInput($_POST["color"]);
    }
    if (empty($_POST["sex"])) {
        $errors["sex"] = "Sex is required";
    } else {
        $productSex = testInput($_POST["sex"]);
    }
    if (empty($_POST["id"])) {
        $errors["id"] = "Identifiant is required";
    } else {
        $productId = testInput($_POST["id"]);
    }
}
?>

<div class="container mt-5 mb-5">
    <h1 class="form-title">Add some new products :</h1>
    <form method="post" class="product-form mt-5">
        <div class="form-group">
            <label for="name">Image's product</label>
            <span class="error">* <?php if (isset($errors["image"])){echo "Name is required";}?></span>
            <input type="url" class="form-control" id="name" name="image" placeholder="Enter the image url" value="<?= $productImage; ?>">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <span class="error">* <?php if (isset($errors["name"])){echo "Name is required";}?></span>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter the product's name" value="<?= $productName; ?>">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <span class="error">* <?php if (isset($errors["price"])){echo "Price is required";}?></span>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter the product's price" value="<?= $productPrice; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <span class="error">* <?php if (isset($errors["description"])){echo "Description is required";}?></span>
            <textarea class="form-control" id="description" name="description" placeholder="Please enter description, more than 10 words less than 200" rows="3"><?= $productDescription; ?></textarea>
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <span class="error">* <?php if (isset($errors["size"])){echo "A size is required";}?></span>
            <input type="text" class="form-control" id="size" name="size" placeholder="please enter a size" value="<?= $productSize; ?>">
        </div>
        <div class="form-group">
            <label for="color">Color </label>
            <span class="error">* <?php if (isset($errors["color"])){echo "Color is required";}?></span>
            <input type="text" class="form-control" id="color" name="color"  placeholder="please select a color" value="<?= $productColor ?>">
        </div>
        <div class="form-group">
            <label for="sex">Sex</label>
            <span class="error">* <?php if (isset($errors["sex"])){echo "Sex is required";}?></span>
            <input type="text" class="form-control" id="sex" name="sex" placeholder="please select sex" value="<?= $productSex ?>">
        </div>

        <button type="submit" class="btn btn-primary">envoyer</button>
    </form>
</div>









<?php include 'footerForm.php'; ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>




