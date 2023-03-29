<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body style="text-align: center;">
    <?php 
        include_once '../connect.php';
        $data = $_POST;

        if(isset($data['doSignUp'])){
            $errors = array();
            if(trim($data['name'] == '')){
                $errors[] = 'Введите имя!';
            }
            if(trim($data['login'] == '')){
                $errors[] = 'Введите логин!';
            }
            if($data['password'] == ''){
                $errors[] = 'Введите пароль!';
            }
            if (R::count('users', "login = ?", array($data['login'])) > 0){
                $errors[] = 'Пользователь с таким логином уже существует!';
            }

            if(empty($errors)){
                $user = R::dispense('users');
                $user -> id;
                $user -> name = $data['name'];
                $user -> login = $data['login'];
                $user -> password = MD5($data['password']);
                $user -> accessLevel = 0;
                R::store($user);
                $_SESSION['logged_user'] = $user;
                header('Location: ../');
            }
            else{
                echo '<div class="errors">' . array_shift($errors) . '</div>';
            }
        }
    ?>

    <main>
        <h1>Регистрация</h1>
        
        <div class="line0"></div>
        <form action="signUp.php" method="post">
            <input type="text" placeholder="Имя" name="name" value="<?= @$data['name']?>"><br>
            <input type="text" placeholder="Логин" name="login" value="<?= @$data['login']?>"><br>
            <input type="password" placeholder="Пароль" name="password" value="<?= @$data['password']?>"><br>
            <input id="button" name="doSignUp" type="submit" value="Войти">
        </form>
        <div class="additionally">
            <p>У вас уже есть аккаунт? <a href="login.php">Войти</a></p>
        </div>
    </main>
</body>
</html>