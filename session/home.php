<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['username'])) {   
?>

<html>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylehome.css">
    <form>

    <table id ='t1'>
        
        <tr>
        <th>id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Username </th>
        <th>Password </th>
        <th>Actions </th>
        </tr>
    <?php
        require_once "dbconnect.php";
        $sqlQuery = "SELECT * FROM login_tbl";
        $res = $conn->query($sqlQuery);
        while($row =mysqli_fetch_object($res)){
    ?>
        <tr>
            <td><?php echo $row->id?></td>
            <td><?php echo $row->username?></td>
            <td><?php echo $row->password?></td>
            <td><?php echo $row->firstname?></td>
            <td><?php echo $row->lastname?></td>
            <td><?php echo $row->email?></td>
            <td><?php echo $row->mobile?></td>
            <td><a href="deleteCategory.php?id=<?php echo $row->id?>">Delete</a>
            | 
            <a href="updateCategory.php?id=<?php echo $row->id?>">Update</a></td>
        </tr>

    <?php
        }   
    ?>
</table>
        <img class="imgprof" src="profile.png" alt="">
        <h3>Welcome <br><?php echo $_SESSION['username'];?></h3>
        <button type="submit" formaction="logout.php">Logout</button>
    </form>
</html>

<?php
    }
    else{
        header("Location: loginform.php");
    }
?>


 

 