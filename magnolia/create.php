<?php
 require_once 'connect.php';

 $id = $_POST['id'];
 $Name = $_POST['Name'];
 $Email = $_POST['Email'];

 mysqli_query($connect, "INSERT INTO `subscripe`(`id`, `Name`, `Email`) VALUES (NULL,'$Name','$Email')");

 header('Location: index.php');