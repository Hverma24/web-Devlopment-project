<?php 
$ShowAlert=false;
$showerr=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  require 'partials/_dbconnect.php';
  $username=$_POST["username"];
  $password=$_POST["pass"];
  $cpassword=$_POST["pass1"];
  $exists=false;
  if(($password==$cpassword)&& $exists==false)
  {
    $sql="INSERT INTO loginform (USERNAME, PASSWORD, DATE)
    VALUES ('$username', '$password', '')";
    $result=mysqli_query($conn,$sql);
    if($result){
      $ShowAlert=true;
    }

  }
  else 
  {
    $showerr="passwords do not match";
  }
}
   

?>


<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            background-image: url('login bg.jpg');
        }

        .login-card {

            width: 400px;
            background-color: #47474784;
            margin: 0px auto;
            border-radius: 9px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            min-height: 440px;

        }

        .log_head {
            background: rgba(21, 160, 131, 255);
            width: 400px;
            height: 120px;
            border-radius: 9px 9px 0 0px;
        }

        .login-card h1 {
            text-align: center;
            font-family: open Sans;
            color: #FFFFFF;
            font-weight: 700px;
            font-size: 20px;
            line-height: 27px;
            padding-top: 51px;

        }

        .lock {
            padding-left: 181px;
            width: 30px;
            height: 37px;
            padding-top: 10px;
        }

        .log_body {
            padding: 40px 20px 20px 20px;
        }

        .log_user {
            background: #FEFEFE;
            color: #999999;
            border-radius: 10px;
            width: 349px;
            height: 31px;
            padding: 5px;
            font-family: open Sans;
            font-weight: 700px;
            font-size: 15px;
            border: none;
        }

        .log_Pass {
            background: #FEFEFE;
            color: #999999;
            border-radius: 10px;
            width: 349px;
            height: 31px;
            padding: 5px;
            font-family: open Sans;
            font-weight: 700px;
            font-size: 15px;
            border: none;
        }
        .log_Pass1 {
            background: #FEFEFE;
            color: #999999;
            border-radius: 10px;
            width: 349px;
            height: 31px;
            padding: 5px;
            font-family: open Sans;
            font-weight: 700px;
            font-size: 15px;
            border: none;
            margin: 21px 0px 0px 0px;
        }


        .login-submit {
            background: rgba(21, 160, 131, 255);
            border: none;
            border-radius: 10px;
            width: 359px;
            height: 36px;
            cursor: pointer;
            font-family: open Sans;
            font-weight: 700px;
            font-size: 15px;
            color: #FFFFFF;
        }
        .signup-submit{
            margin: 12px 0px 0px 117px;
            height: 35px;
            width: 100px;
        }
    </style>
</head>

<body>
<?php
    if($ShowAlert){
      echo '<div class="alert alert-success" role="alert">
      Account Created Successfully! Now You Can Log-In
  </div>';
    }
    if($showerr){
      echo '<div class="alert alert-danger" role="alert">
      ERROR! PASSWORDS DO NOT MATCH.
    </div>';
    }
     
?>
<div><h2 class="text-center">SIGN UP TO OUR WEBSITE</h2></div>

    <div class="login-card">
        <div class="log_head">
            <h1><b>SIGN-UP FORM</b></h1>

        </div>

        <div class="log_body">
            <form action="#" method="post">
                <table width="200" border="0" align="center">
                    <tr>
                        <td><input placeholder="Enter Username" type="text" name="username" class="log_user"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><input placeholder="Enter Password" type="password" name="pass" id="pass" class="log_Pass"></td>
                    </tr>
                    <tr>
                        <td><input placeholder="Enter Password Again" type="password" name="pass1" id="pass1" class="log_Pass1"></td>
                    </tr>   
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="login" class="signup-submit" value="SIGN IN"></td>
                    </tr> 
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Go back and <a href="login_database.php" rel="register">Log-In</a></td>
                    </tr>                                
                </table>

            </form>
        </div>

    </body>
    </html>