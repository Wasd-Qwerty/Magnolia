<?php
$connect = mysqli_connect('localhost', 'root', '', 'Magnolia');

if (!$connect){
    die('у вас проблемы с подключением к БД');
}