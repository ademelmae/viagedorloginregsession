<?php 
    session_start();
    
if (!isset($_SESSION['id']) && !isset($_SESSION['uname'])) 
{
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form Session</title>
    <link rel="stylesheet" href="stylereg.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  </head>
  <body>
    <form action="receiveregister.php" method="post">
      <h2>Register</h2>
        <?php if (isset($_GET['error'])) 
        {
        ?>
        <p class="error"> <?php echo $_GET['error']?> </p>
        <?php
        }?>
        <input type="text" name="firstname" placeholder="First Name" required>
        <input type="text" name="lastname" placeholder="Last Name" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="mobile" placeholder="Mobile Number" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirmpass" placeholder="Confirm Password" required>  
        <button name="submit">Register</button>
        <a href="loginform.php">Back to Login</a>
   </form>
  </body>
</html>

<?php 
} 
else 
{
    header("Location: home.php");
    exit();
}
?>