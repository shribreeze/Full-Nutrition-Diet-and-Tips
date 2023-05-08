<?php  
    if(isset($_POST['submit'])){
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from admin where user = '$username' and pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['loginsuccessful']=1;
            echo "<script>alert('Logged In Succesfully');;window.location.href='swipper.html';</script>";  
        }  
        else{  
            echo "<script>alert('Wrong Id or Password');</script>";
        } 
    }    
?>  