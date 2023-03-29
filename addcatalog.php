<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Add Catalog</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/product.css">
</head>
<body style="text-align: center;">
    <?php
        include_once 'connect.php';
        if(isset($_POST['add'])){
            $data = $_POST;
            $errors = array();
            if(trim($data['name'] == '')){
                $errors[] = 'Введите название товара!';
            }
            if(trim($data['price'] == '')){
                $errors[] = 'Укажите цену на товар!';
            }
            if(trim($data['description'] == '')){
                $errors[] = 'Введите описание товара!';
            }
            if(trim($data['url'] == '')){
                $errors[] = 'Введите ссылку на картинку!';
            }
            
            if(empty($errors)){
                $product = R::dispense('catalog');
                $product -> name = $data['name'];
                $product -> price = $data['price'];
                $product -> description = $data['description'];
                $product -> url = $data['url'];
                $product -> type = $data['type'];
                R::store($product);
                header('Location: adminka.php');
            }
            else{
                echo '<div class="errors" style="color:red; text-align: center;">' . array_shift($errors) . '</div>';
            }
        }
        if (empty($_SESSION['logged_user']) || $_SESSION['logged_user']['access_level'] == 0):
        ?>
            <div class="zagolovok">
                <h1>У вас нет доступа к данной странице</h1>
            </div>
        <? else: ?>
    <nav>
    </nav>  
    <form class="form" method="post" >
        <p>Введите название товара</p>
        <input value="<?=$product['name']?>" type="text" class="inputbox" name="name">
        <p>Введите цену товара</p>
        <input value="<?=$product['price']?>" type="text" class="inputbox" name="price">
        <p>Введите описание товара</p>
        <input value="<?=$product['description']?>" type="text" class="inputbox" name="description">
        <p>Введите ссылку на картинку товара</p>
        <input value="<?=$product['url']?>" type="text" class="inputbox" name="url">
        <p>
            Выберите вид товара: <br>
            <select name="type">
                <? 
                     $types = R::findAll('typeofproduct');
                     foreach($types as $type):?>
                        <option value="<?=$type['value']?>"><?=$type['name']?></option>
                     <?endforeach;
                ?>
            </select>
        </p>
        <button type="submit" name="add" class="button">Добавить</button>
    </form>
<? endif; ?>
</body>
</html>