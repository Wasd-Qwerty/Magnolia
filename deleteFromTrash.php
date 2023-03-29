<?
include_once 'connect.php';

$product = R::load('basket', $_GET['id']);
R::trash($product);
header('Location: trash.php');
