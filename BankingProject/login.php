<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="style1.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="login-box">
      <h2>Login</h>
<?php
include("connfile.php");
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
  //echo("working");
  $v1=$_POST['text1'];
  $v2=$_POST['text2'];
  //echo$v1." ".$v2;
  $sqlvar="select * from logintab where userid='$v1' and pword='$v2'";
  $result=$conn ->query($sqlvar);
  if($result -> num_rows>0)
  {
    header("location:mainpage.php");

  }
  else
  {

    echo("userid or password is not correct");
  }
}

?>
      <form name=form1 method="post" action="login.php"> 
        <label>UserID</label>
        <input type="userid" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <input type="button" value="Submit" />
      <closeform></closeform></form>
    </div>
    <p class="para-2">
      Not have an account? <a href="signup.php">Sign Up Here</a>
    </p>
  </body>
</html>
