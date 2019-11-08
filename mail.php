
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			if(!$_POST["to"]){
				header("Location:index.php");
			}
			$to = $_POST["to"];
			require('dbconnect.php');

			$statements = $db->query('SELECT * FROM users WHERE email="'.$to.'"');
			$count =$statements->fetchColumn();
			// echo $count;
			if($count>0){
				$statements = $db->query('SELECT * FROM users WHERE email="'.$to.'"');

				while($statement = $statements->fetch()){
					var_dump($statement["id"]);
					$random_hash = md5(uniqid(rand(), true));	
					$random_hash2 = md5(uniqid(rand(), true));
					setcookie('tmp_key',$random_hash,time()+60,'/',false);
					setcookie('auth_key',$random_hash2,time()+60*10,'/',false);
		
					mb_language("Japanese");
					mb_internal_encoding("UTF-8");
		 
					$title = "タイトルです";
					$key = "1分以内にこちらのurlにアクセスしてください。"."\n"."url:http://localhost:8888/confirm.php?tmp_key=".$random_hash."&auth_key=".$random_hash2."&id=".$statement["id"];
					$header = 'From: absan611@gmail.com' . "\r\n";
					$header .= 'Return-Path: absan611@gmail.com';
		 
					if(mb_send_mail($to, $title, $key, $header, '-f' . 'absan611@gmail.com')){
						header('Location:index.php');
						exit();
					} else {
						echo "メールの送信に失敗しました";
						
					}

				}
	
			}else{
				header('Location:index.php');
			}
				
		?>
