<!-- Our landing page -->

<?php
	session_start();
	include("actionsWithDB/connection.php");

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Minishop</title>
		<link rel='shortcut icon' type='image/x-icon' href='resources/Sessel-coloured.png'/>
		<link rel="stylesheet" type="text/css" href="nav.css"/>
		<link rel="stylesheet" type="text/css" href="form.css"/>
	</head>
	<body>
		<div class="header">
			<img src="resources/image1.jpg">
			<img src="resources/logo1.png">
			<img src="resources/image3.jpg">
		</div>
		<div class="menu">
			<a href="index.php" class="brand"><img src="resources/logo.png"></a>
			<nav>
				<ul>
                    <?php if ($_SESSION['role'] == 1): ?>
                        <li><a href="admin.php">Admin</a></li>
                    <?php endif; ?>
				 	<li><a href="">Categories</a>
						<ul>
							<li><a href="index.php?cat=1">Living room</a></li>
							<li><a href="index.php?cat=2">Dining room</a></li>
							<li><a href="index.php?cat=3">Bedroom</a></li>
							<li><a href="index.php?cat=4">Bathroom</a></li>
							<li><a href="index.php?cat=5">Kitchen</a></li>
							<li><a href="index.php?cat=6">Patio</a></li>
						</ul>
					</li>
                    <?php if ($_SESSION['logged_in'] == 1): ?>
                        <li><a href="DataBase/logout.php">logout</a></li>
                    <?php else: ?>
                    <li><a href="DataBase/auth.php">SIGN IN</a></li>
					<?php endif; ?>
                    <li><class="brand"><img src="resources/basket.png"></a></li>
				</ul>
			</nav>
            <div>
                <?php


                ?>
            </div>
		</div>

	</body>
	<hr/>
	<div = id="footer">
    	<hr/> 2018 &copy; knikanor & akasamar
	</div>
</html>
