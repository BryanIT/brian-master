<?php
session_start();
include ('config.php');
$msg = '';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $db->real_escape_string(htmlspecialchars($_POST["username"]));
    $passcode = $db->real_escape_string(htmlspecialchars($_POST["passcode"]));


    $sql= "SELECT id FROM admin WHERE admin='$username' and password='$passcode'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        $msg = '<div class="alert alert-success">Login successful</div>';
        require_once('session.php');
        $_SESSION['user']=$username;
        header("Location:admin-info.php");
        exit;
    }else{
        $msg ='<div class="alert alert-danger">Login failed</div>';
    }
}
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
 "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

  <head>

    <meta charset "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
     shrink-to-fit=no, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="styler.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>

  <body>

        <!--login dialogue BEGINS-->
        <div class="col-xs-5 mainPadding v-center" style="margin-left: 500px;">
          <div class="card bg-secondary text-white">
            <div class="card-title text-center">
              <img class="image-responsive center" src="user-unisex-512.png" alt="Card image">
              <h4><b>ADMIN LOGIN</b></h4>

                <?php
                    echo $msg;
                ?>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group ">
                        <div class="col-sm-12">
                            <input name="username" type="username" class="form-control" id="userName" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input name="passcode" type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="checkbox">  Remember me
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="LogIn">
                    </div>

                </form>
              </div>
            </div>
          </div>
          <!--End of Card-->
      
  </body>

</html>
