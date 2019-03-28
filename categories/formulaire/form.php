<?php

//Connection to DATABASE
require '../../connec.php';
$pdo = new PDO(DSN, USER, PASS);

//Cleaning DATA
function cleaningData(array $data) : array
{
    foreach ($data as $datum => $value) {
        $data[$datum] = htmlspecialchars(stripslashes(trim($data[$datum])));
    }
    return $data;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = cleaningData($_POST);
    $errors = array();

    if (empty($data['p_name'])) {
        $errors['p_name'] = "* Please enter name";
    } else {
        $nameMaxLength = 50;
        if (strlen($data['p_name']) > $nameMaxLength ) $errors['p_name'] = "* Name must not be longer than 50 characters";
    }
    if (empty($data['p_price'])) {
        $errors['p_price'] = "* Please enter price";
    } else {
        if (!is_numeric($data['p_price'])) $errors['p_price'] = "* Price must be a number";
    }
    if (empty($data['p_branch'])) $errors['p_branch'] = "* Please enter branch";
    if (empty($data['p_battery'])) $errors['p_battery'] = "* Please enter battery";
    if (empty($data['p_shipping'])) $errors['p_shipping'] = "* Please enter weight shipping";
    if (empty($data['p_caracteristics'])) {
        $errors['p_caracteristics'] = "* Please enter caracteristics";
    } else {
        $caracteristicsMaxLength = 350;
        if (strlen($data['p_caracteristics']) > $caracteristicsMaxLength) $errors['p_caracteristics'] = "* Caracteristics must not be longer than 350 characters";
    }
    if (empty($data['p_in_stock'])) $errors['p_in_stock'] = "* Please precise availability";
    if (empty($data['p_quantity'])) $errors['p_quantity'] = "* Please enter quantity";
    if (empty($data['p_image'])) $errors['p_image'] = "* Please upload an image";

    if (count($errors) == 0) {
        
        $query = 'INSERT INTO watches (p_name, p_price, p_caracteristics, p_in_stock, p_branch, p_battery, p_shipping, p_image, p_quantity) VALUES (:p_name, :p_price, :p_caracteristics, :p_in_stock, :p_branch, :p_battery, :p_shipping, :p_image, :p_quantity)';

        $statement = $pdo->prepare($query);
        $statement->bindValue(':p_name', $data['p_name'], PDO::PARAM_STR);
        $statement->bindValue(':p_price', $data['p_price'], PDO::PARAM_INT);
        $statement->bindValue(':p_caracteristics', $data['p_caracteristics'], PDO::PARAM_STR);
        $statement->bindValue(':p_in_stock', $data['p_in_stock'], PDO::PARAM_BOOL);
        $statement->bindValue(':p_branch', $data['p_branch'], PDO::PARAM_STR);
        $statement->bindValue(':p_battery', $data['p_battery'], PDO::PARAM_STR);
        $statement->bindValue(':p_shipping', $data['p_shipping'], PDO::PARAM_STR);
        $statement->bindValue(':p_image', $data['p_image'], PDO::PARAM_STR);
        $statement->bindValue(':p_quantity', $data['p_quantity'], PDO::PARAM_INT);
        $statement->execute();

        header('Location: form.php');
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="form_style.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/watches.css">

    <title>Hello, world!</title>
</head>
<body>
    <!-- Header -->
    <?php
    $classValueBanner = 'watches_banner';
    $imgBannerSrc = '../../images/slide-watch.png';
    $titleBanner = 'Only for Men';
    $textBanner = 'Time is life';

    include '../../header.php';
    ?>
    <div class="container mt-5 mb-5">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="on" novalidate>
            <div class="form-group">
                <label for="p_name">Product name</label>
                <input type="text" class="form-control" id="p_name" name="p_name" autofocus required placeholder="Not longer than 50 characters" value="<?= (!empty($data['p_name'])) ? htmlentities($data['p_name']) : ''; ?>">
                <div class="text-danger"><?php if(!empty($errors['p_name'])) echo $errors['p_name']; ?></div>
            </div>
            <div class="form-group">
                <label for="p_price">Price</label>
                <input type="text" class="form-control" id="p_price" name="p_price" placeholder="$" pattern="[0-9]" required value="<?= (!empty($data['p_price'])) ? htmlentities($data['p_price']) : ''; ?>">
                <div class="text-danger"><?php if(!empty($errors['p_price'])) echo $errors['p_price']; ?></div>
            </div>
            <div class="form-group">
                <label for="p_caracteristics">Caracteristics</label>
                <textarea class="form-control" id="p_caracteristics" rows="3" name="p_caracteristics" placeholder="Not longer than 200 characters" required></textarea>
                <div class="text-danger"><?php if(!empty($errors['p_caracteristics'])) echo $errors['p_caracteristics']; ?></div>
            </div>
            <div>
                <select class="form-control mt-4" id="p_in_stock" name="p_in_stock">
                    <option value="">Precise availability</option>
                    <option value="true">in Stock</option>
                    <option value="false">out of Stock</option>
                </select>
                <div class="text-danger"><?php if(!empty($errors['p_in_stock'])) echo $errors['p_in_stock']; ?></div>
            </div><br>
            <div class="form-group">
                <label for="p_branch">Branch</label>
                <input type="text" class="form-control" id="p_branch" name="p_branch" required value="<?= (!empty($data['p_branch'])) ? htmlentities($data['p_branch']) : ''; ?>">
                <div class="text-danger"><?php if(!empty($errors['p_branch'])) echo $errors['p_branch']; ?></div>
            </div>
            <div class="form-group">
                <label for="p_battery">Batteries</label>
                <input type="text" class="form-control" id="p_battery" name="p_battery" required value="<?= (!empty($data['p_battery'])) ? htmlentities($data['p_battery']) : ''; ?>">
                <div class="text-danger"><?php if(!empty($errors['p_battery'])) echo $errors['p_battery']; ?></div>
            </div>
            <div class="form-group">
                <label for="p_shipping_weight">Shipping Weight</label>
                <input type="text" class="form-control" id="p_shipping_weight" name="p_shipping" required value="<?= (!empty($data['p_shipping'])) ? htmlentities($data['p_shipping']) : ''; ?>">
                <div class="text-danger"><?php if(!empty($errors['p_shipping'])) echo $errors['p_shipping']; ?></div>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="p_image" name="p_image" multiple enctype="multipart/form-data" required value="<?= (!empty($data['p_image'])) ? htmlentities($data['p_image']) : ''; ?>">
                <label class="custom-file-label" for="p_image">Choose image(s) for this product</label>
                <div class="text-danger"><?php if(!empty($errors['p_image'])) echo $errors['p_image']; ?></div>
            </div><br/><br/>
             <div class="form-group">
                <input type="number" class="form-control" id="p_quantity" name="p_quantity" pattern="[0-9]" placeholder="Enter quantity here" required value="<?= (!empty($data['p_quantity'])) ? htmlentities($data['p_quantity']) : ''; ?>">
                <div class="text-danger"><?php if(!empty($errors['p_quantity'])) echo $errors['p_quantity']; ?></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <?php require '../../footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

