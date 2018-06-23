<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign In</title>
		<link rel='shortcut icon' type='image/x-icon' href='../resources/Sessel-coloured.png'/>
		<div class="header">
			<img src="../resources/image1.jpg">
			<img src="../resources/logo1.png">
			<img src="../resources/image3.jpg">
		</div>
		<?php if ($_SESSION['incorrect_password'] == 1) :?>
            <script type="text/javascript">
                alert("Wrong password");
            </script>
	    <?php endif;?>
        <link rel="stylesheet" type="text/css" href="../form.css"/>
		<link rel="stylesheet" type="text/css" href="../nav.css"/>
	</head>
	<body>
    <div class="add">
        <a href="../index.php" class="brand"><img src="../resources/logo.png"></a>
		<form action="auth.php" method="post">
			Login: <input type="text" name="login">
			<br>
			Password: <input type="password" name="password">
			<br><input type="submit" name="submit" value="Submit">
		</form>
    </div>
	</body>
</html>
