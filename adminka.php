<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/product.css">
</head>
<body style="text-align: center;">
<?php 
    include_once 'connect.php';
    
    $products = R::findAll('catalog');

    if(isset($_POST['show'])){
        $products = R::findAll('catalog', 'type = ?', array($_POST['type']));
        if($_POST['type'] == 'all'){
            $products = R::findAll('catalog');
        }
    }

    if (empty($_SESSION['logged_user']) || $_SESSION['logged_user']['access_level'] == 0):
        ?>
        <div class="zagolovok">
            <h1>У вас нет доступа к данной странице</h1>
        </div>
    <? else: ?>
        <a href="index.php" style="width: 80px;" class="btn">Назад</a>
        <a href="mailing.php" style="width: 80px;" class="btn">Рассылки</a>
        <a href="addcatalog.php" style="width: 80px;" class="btn">Добавить</a>
        <form method="post">
            <select name="type">
                <option value="all">Все</option>
                <? 
                    $types = R::findAll('typeofproduct');
                    foreach($types as $type){
                        if ($type['value'] == $_POST['type']): ?>
                            <option value="<?=$type['value']?>" selected><?=$type['name']?></option>
                        
                        <?else:?>
                            <option value="<?=$type['value']?>"><?=$type['name']?></option>
                        <?endif;
                    }
                ?>
            </select>
            <br>
            <input name="show" type="submit" value="Показать">
        </form>

<div class="cards">
    <?foreach($products as $product):?>
            <div class="card" style="width: 18rem;">
                <img src="<?=$product['url']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-text text-center"><?=$product['name']?></h1>
                    <p class="card-text text-center"><?=$product['description']?></p>
                    <h3><p class="price text-center"><?=$product['price']?></p></h3>
                    <a href="editcatalog.php?id=<?=$product['id']?>" class="btn">Редактировать</a>
                </div>
            </div>
            <?endforeach;?>
            
</div>
<? endif;?>
</body>
</html>