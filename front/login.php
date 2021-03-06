<?php 
include_once "../base.php";
if(!empty($_POST['acc']) && !empty($_POST['pw'])){
  $admin=new DB("res_admin");
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  $chk=$admin->count(['acc'=>$acc,'pw'=>$pw]);
  if($chk>0){
    $_SESSION['login']=$acc;
    to("../admin.php");
  }else{
      echo "
      <script>
          alert('無效登入，請重新登入');
          location.href='login.php';
      </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者登入</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/7b3164b4a9.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="../assets/css/login.scss">
</head>
<body>
<form class="login-form" method="post" action="login.php">
  <p class="login-text">
    <i class="fas fa-user fa-4x"></i>
    </span>
  </p>
  <input type="text" class="login-username" autofocus="true" required="true" placeholder="Account" name="acc" id="acc"/>
  <input type="password" class="login-password" required="true" placeholder="Password" name="pw" id="pw" />
  <div>
    <input type="submit" name="Login" value="Login" class="login-submit" />
    <input type="reset" name="Login" value="Reset" class="login-submit" />
</div>
</form>
<!-- <a href="#" class="login-forgot-pass">forgot password?</a> -->
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 
</body>
</html>