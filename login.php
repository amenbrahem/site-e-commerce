<?php
      // Include your database connection file or create a connection here
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "test";
      // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
        $email=$_POST["email"];
        $password=$_POST["password"];
        if((empty($email)|| empty($password))){
            echo "<p style='color: red;'>Please fill in all fields.</p>";
        }
        else{
            $sql = "SELECT * FROM user where '$email'=email and '$password'=mdp";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                header("Location: produit.php");
				exit;
            }else{
                echo "<p style='color: red;'>Creer une compte.</p>";

            }
        }
      }
	  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
        $email=$_POST["email"];
        $password=$_POST["password"];
		$verpass=$_POST["verifpass"];
        if((empty($email)|| empty($password) ||empty($verpass))){
            echo "<p style='color: red;'>Please fill in all fields.</p>";
        }
		else if ($password!=$verpass){
			echo "<p style='color: red;'>verifier password.</p>";
		}
        else{
			$sql = "INSERT INTO user (email, mdp) VALUES ('$email','$password')";
            $result = $conn->query($sql);
            if ($result === TRUE) {
				echo "<p style='color: red;'>ADDED SUCC.</p>";
				
            } 
        }
      }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis|Roboto:300,400">
	<link rel="stylesheet" href="stylelogin.css">

</head>

<body>

    <div class="container">
        <!-- Your HTML forms here -->
        
        <div class="container">
            <form class="signUp" action="" method="post">
                <h3>Create Your Account</h3>
                <p>Just enter your email address</br>
        and your password for join.
                </p>
                <input class="w100" type="email" name="email" placeholder="Insert eMail" reqired autocomplete='off' />
                <input type="password" name="password" placeholder="Insert Password" reqired />
                <input type="password" name="verifpass" placeholder="Verify Password" reqired />
                <button class="form-btn sx log-in" type="button" >Log In</button>
                <button class="form-btn dx" type="submit" name="signup">Sign Up</button>
            </form>
            <form class="signIn" action="" method="post">
                <h3>Welcome</br>Back !</h3>
                <button class="fb" type="button">Log In With Facebook</button>
                <p>- or -</p>
                <input type="email" placeholder="Insert eMail" name="email" autocomplete='off' reqired />
                <input type="password"  name ="password" placeholder="Insert Password" reqired />
                <button class="form-btn sx back" type="button">Back</button>
                <button class="form-btn dx" type="submit" name="login">Log In</button>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".log-in").click(function() {
                $(".signIn").addClass("active-dx");
                $(".signUp").addClass("inactive-sx");
                $(".signUp").removeClass("active-sx");
                $(".signIn").removeClass("inactive-dx");
            });

            $(".back").click(function() {
                $(".signUp").addClass("active-sx");
                $(".signIn").addClass("inactive-dx");
                $(".signIn").removeClass("active-dx");
                $(".signUp").removeClass("inactive-sx");
            });
        });
    </script>
	<video id="video-background" autoplay muted loop>
    <source src="anime2.mp4" type="video/mp4">
  </video>
</body>
</html>
