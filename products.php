<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/product.css">
    <title>Парфюмерия</title>
</head>
<body>
    <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="index.php">
                                    <img src="image/logo.jpg" alt="" width="70" height="70">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-link" href="#">КОРЗИНА</a>
                                        <a class="nav-link" href="about.html">О НАС</a>
                                        <a class="nav-link" href="katalog.html">КАТАЛОГ</a>
                                    </div>
                                </div>
                                <a class="navbar-brand" class="auth" href="#">
                                    <img src="image/auth.png" alt="" width="45" height="45">
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
    </header>

<?
    include_once 'connect.php';
    $products = R::findAll('catalog', 'type = ?', array($_GET['type']));

    foreach($products as $product):?>
        <div class="cards">
            <div class="card" style="width: 18rem;">
                <img src="<?=$product['url']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-text text-center"><?=$product['name']?></h1>
                    <p class="card-text text-center"><?=$product['description']?></p>
                    <h3><p class="price text-center"><?=$product['price']?></p></h3>
                    <a href="#" class="btn">Добавить в корзину</a>
                </div>
            </div>
        </div>
<?endforeach;?>



</body>
</html>