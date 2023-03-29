<?php
 require_once 'connect.php';

 $data = $_POST;

 $manchik = R::dispense('subscribe');
 $manchik -> id;
 $manchik -> name = $data['Name'];
 $manchik -> email = $data['Email'];
 R::store($manchik);

 header('Location: index.php');