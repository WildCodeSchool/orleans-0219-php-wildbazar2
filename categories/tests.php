
//$getImage = glob("../images/montre-0*");
//$imagesDirToArray = array();
//
//foreach(glob("../images/montre-0*") as $img) {
//    $imagesDirToArray[] = $img;
//}
//
//for ($i = 0; $i <= count($imagesDirToArray); $i++) {
//    if ($imagesDirToArray[$i]) {
//        echo $imagesDirToArray[$i];
//    }
//}
//

<?php
    $files = glob("../images/montre-*.{jpg,png}", GLOB_BRACE);
    echo '<pre>';
    var_dump($files);
    echo '</pre>';

    foreach($files as $file => $value){ ?>

    <div class="card cont-watches col-xl-3 col-lg-3 col-md-4 col-sm-6 n-bd">
        <img src="<?php echo $value; ?>" class="card-img-top" alt="watches">
        <div class="card-body">
            <h5 class="card-title">Zeiger Men Watch</h5>
            <p class="card-text">30.00 €</p>
            <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button>
            <a href="#montre-001" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
        </div>
    </div>

<?php } ?>

//function accum(string $s) : string {
//    for ( $i = 0 ; $i <= strlen($s) ; $i++ ) {
//        echo $newStr = str_repeat($s[$i], $i + 1);
//
//    }
//    return $newStr = strtoupper($newStr[$i++]);
//}
//
//echo accum('abc');