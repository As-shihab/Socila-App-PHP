
<?php
session_start();
include('Deshbord/Core/Config.php');
if(isset($_POST['login_user'])){
$Login_info= $Objects->Login_User($_POST);

}

if(isset($_SESSION['UserId'])){

  header('location:/Admin/Deshbord');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="Admin.css"/>
<link rel="stylesheet" href="Auth_media.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 
<div class="blur-content">


</div>

<div class="box-container">
<div class="desktop">
    <h1 class="m-2 fw-bold text-danger" style=" display:<?php if(isset($Login_info)) { echo "block";}else{echo "none";} ?>">
    <?php if(isset($Login_info)){echo $Login_info;} ?>
    </h1>

    <a href="Registration.php">
        <button class="btn  btn-outline-primary">Create Account</button>
    </a>
</div>

<div class="mobile-container">
  <?php 

    include("Login.php");
  
  ?>
</div>
         </div>

</body>
</html>