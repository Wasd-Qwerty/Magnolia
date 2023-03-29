<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body style="text-align: center;">
    <?php 
        include_once '../connect.php';
    
        $data = $_POST;
        
        if(isset($data['doLogin'])){
            $errors = array();
            $user = R::findOne('users', 'login = ?', array($data['login']));
            if($user){
                if ($user['password'] == MD5($data['password'])){
                    $_SESSION['logged_user'] = $user;
                    header('Location: ../');
                }
                else{
                    $errors[] = 'Пароль неверный!';
                }
            }
            else{
                $errors[] = 'Пользователь с таким логином не найден!';
            }
            if(!empty($errors)){
                echo '<div class="errors">' . array_shift($errors) . '</div>';
            }
        }
    
    ?>
    <main>
        <h1>Вход</h1>
        
        <div class="line0"></div>
        <form action="login.php" method="post">
            <input type="text" placeholder="Логин" name="login" value="<?= @$data['login']?>"><br>
            <input type="password" placeholder="Пароль" name="password" value="<?= @$data['password']?>"><br>
            <input id="button" name="doLogin" type="submit" value="Войти">
        </form>
        <div class="additionally">
            <p>У вас нет аккаунта? <a href="signUp.php">Зарегистрироваться</a></p>
        </div>
    </main>
</body>
</html>