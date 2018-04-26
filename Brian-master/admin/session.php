<?php
session_start();
include('config.php');
if(isset($_SESSION['user']))
{
  $user_check = $_SESSION['user'];
}else {

  header('Location:Index.php');
}

$sess_sql = mysqli_query($db,"SELECT * from admin WHERE admin='$user_check'");
$row = mysqli_fetch_assoc($sess_sql);
$login_session =$row['admin'];
$login_id = $row['id'];

if (empty($login_session) || empty($login_id)) {
  $msq = '<div class="alert alert-dander">Failed</div>';
}
