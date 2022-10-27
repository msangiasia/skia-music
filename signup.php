<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<style >
		body{
		  height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
          background-image: url("MIKE.png");
          background-repeat: no-repeat;
          background-size: cover;
		}
		table{
			background-color: #00aae4;
			width: 400px;
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			min-width: 490px;
		
		}
		 
		form tr{
            font-size: 18px;
		}

		td{
			padding: 10px ;
			 margin: auto;
		}
		h1{
			text-align: center;
			padding:  10px;
		}
		h2{
			text-align: center;
		}
        form input{
        	width: 80%;
        	padding: 7px;
        	
        }
        

	</style>
</head>
<body>
 <form action="signup.php" method="POST" style="display: flex; justify-content: center; height: 400px; align-items: center;">
   	<table border="0">
         <th colspan="2" align="center">Put your info! Below</th>
   		<tr>
            <th>First Name:</th>
   			<td><input type="text" name="Fname" placeholder="first name"></td>
   		</tr>
   		<tr>
            <th>Last Name:</th>
   			<td><input type="text" name="Lname" placeholder="last name"></td>
   		</tr>
   		<tr>
            <th>Email:</th>
   			<td><input type="text" name="Email" placeholder="eg: asia@gmail.com"></td>
   		</tr>
   		<tr>
            <th>Password:</th>
   			<td><input type="password" name="Pass" placeholder="Password"></td>
   		</tr>
   		<tr>
   			<td colspan="2" align="center"><input type="submit" name="submit" value="Sign Up"></td>
   		</tr>
         <tr>
            <td colspan="2" align="center">
            <h1 style="font-size: 12px;">Do you have account <a href="index.php">Click here</a></h1>
            </td>
         </tr>
   	</table>
   </form>
   </body>
   </html>
<?php 
      if(isset($_POST["submit"])){
         //take the user data and assign to the variables $

         $Fname = $_POST["Fname"];
         $Lname = $_POST["Lname"];
         $Email = $_POST["Email"];
         $Pass = $_POST["Pass"];

         //link with database
         $link = mysqli_connect("localhost","root","","skia");

         //insert data in the table
         $sql = mysqli_query($link,"INSERT INTO user (fname,Lname,Email,Pass) VALUES ('$Fname','$Lname','$Email','$Pass')");

         // to check and display message if data is inserted in the table/database
         if ($sql) {
            echo '<script>alert("Successfully sign Up");
            window.location.href="index.php";
            </script>';
         }
         else
         {
            echo '<script>alert("Error: You are not sign Up");
            window.location.href="signup.php";
            </script>';
         }
      }
   ?>



<?php
if (isset($_POST["submit"])) {

	//take the user data and assign to the variables $
	$fname=$_POST["fname"];
	$lname=$_POST["Lname"];
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];

     
     //link with database
	$link=mysql_connect("localhost","root","","skia");
      
      //insert data in the table
	$sql=mysqli_query($link, "INSERT INTO user(Firstname,Lastname,Email,Password) VALUE('$Lastname','$Lastname','Email','Password')");

     // to check and display message if data is inserted in the table/database
	if ($sql) {
		echo '<script>alert("successfully Sign Up");
		window.location.href="index.php";
		</script>';

	}
     else{
     	echo '<script>alert("Error: You are not Sign Up");
		window.location.href="signup.php";
		</script>';
     }
}








?>