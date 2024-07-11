

<?php
session_start();
include('Core/Config.php');
if(isset($_GET['action'])){
    if($_GET['action']=='Logout'){
       $Objects->LogOut();
    }

    
}
$id=$_SESSION['UserId'];
if($id==null){
    header('location:index.php');
}
$user_profile_info=$Objects->User();

$Newtok=$Objects->Social();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="css/Deshbord_media.css" rel="stylesheet"/>

</head>

<body>
    <header>
        <div class="left">
          <a href="/index.php"><h1>Darkwe</h1></a>
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
                        <h4 class="text-success">Social</h4>

                        <ul class="list-group">
                        <li class="list-group-item"> <i class="fa fa-home"></i><a href="index.php">Deshbord</a></li>
                            <li class="list-group-item"> <i class="fa fa-wifi"></i><a href="Add.php">Social</a></li>
                            <li class="list-group-item"> <i class="fa fa-user"></i><a href="Profile.php">Profile</a>
                            <li class="list-group-item"> <i class="fa fa-list"></i><a href="List.php">List User</a>

                            </li>
                        </ul>
                    </div>




                </div>


                
       
    






            </div>
        </div>
                    
        <div class='contianer p-1  fw-bold shadow-lg mobile_button'>

      <li><a href="index.php"class="text-black"><i class='fa fa-home'></i></a></li>
      <li><a href="Add.php" class="text-primary"><i class='fa fa-wifi'></i></a></li>
      <li><a href="List.php" class="text-black"><i class='fa fa-list'></i></a></li>
      <li><a href="Profile.php" class="text-black"><i class='fa fa-user'></i></a></li>

        </div>
        <div class="right">

            <!-- <div class="cards_data">
                <div class="container rounded shadow-lg">
                    <div class="card_header">
                        <a href="?status=user">
                            <h1>Users</h1>
                        </a>
                        <div class="user_img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuoovVYEMl5PlyrnrmjPY_0bH_k0RaXYByiMVOWeEhWeG9wxWP2ozVw0Ab51hiQzxErpo&usqp=CAU"
                                alt="">

                        </div>
                    </div>
                    <div class="content">
                        <div class="number">
                            <h1>321,13</h1>
                        </div>

                        <p class="text-success"><i class="fa fa-arrow-up"></i> <span>30.60%</span> <span> Last week
                                based</span></p>
                    </div>

                </div>



                <div class="container rounded shadow-lg">
                    <div class="card_header">
                        <a href="?status=student">
                            <h1>Student</h1>
                        </a>
                        <div class="user_img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuoovVYEMl5PlyrnrmjPY_0bH_k0RaXYByiMVOWeEhWeG9wxWP2ozVw0Ab51hiQzxErpo&usqp=CAU"
                                alt="">

                        </div>
                    </div>
                    <div class="content">
                        <div class="number">
                            <h1>321,13</h1>
                        </div>

                        <p class="text-success"><i class="fa fa-arrow-up"></i> <span>30.60%</span> <span> Last week
                                based</span></p>
                    </div>

                </div>



                <div class="container rounded shadow-lg">
                    <div class="card_header">
                        <a href="?status=stap">
                            <h1>Stap</h1>
                        </a>
                        <div class="user_img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuoovVYEMl5PlyrnrmjPY_0bH_k0RaXYByiMVOWeEhWeG9wxWP2ozVw0Ab51hiQzxErpo&usqp=CAU"
                                alt="">

                        </div>
                    </div>
                    <div class="content">
                        <div class="number">
                            <h1>321,13</h1>
                        </div>

                        <p class="text-success"><i class="fa fa-arrow-up"></i> <span>30.60%</span> <span> Last week
                                based</span></p>
                    </div>

                </div>



            </div> -->

            <?php while($network_data=mysqli_fetch_assoc($Newtok)){
 
 ?>
<section class="post_data" >

<div class="data-container">
   

    <div class="img-container-net">
<img src="/Admin/Uploads/<?php if(isset($network_data)){ echo $network_data['Profile_pic'];} else{ echo "Data not Found";} ?>" alt="">
    </div>
     
    <div class="name_veryfied" style=" margin-left:8px;">
      <b class="fw-bold"><?php if(isset($network_data)){ echo $network_data['Profile_name'];} ?></b>
      <i class="fa fa-certificate text-primary"></i>
      <span class="text-secondary p-1" ><?php if(isset($network_data)){ echo $network_data['Post_time'];} ?></span>
    </div>


</div>

<div class="post_info">
 <p class="p-2"><?php if(isset($network_data)){ echo $network_data['Post_info'];} ?></p>


 <div class="post_img">

 <img src="/Admin/Uploads/<?php if(isset($network_data)){ echo $network_data['Post_pic'];} ?>" alt="">
 </div>
</div>

</section>

<?php }?>







            <!-- <div class="statics">




                <div class="statics_container rounded shadow-lg">


                



                    <div class="static_one_cont bg-light shadow-sm rounded">
                        <div class="st_data  fw-bold">Users</div>
                        <div class="st_data_2 rounded">
                            .
                        </div>


                    </div>

                    <div class="static_one_cont bg-light shadow-sm rounded">
                        <div class="st_data  fw-bold">Students</div>
                        <div class="st_data_2 rounded">
                            .
                        </div>


                    </div>



                    <div class="static_one_cont bg-light shadow-sm rounded">
                        <div class="st_data  fw-bold">Stap</div>
                        <div class="st_data_2 rounded">
                            .
                        </div>


                    </div>





                </div>
            </div> -->






        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

    </script>
</body>

</html>