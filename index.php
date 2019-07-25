<?php
 $connect = mysqli_connect("localhost", "root", "", "goan_delite");
 session_start();
 if(isset($_SESSION["username"]))
 {
      header("location:entry.php");
 }
 if(isset($_POST["register"]))
 {
      if(empty($_POST["username"]) || empty($_POST["password"]))
      {
           echo '<script>alert("Both Fields are required")</script>';
      }
      else
      {
           $username = mysqli_real_escape_string($connect, $_POST["username"]);
           $password = mysqli_real_escape_string($connect, $_POST["password"]);
           $password = password_hash($password, PASSWORD_DEFAULT);
           $query = "INSERT INTO admin(username, password) VALUES('$username', '$password')";
           if(mysqli_query($connect, $query))
           {
                echo '<script>alert("Registration Done")</script>';
           }
      }
 }
 if(isset($_POST["login"]))
 {
      if(empty($_POST["username"]) || empty($_POST["password"]))
      {
           echo '<script>alert("Both Fields are required")</script>';
      }
      else
      {
           $username = mysqli_real_escape_string($connect, $_POST["username"]);
           $password = mysqli_real_escape_string($connect, $_POST["password"]);
           $query = "SELECT * FROM admin WHERE username = '$username'";
           $result = mysqli_query($connect, $query);
           if(mysqli_num_rows($result) > 0)
           {
                while($row = mysqli_fetch_array($result))
                {
                     if(password_verify($password, $row["password"]))
                     {
                          //return true;
                          $_SESSION["username"] = $username;
                          header("location:entry.php");
                     }
                     else
                     {
                          //return false;
                          echo '<script>alert("Wrong User Details")</script>';
                     }
                }
           }
           else
           {
                echo '<script>alert("Wrong User Details")</script>';
           }
      }
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>LOGIN - GOAN DELITE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<!-- Favicons -->
	<link href="images/icon.png" rel="icon">

	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
		<?php
                if(isset($_GET["action"]) == "login")
                {
                ?>
                
                <form class="register" method="POST">
					<center>
						<h1 class="register-title"> LOGIN</h1>
			        	<input name ="username" type="text" class="register-input" placeholder="Enter Your Username" autofocus>
			        	<input name ="password" type="password" class="register-input" placeholder="Enter Your Password">
			        	<input type="submit" name="login" value="Login" class="register-button">
			        	<a href="index.php">Register Now</a>
					</center>
		    	</form>
                <?php
                }
                else
                {
                ?>
                
                <form class="register" method="POST">
					<center>
						<h1 class="register-title"> SIGN UP</h1>
			        	<input name = "username" type="text" class="register-input" placeholder="Username" autofocus>
			        	<input name="password" type="password" class="register-input" placeholder="Password">
			        	<input type="submit" id="submit "name="register" value="Register" class="register-button">
			        	<a href="index.php?action=login">Login</a>
					</center>
		    	</form>
                <?php
                }
        ?>

		
		<!--jQuery-->
		<script src="js/jquery-2.2.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<!-- js file -->

</body>

</html>
