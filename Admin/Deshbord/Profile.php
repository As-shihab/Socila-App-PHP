
<?php
session_start();
include('Core/Config.php');
if(isset($_GET['action'])){
    if($_GET['action']=='Logout'){
       $Objects->LogOut();
    }

    
}
$user_id=$_SESSION['UserId'];
if($user_id==null){
    header('location:/Admin/index.php');
}

$user_profile_info=$Objects->User();

if(isset($_POST['update_img']))
{

$update_alert=  $Objects->User_pic_update($_POST);



}
if(isset($_POST['edit_gist'])){
  $edit_gist=$_POST['gist_info'];
  if(!empty($edit_gist)){
$edit_update= $Objects->Edit_gist($_POST);
  }
  
}
if(isset($_POST['post'])){
$post_info=$Objects->Post($_POST);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshbord</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="css/Deshbord_media.css" rel="stylesheet"/>
   

</head>

<body>
    <header>
        <div class="left">
          <a href="index.php"><h1>Darkwe</h1></a>
        </div>
        <div class="mid">
            <input type="text" class="form-control">
            <input type="submit" value="Search" class="btn btn-primary">

        </div>
        <div class="right">

            <div class="btn-group">
                <button class="btn d-flex  dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    data-bs-auto-close="false" aria-expanded="false">
                    <div class="img">

                    <img style="height:100%; baground-size:cover; baground-position:center;" src="/Admin/Uploads/<?php 
      if($user_profile_info['Img_info']===''){ echo "bg.jpg";}
      else{echo $user_profile_info['Img_info'];}
      ?>" alt="/Admin/Assets/bg.png">


                        </div>
                </button>
                <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Deshbord</a></li>
                    <li><a class="dropdown-item" href="?action=Logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="home_container">
        <div class="left shadow-sm rounded">
            <div class="right_container">
                <div class="deshbord_header rounded shadow-sm">
                    <i class="fa fa-clock"></i>
                    <h3>Deshbord</h3> <span class="bg-primary rounded text-white p-12">New</span>
                </div>


                <div class="rounded  shadow-sm box_container">
                    <div class="sets">
                        <h4 class="text-success">Profile</h4>

                        <ul class="list-group">


                            <li class="list-group-item"> <i class="fa fa-home"></i><a href="index.php">Deshbord</a></li>
                            <li class="list-group-item"> <i class="fa fa-wifi"></i><a href="Add.php">Social</a></li>
                            <li class="list-group-item"> <i class="fa fa-user"></i><a href="Profile.php">Profile</a>
                            </li>                            <li class="list-group-item"> <i class="fa fa-list"></i><a href="List.php">List User</a>
                        </ul>
                    </div>




                </div>


                
       
    






            </div>
        </div>
                    
        <div class='contianer p-1  fw-bold shadow-sm mobile_button'>

      <li><a href="index.php" class="text-black"><i class='fa fa-home'></i></a></li>
      <li><a href="Add.php" class="text-black"><i class='fa fa-wifi'></i></a></li>
      <li><a href="List.php" class="text-black"><i class='fa fa-list'></i></a></li>
      <li><a href="Profile.php" class="text-primary"><i class='fa fa-user'></i></a></li>

        </div>
        <div class="right rounded shadow-sm">

      




        <section class="card-cont">

<div class="cards p-2 rounded  shadow-sm">
<div class="User_profile p-3" style="width:100%; background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0Swr_ZmOhznwFUeVZ9BzCItNNp9WUyoPWUw&usqp=CAU');">
  <div class="img-cont">
    <img style="height:100%; width:100%; background-size:cover; baground-position:center;" src="/Admin/Uploads/<?php 
    if($user_profile_info['Img_info']===''){ echo "bg.jpg";}
    else{echo $user_profile_info['Img_info'];}
    ?>" alt="/Admin/Assets/bg.png">
 
      
 
</div>




</div>

<form method="post" enctype='multipart/form-data'>
  <input type="file" name="update_profile" class="Update_profile" accept="image/*" hidden>
  <?php if(isset($update_alert)){echo $update_alert;} ?>
  <button name="update_img" class="btn btn-primary m-2 update_button" type="submit">Update</button>

  </form>


  <div class="content-text">
    <h4 class=""><a href="https://github.com/As-shihab">@ <?php echo $user_profile_info['Full_name']; ?></a></h4>
    
 
    
    <b class="p-2">Gist Info</b>
    
   <div class="p-2">
   
     <form method="post">
     <p  class="text-secondary  form-control gist_field"><?php echo $user_profile_info['Details'] ?> </p>
<input type="text" name='gist_info' id="input_data" hidden>
 
      <button type="button"   class="btn btn-primary edit_gist btn-sm">Edit<?php if(isset($edit_update)){echo $edit_update;} ?></button>
     </form>

     
   </div>

  </div>
  
  
</div>




<div class="add_post p-3" style="min-height:50vh; width:100%">
<form method="post"  enctype="multipart/form-data">
  <div style="display:<?php if(isset($post_info)){echo "block";}else{echo "none";}?>" class="m-1 bg-info-subtle text-center p-1 rounded"><?php if(isset($post_info)){ echo $post_info;} ?></div>
<textarea name="post_data" placeholder="What's New In Your Mind?" style="width:100%;height:100%;min-height:20vh; border:none;" class="form-control bg-secondary-subtle"></textarea>
<input type="file" name="post_file" accept="image/*" class="form-control">
<button class="btn btn-primary m-2" name="post" type="submit">Post</button>
</form>



</section>





        </div>
    </section>
    <script src="Handaler.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

    </script>
</body>

</html>