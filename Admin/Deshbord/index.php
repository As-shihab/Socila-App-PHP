
<?php
session_start();
include_once("Core/Config.php");
if(isset($_GET['action'])){
    if($_GET['action']=='Logout'){
       $Objects->LogOut();
    }

    
}
$id=$_SESSION['UserId'];
if($id==null){
    header('location:/Admin/index.php');
}
$user_profile_info=$Objects->User();
$num_rows=$Objects->User_row();
$Vistors=$Objects->Visitor_data();
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
                        <h4 class="text-success">Deshbord</h4>

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

      <li><a href="index.php" class="text-primary"><i class='fa fa-home'></i></a></li>
      <li><a href="Add.php" class="text-black"><i class='fa fa-wifi'></i></a></li>
      <li><a href="List.php" class="text-black"><i class='fa fa-list'></i></a></li>
      <li><a href="Profile.php" class="text-black"><i class='fa fa-user'></i></a></li>

        </div>
        <div class="right rounded shadow-sm">

            <div class="cards_data">
                <div class="container rounded shadow-sm">
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
                            <h1><?php if(isset($num_rows)){ echo $num_rows;} else{ echo "NUN";}?></h1>
                        </div>

                        <p class="text-success"><i class="fa fa-arrow-up"></i> <span>30.60%</span> <span> Last week
                                based</span></p>
                    </div>

                </div>



                <div class="container rounded shadow-sm">
                    <div class="card_header">
                        <a href="?status=student">
                            <h1>Visitors</h1>
                        </a>
                        <div class="user_img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuoovVYEMl5PlyrnrmjPY_0bH_k0RaXYByiMVOWeEhWeG9wxWP2ozVw0Ab51hiQzxErpo&usqp=CAU"
                                alt="">

                        </div>
                    </div>
                    <div class="content">
                        <div class="number">
                            <h1><?php if(isset($Vistors)){ echo $Vistors;}else{echo "NAN";} ?></h1>
                        </div>

                        <p class="text-success">
                            
                        <span>
                        <?php 
      if($user_profile_info['Full_name']===''){ echo "Annonymous";}
      else{echo $user_profile_info['Full_name'];}
      ?>
                        </span>
                         <span><?php echo gethostbyname(gethostname()); ?></span> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
                    </div>

                </div>



                <div class="container rounded shadow-sm">
                    <div class="card_header">
                        <a href="?status=stap">
                            <h1>Post</h1>
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



            </div>











            <div class="statics">




                <div class="statics_container rounded shadow-sm">


                



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
            </div>






        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

    </script>
</body>

</html>