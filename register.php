<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>SignUp Form</title>
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
      <h1>Sign Up</h1>
      <h2>Hello there!!</h2>
      <form action="register.php" method="post">
        <input type="text" name="user" id="user" placeholder="Username">
        <input type="password" name="pass" id="pass" placeholder="Password">
        <input type="submit" name="submit" value="Sign Up">

        <a href="login.php">Already have an Account?</a>
      </form>
    </div>
  </body>
</head>
</html>
<?php
if (isset($_POST['submit']))
{
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $hash=password_hash("pass", PASSWORD_BCRYPT);
    $query="INSERT INTO `admin` ( `user`, `pass`) VALUES ('$user', '$pass')";;
    $run= mysqli_query($con,$query);
    if($run)
    {
        echo "<script>alert('Sign In Succesfully');;window.location.href='login.php';</script>";
    }
    else{
        echo "<script>alert('Something Went Wrong! Try Again!');</script>";
    }
}
?>