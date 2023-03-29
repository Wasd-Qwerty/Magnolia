<?
    include_once 'connect.php';
    $data = $_GET;
    if(empty($_SESSION['logged_user'])){
        echo '<a href="auth/signUp.php">Авторизуйся бро</a>';
    }
    else{
        $trashproduct = R::dispense('basket');
        $trashproduct -> id;
        $trashproduct -> user_id = $_SESSION['logged_user']['id'];
        $trashproduct -> product_id = $_GET['id'];
        R::store($trashproduct);
        $product = R::findOne('catalog, id = ?', $_GET['id']);

        header('Location: katalog.html?type='.$product['type']);
    }
    