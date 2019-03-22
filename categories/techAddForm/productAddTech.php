<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alegrya|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style-tech-form.css">
    <title>Hello, world!</title>
</head>
<body>

<?php
$classValueBanner = 'home-tech_banner p-0 m-0';
$imgBannerSrc = '/images/techVr.jpg';
$titleBanner = 'high - tech';
$textBanner = 'The best high-tech articles are here';
include 'headerForm.php';

$errors = [];

include '../../src/functions/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = cleanInput($_POST);

    if (empty($data["image"])) {
        $errors["image"] = "Image url is required";
    }
    if (empty($data["name"])) {
        $errors["name"] = "Name is required";
    }
    if (empty($data["price"])) {
        $errors["price"] = "Price is required";
    }

    if (!is_numeric($data['price'])) {
        $errors['price'] = 'Price must be a number';
    }

    if (empty($data["description"])) {
        $errors["description"] = "Description is required";
    }
    if (empty($data["feat1"])) {
        $errors["feat1"] = "A feature is required";
    }
    if (empty($errors)){
        header('location:productAddTech.php');
        exit();
    }
}

?>

<div class="container mt-5 mb-5">
<h1 class="form-title">Adding a new product :</h1>
<form method="post" class="product-form mt-5">
    <div class="form-group">
        <label for="name">Image's product</label>
        <span class="error">* <?php if (isset($errors["image"])){echo "Name is required";}?></span>
        <input type="url" class="form-control" id="name" name="image" placeholder="Enter the image url" value="<?= $data['image'] ?? ""; ?>">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <span class="error">* <?php if (isset($errors["name"])){echo "Name is required";}?></span>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter the product's name" value="<?= $data['name'] ?? ""; ?>">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <span class="error">* <?php if (isset($errors["price"])){echo "Price is required";}?></span>
        <input type="text" class="form-control" id="price" name="price" placeholder="Enter the product's price" value="<?= $data['price'] ?? ""; ?>">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <span class="error">* <?php if (isset($errors["description"])){echo "Description is required";}?></span>
        <textarea class="form-control" id="description" name="description" placeholder="Please enter description, more than 10 words less than 200" rows="3"><?= $data['description'] ?? ""; ?></textarea>
    </div>
    <div class="form-group">
        <label for="feat1">Processor</label>
        <span class="error">* <?php if (isset($errors["feat1"])){echo "A feature is required";};?></span>
        <input type="text" class="form-control" id="feat1" name="feat1" placeholder="" value="<?= $data['feat1'] ?? ""; ?> ">
    </div>
    <div class="form-group">
        <label for="feat2">Screeen size</label>
        <input type="text" class="form-control" id="feat2" name="feat2"  placeholder="" value="<?= $data['feat2'] ?? ""; ?>">
    </div>
    <div class="form-group">
        <label for="feat3">Weight</label>
        <input type="text" class="form-control" id="feat3" name="feat3" placeholder="" value="<?= $data['feat3'] ?? "";?>">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
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








