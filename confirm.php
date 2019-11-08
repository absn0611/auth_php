<?php
    print "確認しました";

    $key = $_GET["tmp_key"];
    $tmpkey = $_COOKIE['tmp_key'];
    $authkey = $_GET['auth_key'];
    $id = $_GET["id"];

    if($tmpkey === $key){
        print "same"."\n".$authkey;
        require('dbconnect.php');

        $statement = $db->prepare('UPDATE users SET auth_key=? WHERE id ='.$id);
        $statement->execute(array($_COOKIE['auth_key']));

        header('Location: toppage.php');
        
        exit();
        
    }else{
        header('Location: index.php');
        exit();
        
    }
?>