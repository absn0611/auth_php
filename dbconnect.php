<?php
try {
    $db = new PDO('mysql:dbname=auth_user;host=127.0.0.1:8889;charset=utf8', 'root', 'root');

} catch(PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}

?>