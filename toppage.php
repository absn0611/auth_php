<!DOCTYPE html>
<?php
    require('dbconnect.php');
    require('auth.php');
    if($count>0){

    }else{
        header('Location:index.php');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>サービストップ画面</p>
    <p>認証を通過するとこの画面に入れます</P>
</body>
</html>