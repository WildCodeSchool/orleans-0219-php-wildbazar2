<?php
require 'connec.php';
$pdo = new PDO(DSN, USER, PASS);
$query = "SELECT * FROM fashion";
$statement = $pdo->query($query);
$fashion = $statement->fetchAll(PDO::FETCH_ASSOC);


/*
$fashion = [

    ['title' => 'Milano',
        'src' => '../images/fashion-01.jpg',
        'price' => 150,
        'size' => '43',
        'category' =>'Man',
        'color' =>'Black and Brown',
        'description' =>'Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.New shoes became more accessible to the middle classes in the eighteenth century, owing to relative increases in incomes and new manufacturing methods. The development of large workshops, which produced ready-made shoes by hand helped to make shoes more affordable.',
        'id' =>'raspi'],

    ['title' => 'Puma',
        'src' => '../images/fashion-02.jpg',
        'price' => 90,
        'size' => '43',
        'category' =>'Man',
        'color' =>'Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.New shoes became more accessible to the middle classes in the eighteenth century, owing to relative increases in incomes and new manufacturing methods. The development of large workshops, which produced ready-made shoes by hand helped to make shoes more affordable.',
        'id' =>'raspi'],

    ['title' => 'Addidas super stars',
        'src' => '../images/fashion-03.jpg',
        'price' => 80,
        'size' => '37',
        'category' =>'Woman',
        'color' =>'White',
        'description' =>'Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.New shoes became more accessible to the middle classes in the eighteenth century, owing to relative increases in incomes and new manufacturing methods. The development of large workshops, which produced ready-made shoes by hand helped to make shoes more affordable.',
        'id' =>'raspi'],

    ['title' => 'Milano',
        'src' => '../images/fashion-04.jpg',
        'price' => 100,
        'size' => '43',
        'category' =>'Man',
        'color' =>'Black',
        'description' =>'Featuring are Rich leather upper, Premium Leather and cap toe high-shine finish, Traditional lace up closure, SBreathable and soft linings and padded footbed, Superior comfort with cushioned footbed, Stacked heel.',
        'id' =>'raspi'],

    ['title' => 'Jean straight',
        'src' => '../images/fashion-05.jpg',
        'price' => 70,
        'size' => '32/34',
        'category' =>'Man',
        'color' =>'Blue',
        'description' =>'Straight fit jeans with frayed rips at legs. Five pockets. Front zip and metal button closure.Jeans are pants made from denim or dungaree cloth. They were invented by Jacob Davis and Levi Strauss in 1873 and a worn still but in a different context.',
        'id' =>'raspi'],

    ['title' => 'Jean slim',
        'src' => '../images/fashion-06.jpg',
        'price' => 80,
        'size' => '32/34',
        'category' =>'',
        'color' =>'Blue',
        'description' =>'Washed skinny fit jeans with frayed rips at legs. Five pockets. Front zip and metal button closure.Jeans are pants made from denim or dungaree cloth. They were invented by Jacob Davis and Levi Strauss in 1873 and a worn still but in a different context.',
        'id' =>'raspi'],

    ['title' => 'Jean skinny',
        'src' => '../images/fashion-07.jpg',
        'price' => 75,
        'size' => '32/34',
        'category' =>'Man',
        'color' =>'décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0',
        'description' =>'Washed skinny fit jeans with frayed rips at legs. Five pockets. Front zip and metal button closure.Jeans are pants made from denim or dungaree cloth. They were invented by Jacob Davis and Levi Strauss in 1873 and a worn still but in a different context.',
        'id' =>'raspi'],

    ['title' => 'Jean 501',
        'src' => '../images/fashion-08.jpg',
        'price' => 70,
        'size' => '30/32',
        'category' =>'',
        'color' =>'décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0',
        'description' =>'jeans with frayed rips at legs. Five pockets. Front zip and metal button closure.Jeans are pants made from denim or dungaree cloth. They were invented by Jacob Davis and Levi Strauss in 1873 and a worn still but in a different context.',
        'id' =>'raspi'],

    ['title' => 'Short-sleeve shirt',
        'src' => '../images/fashion-09.jpg',
        'price' => 40,
        'size' => '',
        'category' =>'Man',
        'color' =>'Red',
        'description' =>'Relaxed fit shirt with collar, long sleeves, and buttoned cuffs. Soft washed effect. Front button closure. There is perhaps no other item of apparel that defines a man’s style quite like the shirt – they’ve been a staple of men’s wardrobes for as long as anyone can remember and although athleisure types would probably beg to differ, it’s difficult to imagine a world without them.',
        'id' =>'raspi'],

    ['title' => 'shirt',
        'src' => '../images/fashion-10.jpg',
        'price' => 50,
        'size' => 'M',
        'category' =>'Man',
        'color' =>'White',
        'description' =>'Relaxed fit shirt with collar, long sleeves, and buttoned cuffs. Soft washed effect. Front button closure. There is perhaps no other item of apparel that defines a man’s style quite like the shirt – they’ve been a staple of men’s wardrobes for as long as anyone can remember and although athleisure types would probably beg to differ, it’s difficult to imagine a world without them.',
        'id' =>'raspi'],

    ['title' => 'Jean shirt',
        'src' => '../images/fashion-11.jpg',
        'price' => 40,
        'size' => 'M',
        'category' =>'Man',
        'color' =>'Blue',
        'description' =>'Relaxed fit shirt with collar, long sleeves, and buttoned cuffs. Soft washed effect. Front button closure. There is perhaps no other item of apparel that defines a man’s style quite like the shirt – they’ve been a staple of men’s wardrobes for as long as anyone can remember and although athleisure types would probably beg to differ, it’s difficult to imagine a world without them.',
        'id' =>'raspi'],

    ['title' => 'Cored shirt',
        'src' => '../images/fashion-12.jpg',
        'price' => 40,
        'size' => 'M',
        'category' =>'Man',
        'color' =>'Black and White',
        'description' =>'Relaxed fit shirt with collar, long sleeves, and buttoned cuffs. Soft washed effect. Front button closure. There is perhaps no other item of apparel that defines a man’s style quite like the shirt – they’ve been a staple of men’s wardrobes for as long as anyone can remember and although athleisure types would probably beg to differ, it’s difficult to imagine a world without them.',
        'id' =>'raspi'],

];

*/

foreach ($fashion as $data){ ?>

        <div class="col-lg-3 card" style="">
            <img src="<?php echo $data['images'] ?>" class="card-img-top" alt="timberland">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data['Title'] ?></h5>
                <p class="card-text"><?php echo $data['price'] ?><i class="fas fa-euro-sign"></i></p>
                <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#id<?php echo $data['id'] ?>"><i class="fas fa-info"></i>
                </button>
            </div>
        </div>


    <div class="modal fade" id="id<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $data['Title'] ?></h5>
                    <p class="card-text"><?php echo $data['price'] ?><i class="fas fa-euro-sign"></i></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <div class="card-modal col-12 col-lg-6 justify-content-center">
                        <img src="<?php echo $data['images'] ?>" class="modal-img" alt="timberland">
                        <div class="card-body">
                            <h5 class="card-title-features">Description :</h5>
                            <ul>
                                <li><?php echo $data['size'] ?></li>
                                <li><?php echo $data['color'] ?></li>
                                <li><?php echo $data['category'] ?></li>
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