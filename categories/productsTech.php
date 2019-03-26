<?php

require '../src/connec.php';
$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM products";
$res = $pdo->query($query);
$students = $res->fetchAll();
$products = [

    ['image' => '../images/raspberryPi.JPG',
        'title' => 'raspberry Pi 3',
        'price' => 29.99 ,
        'description' =>'The Raspberry Pi is a series of small single-board computers developed in the United Kingdom by the Raspberry Pi Foundation to promote teaching of basic computer science in schools and in developing countries',
        'feat1' => 'Processeur : 700 MHz ARM1176JZF-S core (ARM11)',
        'feat2' =>'Système sur puce (Soc) : Broadcom BCM2835',
        'feat3' =>'décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0',
        'id' =>'raspi'],

    ['image' => '../images/googleHome.jpg',
        'title' => 'google home',
        'price' => 99.99 ,
        'description' => 'The Raspberry Pi is a series of small single-board computers developed in the United Kingdom by the Raspberry Pi Foundation to promote teaching of basic computer science in schools and in developing countries',
        'feat1' => 'Processeur : 700 MHz ARM1176JZF-S core (ARM11)',
        'feat2' =>'Système sur puce (Soc) : Broadcom BCM2835',
        'feat3' =>'décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0',
        'id' =>'googleHome'],

    ['image' => '../images/google-mini.jpg',
        'title' => 'google mini',
        'price' => 79.99 ,
        'description' => 'The Raspberry Pi is a series of small single-board computers developed in the United Kingdom by the Raspberry Pi Foundation to promote teaching of basic computer science in schools and in developing countries.',
        'feat1' => 'Processeur : 700 MHz ARM1176JZF-S core (ARM11)',
        'feat2' =>'Système sur puce (Soc) : Broadcom BCM2835',
        'feat3' =>'décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0',
        'id' =>'googleMini'],

    ['image' => '../images/connectedwatch.png',
        'title' => 'connected watch',
        'price' => 119.99 ,
        'description' => 'The connected watch is a very beautyful watch witch is connected.',
        'feat1' => 'colot : black',
        'feat2' =>'wireless',
        'feat3' =>'waterproof',
        'id' =>'connectedWatch'],

    ['image' => '../images/bartop.jpg',
        'title' => 'bartop',
        'price' => 119.99 ,
        'description' => 'This bartop will give you so mutch fun ! you will spend lot of time to play it.',
        'feat1' => 'very funny',
        'feat2' =>'wireless',
        'feat3' =>'multi-platforms',
        'id' =>'bartop'],

    ['image' => '../images/domo.jpg',
        'title' => 'DomoBox',
        'price' => 149.99 ,
        'description' => 'This bartop will give you so mutch fun ! you will spend lot of time to play it.',
        'feat1' => 'Wireless',
        'feat2' =>'Jarvis equiped',
        'feat3' =>'vacal command',
        'id' =>'domo'],

    ['image' => '../images/snes.jpg',
        'title' => 'Snes-mini',
        'price' => 79.99 ,
        'description' => 'This Snes-mini will give you so mutch fun ! you will spend lot of time to play it.',
        'feat1' => 'very small',
        'feat2' =>'partable',
        'feat3' =>'very funny',
        'id' =>'snes'],

    ['image' => '../images/linux.jpg',
        'title' => 'linux desktop',
        'price' => 199.99 ,
        'description' => 'This Snes-mini will give you so mutch fun ! you will spend lot of time to play it.',
        'feat1' => 'very small',
        'feat2' =>'partable',
        'feat3' =>'very funny',
        'id' =>'desktop'],

    ['image' => '../images/beat.jpg',
        'title' => 'beat headphones',
        'price' => 129.99 ,
        'description' => 'This Snes-mini will give you so mutch fun ! you will spend lot of time to play it.',
        'feat1' => 'very good sound feeling',
        'feat2' =>'jack 5.0',
        'feat3' =>'high confort',
        'id' =>'beat'],

    ['image' => '../images/vr.jpg',
        'title' => 'occulus VR',
        'price' => 169.99 ,
        'description' => 'This Snes-mini will give you so mutch fun ! you will spend lot of time to play it.',
        'feat1' => 'very good immersion',
        'feat2' =>'ultra hd',
        'feat3' =>'high confort',
        'id' =>'vr'],

    ['image' => '../images/vr.jpg',
        'title' => 'occulus VR',
        'price' => 169.99 ,
        'description' => 'This Snes-mini will give you so mutch fun ! you will spend lot of time to play it.',
        'feat1' => 'very good immersion',
        'feat2' =>'ultra hd',
        'feat3' =>'high confort',
        'id' =>'vr'],

    ['image' => '../images/vr.jpg',
        'title' => 'occulus VR',
        'price' => 169.99 ,
        'description' => 'This Snes-mini will give you so mutch fun ! you will spend lot of time to play it.',
        'feat1' => 'very good immersion',
        'feat2' =>'ultra hd',
        'feat3' =>'high confort',
        'id' =>'vr'],



];

foreach ($products as $product => $data){ ?>

        <div class="col-lg-4 card" style="">
            <img src="<?php echo $data['image'] ?>" class="card-img-top" alt="raspberry pi">
            <div class="card-body">
                <h5 class="card-title"><?php echo$data['title'] ?></h5>
                <p class="card-text"><?php echo$data['price'] ?><i class="fas fa-euro-sign"></i></p>
                <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $data['id'] ?>"><i class="fas fa-info"></i>
                </button>
            </div>
        </div>


    <div class="modal fade" id="<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $data['title'] ?></h5>
                    <p class="card-text"><?php echo $data['price'] ?><i class="fas fa-euro-sign"></i></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <div class="card-modal col-12 col-lg-6 justify-content-center">
                        <img src="<?php echo $data['image'] ?>" class="modal-img" alt="raspberry pi" >
                        <div class="card-body ">
                            <h5 class="card-title-features">Features :</h5>
                            <ul>
                                <li><?php echo $data['feat1'] ?></li>
                                <li><?php echo $data['feat2'] ?></li>
                                <li><?php echo $data['feat3'] ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">

                        <p><?php echo $data['description']?></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add to cart</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>