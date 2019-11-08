<?php
	require('dbconnect.php');

	require('auth.php');

	if($count>0){
		header('Location:toppage.php');
		exit();
	}else{
	}

	if($_COOKIE['tmp_key']){
		print("ご登録のアドレスにメールを送信しましたのでご確認ください");
	}else{
		print("メールでの認証をお願いいたします");
	}
?>


<html>
	<head>
		<meta charset="utf-8" />
		<script type="text/javascript" charset="UTF-8"></script>
	</head>

	<body>
	
	<!-- <p>メールでの認証をお願いいたします</p> -->
		<form action="./mail.php" method="post">
		<p>mail</p><input type="text" name="to">
		<p><input type="submit" name="send" value="送信"></p>
		</form>
	</body>


</html>