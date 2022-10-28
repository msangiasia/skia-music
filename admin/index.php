<!DOCTYPE html>
<html>
<head>
    <title>SKIA MUSIC</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <!--boxicon CDN Link-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel="stylesheet">
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
        .home-section {
        background: #f5f5f5;
        position: relative;
        min-height: 100vh;
        width: calc(100%-200px);
        left:240px;
        }
        .home-section nav{
        height: 40px;
        background: #fff;
        padding:0 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        .home-section nav .sidebar-botton{
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: 500;
        }
        .home-section nav .sidebar-botton i{
           font-size: 35px;
           margin-right:10px; 
        }
        .home-section nav .search-box{
            height: 50px;
            width: 550;
            margin: 0 20px;
            position: relative;

        }
        nav .search-box input{
            position: absolute;
            height: 100%;
            width: 100%;
            border-radius: 6px;
            padding: 0 15px;
            font-size: 17px;
            color: #fff;
            background: #F5F6FA;
            border: 2px solid #EFEEF1;
            outline: none;
        }
        nav .search-box .bx-search{
            position: absolute;
            right: 5px;
            top:50%;
            transform: translateY(-50%);
            height: 40px;
            width: 40px;
            background: #2697FF;
            border-radius: 6px;
            color: #fff;
            font-size: 22px;
            line-height: 40px;
            text-align: center;
        }
        .home-section nav .profile-details{
            display: flex;
            align-items: center;
            height: 50px;
            min-width: 190px;
            background: #F5F6FA;
            border: 2px solid #EFEEF1;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <header><i class="fas fa-person text-gradient-primary">ADMIN  DASHBOARD</i></header>
        <ul>
            <li><a href="home1.php"> <i class="fas fa-home text-gradient-primary">HOME</i></a></li>
            <li><a href="#"> <i class="fas fa-music text-gradient-primary">MUSIC</i></a></li>
            <li><a href="#"> <i class="fas fa-list text-gradient-primary">PLAYLIST</i></a></li>
            <li><a href="#"> <i class="fas fa-th-list text-gradient-primary">GENRE</i></a></li>
            <li><a href="#"> <i class="fas fa-users text-gradient-primary">USERS</i></a></li>
            <li><a href="#"><i class="fas fa-log-out"></i>
            <span class="link_name">LOG OUT</span></li>

        </ul>
        </div>
        <!--home-contect-->
        <section class="home-section">
            <nav>
                <div class="sidebar-botton">
                    <i class="bx bx-menu"></i>
                    <span class="dashboard">Dashboard</span>
                </div>
                <div class="search box">
                    <input type="text" placeholder="search here">
                    <i class='bx bx-search'></i>
                </div>
                <div class="profile-details">
                    <img src="">
                    <span class="admin_name">Mosko</span>
                    <i class='bx bx-chevron-down'></i>
                </div>
            </nav>
        </section>


</body>
</html>