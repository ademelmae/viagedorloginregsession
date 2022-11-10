<?php
 
    require_once "dbconnect.php";
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    
    if (isset($_POST['submit'])){

        if (empty($username) || empty($password)) { 
            header("Location: loginform.php"); 
        }

        else{
            $sql = ("SELECT * FROM login_tbl WHERE username='$username' AND password='$password'");
            $res = $conn->query($sql);
         
            if(mysqli_num_rows($res) == 1){
                $row = mysqli_fetch_assoc($res);

                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] =  $row['id'];
                header("Location: home.php"); 
                exit();
            }
            else{
                header("Location: loginform.php?error=Incorrect username or password");
                exit();
            }
        }  
        
    }     
    else{
        header("Location: loginform.php");
    }
  
                
    
    
       
?>