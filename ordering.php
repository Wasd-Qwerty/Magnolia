<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/product.css">
</head>
<body style="text-align: center;">
<a href="index.php" style="width: 80px;" class="btn">Назад</a>
<?php 
    include_once 'connect.php';
    
    if(empty($_SESSION['logged_user'])){
        echo '<a href="auth/signUp.php">Авторизуйся бро</a>';
    }
    else{
        $data = $_POST;
    
        if (isset($data['send'])){
            if(trim($data['name'] == '')){
                $errors[] = 'Введите имя!';
            }
            if(trim($data['email'] == '')){
                $errors[] = 'Введите почту!';
            }
            if(trim($data['phoneNumber'] == '')){
                $errors[] = 'Введите номер!';
            }
            if (trim($data['address'] == '')){
                $errors[] = 'Введите адрес!';
            }
            if (empty($errors)){
                $ordering = R::dispense('ordering');
                $ordering -> id;
                $ordering -> name = $data['name'];
                $ordering -> email = $data['email'];
                $ordering -> phoneNumber = $data['phoneNumber'];
                $ordering -> address = $data['address'];
                R::store($ordering);
                header('Location: /');
            }
        }

   
?>
    <form method="post">
        <input type="text" name="name" placeholder="Имя" value="<?=$data['name']?>"><br>
        <input type="email" name="email" placeholder="Почта" value="<?=$data['email']?>"><br>
        <input type="tel" name="phoneNumber" placeholder="+79123456789" value="<?=$data['phoneNumber']?>"><br>
        <input type="text" name="address" placeholder="Адрес" value="<?=$data['address']?>"><br>
        <input type="submit" name="send">
    </form>
<? }?>
</body>
</html>