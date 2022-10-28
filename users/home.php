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
        @import url('https://fonts.google apis.com/css?family=Josefin+display: =swap')
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
            position: fixed;
            left: 0;
            width: 250px;
            height: 100%;
            background: #042331;

        }
        .sidebar header{
            font-size: 22px;
            color: white;
            text-align: center;
            line-height: 70px;
            background: #063146;
            user-select: none;

            }
              
        .sidebar ul a{
            display: block;
            height: 100%;
            width: 100%;
            line-height: 65px;
            font-size: 20px;
            color: white;
            padding-left: 40px;
            box-sizing: border-box;
            border-top:1px solid rgba(255, 255,255,.1);
            border-bottom: 1px solid black; 
            transition: .4s;

        }
        ul li.hover a{
            padding-left: 50px;
        }
        
        .sidebar ul a i{
            margin-right: 16px;
        }
           
         













    </style>
</head>
<body>
    <div class="sidebar">
        <header><i class="fas fa-person text-gradient-primary">ARTIST  DASHBOARD</i></header>
        <ul>
            <li><a href="home1.php"> <i class="fas fa-home text-gradient-primary">HOME</i></a></li>
            <li><a href="#"> <i class="fas fa-music text-gradient-primary">MUSIC</i></a></li>
            <li><a href="#"> <i class="fas fa-list text-gradient-primary">PLAYLIST</i></a></li>
            <li><a href="#"> <i class="fas fa-th-list text-gradient-primary">GENRE</i></a></li>
            <li><a href="logout.php" style="display: flex; justify-content: center;"> <i class="fas fa-setting text-gradient-primary"><button>log out</button></a></i></a>

        </ul>
        


</body>
</html>