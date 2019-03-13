<?php

$modalContents = [
    $title => ['titre1', 'titre2'],
    $img => ["../images/grille_pain_russel_noir.jpg", "../images/grille_pain_rouge.jpg"],
    $description => ['blabla', 'bli', 'blo'],
    $features => [],
    $price => [],
]


echo $_SERVER['PHP_SELF'];
?>


<div class="modal fade" id="blackToaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Black toaster - Russel Hobbs</h5>
                <h3> 30 &euro;</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
                <div class="card col-sm-6 modalImg">
                    <img class="card-img-top" src="../images/grille_pain_russel_noir.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="carac">Technical description :</h5>
                        <ul class="carac">
                            <li><span class="bold">Size :</span> 20x15cm</li>
                            <li><span class="bold">Power :</span> 585W</li>
                            <li><span class="bold">Color :</span> Black</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 features">

                    <p> This toaster with a beautiful black design will fit well in your kitchen.</p>
                    <p>Toast clip included.</p>
                    <p>2 Large slots. </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
            </div>
        </div>
    </div>
</div>