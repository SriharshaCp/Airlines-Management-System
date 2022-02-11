<?php require('../header.php');


?>
<html>
<head>
	<title></title>
</head>
<body style="background:#979997;">
	<div style="width: 100%; margin-top: 50px;">
		<div id="div3" style="width: 100%; margin-top: 35px;">
			<div style="background: white; margin-left: 30%; width: 40%; opacity: 1; box-shadow: 2px 2px 5px 5px #9fcc9f; border-radius: 10px; outline: none;">

				<img style=" margin-left: 40%;margin-top: 20px; width: 20%; outline: none; border-radius: 40px;" src="../icon/loading.gif">
				<h1 style="font-size: 20px; margin:30px; padding-bottom: 20px;dd">Server Down.....<br>Please Visit few Minute Later.....</h1>
<?php 
header('refresh:5 url=../');

?>
				
			</div>
		</div>
</body>
</html>