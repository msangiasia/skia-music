   <?php
   session_start();
   ?>
  <!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>SKIA MUSIC</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<style>
 
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url("MIKE.png");
    background-repeat: no-repeat;
    background-size: cover;
            
}

.container{
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #FFFFFFFF;
    border-radius: 10px;
    overflow: hidden;
    margin: 0 20px;
}

.container .forms{
    display: flex;
    align-items: center;
    height: 440px;
    width: 200%;
    transition: height 0.2s ease;
}


.container .form{
    width: 50%;
    padding: 30px;
    background-color: #fff;
    transition: margin-left 0.18s ease;
}

.container.active .login{
    margin-left: -50%;
    opacity: 0;
    transition: margin-left 0.18s ease, opacity 0.15s ease;
}

.container .signup{
    opacity: 0;
    transition: opacity 0.09s ease;
}
.container.active .signup{
    opacity: 1;
    transition: opacity 0.2s ease;
}

.container.active .forms{
    height: 600px;
}
.container .form .title{
    position: relative;
    font-size: 27px;
    font-weight: 600;
}

.form .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background-color: #4d4d4d;
    border-radius: 25px;
}

.form .input-field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 10px;
    padding-right: 100%;
}

.input-field input{
    position: absolute;
    height: 100%;
    width: 100%;
    padding: 0 35px;
    border: none;
    outline: none;
    font-size: 16px;
    border-bottom: 2px solid #ccc;
    border-top: 2px solid transparent;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid){
    border-bottom-color: #4d4d4d;
}

.input-field i{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 23px;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) ~ i{
    color: #4d4d4d;
}

.input-field i.icon{
    left: 0;
}

.form .checkbox-text{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 10px;
}


.checkbox1-text{
  padding-right: 1000px;
}

.checkbox1-text .checkbox-content{
    display: flex;
    align-items: center;
}

.checkbox1-content input{
    margin: 0 8px -2px 4px;
    color: #4d4d4d;
}

.checkbox-text .checkbox-content{
    display: flex;
    align-items: center;
}

.checkbox-content input{
    margin: 0 8px -2px 4px;
    color: #4d4d4d;
}

.form .text{
    color: #0044ff;
    font-size: 14px;
}

.form a.text{
    color: #0044ff;
    text-decoration: none;
}
.form a:hover{
    text-decoration: underline;
}

.form .button{
    margin-top: 35px;
}

.form .button input{
    border: none;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 6px;
    background-color:#4d4d4d;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button input:hover{
    background-color: #191970;
}

.form .login-signup{
    margin-top: 30px;
    text-align: center;
}

.img-container {
    text-align: center;
    margin: 24px 0 12px 0;
  }
  
  
  .h{
     background: rgb(0,0,0);
     background: linear-gradient(338deg, rgba(0,0,0,1) 14%, rgba(54,36,36,1) 41%, rgba(130,120,120,1) 53%, rgba(0,0,0,1) 92%);
    
  }
</style>

</script>
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">   
            <div class="img-container">
            <h style="font-size: 24px; color:darkblue;"><strong>ARTIST PANEL </strong></h> 
           
        <form action="index.php" method="POST">
            <div class="input-field">
                <input type="text" id="username" name="Email" placeholder="Enter your email" required> <i class="uil uil-envelope icon"></i>
            </div>

            <div class="input-field">
                <input type="password" id="password" name="Pass"  class="password" placeholder="Enter your password" required><i class="uil uil-lock icon"></i>      
            </div>
            <div class ="checkbox1-text"><input type="checkbox" onclick="myFunction()">Show Password</div>
            <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
            <a href="password-recovery.php" class="text">Forgot password?</a>
            </div>

            <div class="input-field button">
                 <input type="submit"  id="form_submit"  name="submit" value="Login">
            </div>
            <div class="admin">
            Are you an admin? <a href="admin.php">click here</a>
            </div>
            <div class="admin">
            Do you have an Account? <a href="signup.php">click here</a>
            </div>

        </form>
         
</body>
</html>

   <?php
   if(isset($_POST['submit'])){
    //getting user inputs
    $Email = $_POST['Email'];
    $Pass = $_POST['Pass'];

    //link the database to login form
    $link = mysqli_connect("localhost","root","","login");

    //select data in the table
    $sql = mysqli_query($link,"SELECT * FROM user WHERE Email = '$Email' AND Pass = '$Pass'");
    $row = mysqli_fetch_array($sql);

    if(is_array($row))
    {
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Pass'] = $row['Pass'];
    }
    else
    {
        echo '<script>alert("Error: Invald username or paasword");
            window.location.href="index.php";
            </script>';
    }
   }
   if (isset($_SESSION['Email'])) {
    echo '<script>alert("Successfully log in");
            window.location.href="home.php";
            </script>';
   }
    ?>