<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Add Type Of Products</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/product.css">
</head>
<body style="text-align: center;">
    <?php
        require 'connect.php';
        
        if(isset($_POST['add'])){
            $data = $_POST;
            $errors = array();
            if(trim($data['name'] == '')){
                $errors[] = 'Введите имя!';
            }
            if(trim($data['value'] == '')){
                $errors[] = 'Введите value!';
            }
           
            if(empty($errors)){
                $product = R::dispense('typeofproduct');
                $product -> id;
                $product -> name = $data['name'];
                $product -> value = $data['value'];
                R::store($product);
                echo '<div class="success">Успешно</div>';
            }
            else{
                echo '<div class="errors" style="color:red; text-align: center;">' . array_shift($errors) . '</div>';
            }
        }
        if (empty($_SESSION['logged_user']) || $_SESSION['logged_user']['access_level'] == 0):
        ?>
            <h1>У вас нет доступа к данной странице</h1>
        <? else: ?>
    <nav>
    </nav>  
    <form class="form" method="post">
        <p>Введите название вида</p>
        <input type="text" class="inputbox" name="name">
        <p>Введите значение для value (на английском)</p>
        <input type="text" class="inputbox" name="value">
        <br><br>
        <button type="submit" name="add" class="button">Добавить</button>
    </form>
<? endif; ?>
</body>
</html>