<?php
 if ('index.php' == $_SERVER['PHP_SELF']) {

                echo '<footer class="container-fluid footer">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6">
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#home"> Home </a> </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="categories/fashion.php">Fashion</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#about">About us </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="categories/aquarium.php">Pet shop</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#topSelling">Top selling </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="categories/tech.php">High-tech</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#email">Contact </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="categories/watches.php">Watches</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#">Legal mentions </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="categories/electromenager.php">Home appliance</a></div>
            </div>
            <br>
        </div>
        <div class="form col-12 col-sm-12 col-md-6">
            <h3>Contact us</h3>
            <form method="post" action="traitement.php">
                <p>
                    <label for="email"><i class="far fa-envelope"></i></label>
                    <input type="email" name="email" id="email" placeholder="wildbazard2@example.com">
                </p>
                <p>
                    <label for="message"> <i class="far fa-comment"></i> </label>  <input type="text" name="message" class="inputText" id="message">
                </p>
                <button type="button" class="btn btn-lg" id="btnFooter">Submit</button>
            </form>
        </div>
    </div>
    <div class="info">
        <p>
            <img src="../images/wild.png" class="footerImg" alt="logo">
            <span class="titleFooter"> WILD BAZAR</span> 1, rue de la Paix - 75000 Paris - <i class="fas fa-phone"></i> 01-23-45-67-89
        </p>
    </div>
</footer>';}

else{
    echo '<footer class="container-fluid footer">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6">
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="../index.php"> Home </a> </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="fashion.php">Fashion</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="../index.php#about">About us </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="aquarium.php">Pet shop</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="../index.php#topSelling">Top selling </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="categories-tech.php">High-tech</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="../index.php#email">Contact </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="watches-items.php">Watches</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#">Legal mentions </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="electromenager.php">Home appliance</a></div>
            </div>
            <br>
        </div>
        <div class="form col-12 col-sm-12 col-md-6">
            <h3>Contact us</h3>
            <form method="post" action="traitement.php">
                <p>
                    <label for="email"><i class="far fa-envelope"></i></label>
                    <input type="email" name="email" id="email" placeholder="wildbazard2@example.com">
                </p>
                <p>
                    <label for="message"> <i class="far fa-comment"></i> </label>  <input type="text" name="message" class="inputText" id="message">
                </p>
                <button type="button" class="btn btn-lg" id="btnFooter">Submit</button>
            </form>
        </div>
    </div>
    <div class="info">
        <p>
            <img src="../images/wild.png" class="footerImg" alt="logo">
            <span class="titleFooter"> WILD BAZAR</span> 1, rue de la Paix - 75000 Paris - <i class="fas fa-phone"></i> 01-23-45-67-89
        </p>
    </div>
</footer>';
}
?>

<!-- <footer class="container-fluid footer">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6">
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#home"> Home </a> </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="fashion.php">Fashion</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#about">About us </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="aquarium.php">Pet shop</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#topSelling">Top selling </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="categories-tech.php">High-tech</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#email">Contact </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="watches-items.php">Watches</a></div>
            </div>
            <div class="row tableFooter">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="#">Legal mentions </a></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4"> <a href="electromenager.php">Home appliance</a></div>
            </div>
            <br>
        </div>
        <div class="form col-12 col-sm-12 col-md-6">
            <h3>Contact us</h3>
            <form method="post" action="traitement.php">
                <p>
                    <label for="email"><i class="far fa-envelope"></i></label>
                    <input type="email" name="email" id="email" placeholder="wildbazard2@example.com">
                </p>
                <p>
                    <label for="message"> <i class="far fa-comment"></i> </label>  <input type="text" name="message" class="inputText" id="message">
                </p>
                <button type="button" class="btn btn-lg" id="btnFooter">Submit</button>
            </form>
        </div>
    </div>
    <div class="info">
        <p>
            <img src="../images/wild.png" class="footerImg" alt="logo">
            <span class="titleFooter"> WILD BAZAR</span> 1, rue de la Paix - 75000 Paris - <i class="fas fa-phone"></i> 01-23-45-67-89
        </p>
    </div>
</footer> -->