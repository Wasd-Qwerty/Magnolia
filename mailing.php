<?
include_once 'connect.php';
$subscribes = R::findAll('Subscribe');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рассылки</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/product.css">
</head>
<body>
    
    
    
    <?
    
    if (isset($_SESSION['logged_user']) && $_SESSION['logged_user']['access_level'] > 0){
        ?>
<a href="adminka.php" style="width: 80px;" class="btn">Назад</a>
<table style="width:500px; font-size:larger; border-collapse: collapse; border: 2px solid white;" >
    <tr>
        <th style="padding: 3px; border: 1px solid; text-align: left; background-color:aliceblue;">Имя</th>
        <th style="padding: 3px; border: 1px solid; text-align: left; background-color:aliceblue;">Почта</th>
    </tr>

        <?
        foreach($subscribes as $subscribe):?>
            <tr>
                <td style="padding: 3px; border: 1px solid; text-align: left;">
                    <?echo $subscribe['name'];?>
                </td>
                <td style="padding: 3px; border: 1px solid; text-align: left;">
                    <? echo $subscribe['email']?>
                </td>
            </tr>


<?endforeach;}?>
</table>
    
</body>
</html>