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
	<style>
		body{
			font-family: 'Roboto',sans-serif
		}  
        *{
        	margin: 0;
        	padding: 0;
        	list-style: none;
        	text-decoration: none;

        }
        
        .sidebar{
        	position: flex;
        	left: 0;
        	width: 250px;
        	height: 100%;
        	background: #042331;

        }
        .sidebar header{
        	font-size: 22px;
        	
            }










	</style>
</head>
<body>
	<div class="sidebar">
		<header>ARTIST  DASHBOARD</header>
		<ul>
			<li><a href="#"> <i class="fas fa-home text-gradient-primary">HOME</i></a></li>
			<li><a href="#"> <i class="fas fa-music text-gradient-primary">MUSIC</i></a></li>
			<li><a href="#"> <i class="fas fa-list text-gradient-primary">PLAYLIST</i></a></li>
			<li><a href="#"> <i class="fas fa-th-list text-gradient-primary">GENRE</i></a></li>
		</ul>
		
	</div>
<div style="display: flex; justify-content: center;">
	<p style="font-size: 40px;">Hi welcome <b><?php echo $_SESSION['Email']; ?></b></p>
</div>
<a href="logout.php" style="display: flex; justify-content: center;"><button>log out</button></a>
</body>
</html>