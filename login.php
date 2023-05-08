<?php
include 'connection.php';
include 'authentication.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"
    />
  <link rel="stylesheet" type="text/css" href="login.css">
  <body>
  <div class="background">
      <ul class="squares">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
      </ul>
  </div>
    <div class="loginbox">
      <img src="avatar.png" class="avatar">
      <h1> Login</h1>
      <h2>Hello there!!</h2>
      <form action="login.php" method="post">
        <input type="text" name="user" id="user" placeholder="Username">
        <input type="password" name="pass" id="pass" placeholder="Password">
        <input type="submit" name="submit" value="Login">

        <a href="register.php">Don't have an Account?</a>
</form>
</div>
</head>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html> 
