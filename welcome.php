<?php
   session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="sidebar">
		<header>ARTIST  DASHBOARD</header>
		<ul>
			<li><a href="#"> <i class="fas fa-music text-gradient-primary"></i></a></li>
		</ul>
		
	</div>
<div style="display: flex; justify-content: center;">
	<p style="font-size: 40px;">Hi welcome <b><?php echo $_SESSION['Email']; ?></b></p>
</div>
<a href="logout.php" style="display: flex; justify-content: center;"><button>log out</button></a>
</body>
</html>