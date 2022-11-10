<?php
session_start();
require_once "dbconnect.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmationpass = $_POST['confirmpass'];

//form validation
if (isset($_POST['submit']))
{
    if($password != $confirmationpass){
        header("location:regform.php?error=Passwords doesnt match!");
    }
    else if (empty($firstname) || empty($lastname) || empty($username) || empty($password)){
        echo "Please input some data.";
        header('location:regform.php');
    }
    
    else{
        $sql = "INSERT INTO login_tbl (firstname, lastname, email, mobile, username, password) VALUES ('$firstname', '$lastname', '$email', '$mobile', '$username', '$password')"; 
    
        $result = $conn->query($sql);
        if($result) 
        {
            header('location:home.php');
        }
        else{
            echo "an error occured";
        }   
    }
       
    
}

?>
