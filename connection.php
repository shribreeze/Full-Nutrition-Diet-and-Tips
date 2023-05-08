<?php   
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "register";  
      
    $con = mysqli_connect('localhost', 'root','', 'register');  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  