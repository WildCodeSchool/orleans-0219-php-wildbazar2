<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alegrya|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/style-tech.css">
    <title>Hello, world!</title>
</head>
<body>

<?php
$classValueBanner = 'home-tech_banner p-0 m-0';
$imgBannerSrc = '../../images/techVr.jpg';
$titleBanner = 'high - tech';
$textBanner = 'The best high-tech articles are here';
include '../../header.php';

$productName = $productPrice = $productDescription = $productFeat1 = $productFeat2 = $productFeat3 = $productId = $productImage = "";

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

    if (empty($_POST["feat1"])) {
        $errors["feat1"] = "A feature is required";
    } else {
        $productFeat1 = testInput($_POST["feat1"]);
    }

    if (empty($_POST["feat2"])) {
        echo "";
    } else {
        $productFeat2 = testInput($_POST["feat2"]);
    }

    if (empty($_POST["feat3"])) {
        echo "";
    } else {
        $productFeat3 = testInput($_POST["feat3"]);
    }

    if (empty($_POST["id"])) {
        $errors["id"] = "Identifiant is required";
    } else {
        $productId = testInput($_POST["id"]);
    }


}



?>
<div class="container-fluid m-0 p-0 ">
<nav class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/categories/fashion.php">Computers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categories/aquarium.php">Mobile Phones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categories/tech.php">Home assistants</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categories/watches.php">Video games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categories/electromenager.php">Sound / Hi-Fi</a>
            </li>
        </ul>
    </div>
</nav>
</div>
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
        <label for="feat1">Feature 1</label>
        <span class="error">* <?php if (isset($errors["feat1"])){echo "A feature is required";};?></span>
        <input type="text" class="form-control" id="feat1" name="feat1" placeholder="" value="<?= $productFeat1; ?> ">
    </div>
    <div class="form-group">
        <label for="feat2">Feature 2</label>
        <input type="text" class="form-control" id="feat2" name="feat2"  placeholder="" value="<?= $productFeat2 ?>">
    </div>
    <div class="form-group">
        <label for="feat3">Feature 3</label>
        <input type="text" class="form-control" id="feat3" name="feat3" placeholder="" value="<?= $productFeat3 ?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Product Id</label>
        <span class="error">* <?php if (isset($errors["id"])){echo "Identifiant is required";}?></span>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="id" placeholder="Enter product Id" value="<?= $productId; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>









<?php include '../../footer.php'; ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>








