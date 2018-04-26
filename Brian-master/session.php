<?php
session_start();
include('config.php');
if(isset($_SESSION['user']))
{
  $user_check = $_SESSION['user'];
}else {

  header('Location:Index.php');
}

$sess_sql = mysqli_query($db,"SELECT username,userID,email from users WHERE username='$user_check'");
$row = mysqli_fetch_assoc($sess_sql);
$login_session =$row['username'];
$login_id = $row['userID'];
$login_email = $row['email'];
if (empty($login_session) || empty($login_id) || empty($login_email)) {
  $msq = '<div class="alert alert-dander">Failed</div>';
}
