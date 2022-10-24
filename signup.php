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
        input [type="submit"]{
        	width: 320px;
        	height: 35px;
        	margin-top: 20px;
        	border:none;
        	background-color: green;

        }

	</style>
</head>
<body>
<form action="signup.php" method="POST" style="display: flex; justify-content: center;height: 400px; align-items: center;">
<table border="0">
	<th colspan="2" align="center"><br><h1>ARTIST SIGN UP</h1><h2> Put your information bellow</h2></th>
	<tr>
		<th>First name:</th>
		<td><input type="text" name="firstname" placeholder="first name"></td>
	</tr>
	<tr>
		<th>Last name:</th>
		<td><input type="text" name="Lastname" placeholder="Lastname"></td>
	</tr>
	<tr>
		<th>Email:</th>
		<td><input type="text" name="Email" placeholder="eg:asia@gmail.com"></td>
	</tr>
	<tr>
		<th>Password:</th>
		<td><input type="Password" name="Password" placeholder="Password"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Sign Up">
			
		</td>
		<tr>
			<td colspan="2" align="center"><h1 style="font-size: 12px;">Do you have an account <br><a href="index.php">Click here</a></h1>
			</td>
		</tr>
	</tr>
</table>	
</form>
</body>
</html>