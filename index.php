<?php 
// error_reporting('E_ALL^E_NOTICE');
session_start();
include 'lib/db.php';
if($_SESSION){
    header('location:page.php');
}
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($link,$_POST['username']);
    $password = mysqli_real_escape_string($link,sha1($_POST['password']));

    $query = "select * from tbluser where username='$username' AND password='$password'";
    $result = mysqli_query($link,$query);
    if($row = mysqli_fetch_array($result)){
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header('location:page.php');
    }
    else {
        echo "<script>alert('ups gagal login !!!!!')</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <style>
        body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
        }
        #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 320px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
        }
        #colorbtn {
            background-color:#33cc34;
            color:#fff;
            font-weight:bold;
        }
    </style>
</head>
<body style="background-color:#444">
<div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center animated  jello">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form"  method="post">
                            <h3 class="text-center bounce" style="color:#33cc34;">Login</h3>    
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="username" required> 
                            </div>
                            <div class="form-group">
                                
                                <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="login" id="colorbtn" class="btn btn-md btn-block" value="submit">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.js"></script>
</body>
</html>