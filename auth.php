<?php
    if($_COOKIE['auth_key']){
        $authkey = $_COOKIE['auth_key'];
        $statements = $db->query('SELECT * FROM users WHERE auth_key="'.$authkey.'"');
        $count =$statements->fetchColumn();
    }else{
        
    }
   
?>