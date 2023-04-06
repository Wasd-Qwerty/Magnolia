<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
<a href="index.php" style="width: 80px;" class="btn">Назад</a>

<div class="cards">

<?
    include_once 'connect.php';
    if(empty($_SESSION['logged_user'])){
        echo '<a href="auth/signUp.php">Авторизуйся бро</a>';
    }
    else{
        
        $productsId = R::findAll('basket', 'user_id = ?', array($_SESSION['logged_user']['id']));
        $sumPrice = 0;
        foreach($productsId as $id){
            $products = R::find('catalog', 'id = ?', array($id['product_id']));
            foreach($products as $product):?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?=$product['url']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-text text-center"><?=$product['name']?></h1>
                            <p class="card-text text-center"><?=$product['description']?></p>
                            <h3><p class="price text-center"><?=$product['price']?></p></h3>
                            <a href="deleteFromTrash.php?id=<?=$id['id']?>" class="btn">Убрать из корзины</a>
                        </div>
                    </div>
                    
                    <?
                $sumPrice += $product['price'];    
            endforeach;
        }?>
   
</div>
    <div style="text-align: center; position:absolute; left: 50%; transform:translate(-50%, 0%)">
        <h1><?
        echo $sumPrice;
        ?> р.</h1>
        <a href="ordering.php" style="width: 120px;" class="btn">Оформить заказ</a>
    </div>
<?  }?>
</body>
</html>