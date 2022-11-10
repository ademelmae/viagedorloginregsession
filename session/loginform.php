<?php
session_start();
  if (isset($_SESSION['username'])) {
    header('Location: home.php');
  }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylelogin.css">
  </head>
	<body>
    <form action="receivelogin.php" method="post">
        <h3>Login</h3>
        <?php if (isset($_GET['error'])) 
        {
        ?>
        <p class="error"> <?php echo $_GET['error']?> </p>
        <?php
        }?>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <button name="submit" id="b3">Login</button>
        <div class="dont">Don't have an account? <a href="regform.php">Click to register</a></div>

        <?php
          if(isset($_SESSION["error"])){
            $error = $_SESSION["error"];
            echo "<span>$error</span>";
          }
        ?> 
    </form>
	</body>
</html>


