<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--  Call fonts -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Ubuntu" rel="stylesheet">

    <!-- Call local style sheets-->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/redirection.css" />

    <title>WB2 - Home appliance</title>
</head>




<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <img class="logo" src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar2/footer/images/wild.png" alt="logo">
        <a class="navbar-brand" href="/index.php">Wild Bazar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/categories/fashion.php">Fashion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories/aquarium.php">Pet shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories/tech.php">High-Tech</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories/watches.php">Watches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories/electromenager.php">Home appliance</a>
                </li>
            </ul>
        </div>
        <button type="button" class="btn btn-warning pull-right">Cart <i class="fas fa-cart-arrow-down"></i></button>
    </nav>
</header>

'

<!-- Main -->
<main class="container-fluid">
    <h1> YOUR PRODUCT HAS BEEN SUCCESSFULLY ADDED </h1>

    <div>
        <a href="<?= $_SERVER['HTTP_REFERER'] ?>">
            <button type="button" class="btn btnInfo">+ Add a new product</button>
        </a>
    </div>

</main>

<!-- Footer -->
<?php

include '../footer.php';

?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Font Awesome  -->
<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

</body>
</html>