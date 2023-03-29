<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\addcatalog.css">
    <title>Admin Panel Edit Catalog</title>
</head>
<body>
    <?php
        require 'connect.php';
        $data = $_POST;
        $id = $_GET['id']; 
        $product = R::load('catalog', $id);

        if(isset($data['delete'])){
            R::trash($product);
            echo '<h2>Товар удален. <a href="adminpanel.php">Вернуться назад.</a></h2>';
        }
        if(isset($data['edit'])){
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
            if(trim($data['type'] == '')){
                $errors[] = 'Введите вид товара!';
            }
           
            if(empty($errors)){
                $product -> name = $data['name'];
                $product -> price = $data['price'];
                $product -> description = $data['description'];
                $product -> url = $data['url'];
                $product -> type = $data['type'];
                R::store($product);
                echo '<div class="success">Успешно</div>';
            }
            else{
                echo '<div class="errors" style="color:red; text-align: center;">' . array_shift($errors) . '</div>';
            }
        }
        if (false):
        ?>
            <h1>У вас нет доступа к данной странице</h1>
        <? else: ?>
    <nav>
    </nav>  
    <form class="form" method="post" action="" style="text-align: center;">
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
                    foreach($types as $type){
                        if ($type['value'] = $product['type']): ?>
                            <option value="<?=$type['value']?>" selected><?=$type['name']?></option>
                        
                        <?else:?>
                            <option value="<?=$type['value']?>"><?=$type['name']?></option>
                        <?endif;
                    }
                ?>
            </select>
        </p>
        <button type="submit" name="edit" class="button">Подтвердить</button>
        <button type="submit" name="delete" class="button">Удалить</button>
    </form>
<? endif; ?>
</body>
</html>