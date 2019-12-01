<?php
session_start();
$connection= mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    
    if($password===$cpassword)
    {
        $query ="INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
    $query_run = mysqli_query($connection, $query);
    
    if(query_run)
    {
        //echo "saved";
    $_SESSION['succsess'] = "admin created";
        header('Location: register.php');
        
    }
    else
    {
        $_SESSION['status']= "admin not added";
        header('Location: register.php');
    }
    
 }
    else{$_SESSION['status'] = "password does not match ";
        header('Location: register.php');
        
    }
    
    
}



?>