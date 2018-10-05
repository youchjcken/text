<?php
include('./users.php') 
$obj_users = new users();
$users = $obj_users->getUsers();
var_dump($users);
die();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<link href="public/css/styles.css" rel="stylesheet" type="text/css">

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class ="type-12">
			<div class="container">
				<div align="center" class="type"><a href="#"><h1>Our Team</h1></a></div>
				<div class="row">
					<div class="col-md-4 col-sm-6 sol-xs-12 class">
						<div class="hover">
						<div class="images">
							<img src="public/images/1.jpg">
						</div>
						<div class="overlays">
						<div class="content">
						<div class="Tieude">
							<a href="#"><h3>ROBERT JOHNSON</h3></a>
						</div>
					</div>
					

				</div>
			</div>
		</div>
	</header>

</body>
</html>