
<?php
session_start();
include('Core/Config.php');
$id=$_SESSION['Admin'];


if($id==null){
    header('location:/Admin/index.php');
}
$data=$Objects->Social();
$COUNTER= mysqli_num_rows($data);

if(isset($_GET['action'])){
   
    if($_GET['action']=='todo'){
        $id=$_GET['id'];
        $delete_post=$Objects->Post_delete($id);
        header('location:todo.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="css/Deshbord_media.css" rel="stylesheet"/>
    <script src="App.js">

</script>
</head>

<body>
    <header>
        <div class="left">
          <a href="index.php"><h1>Admin</h1></a>
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
                        <h4 class="text-success">User List</h4>

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

      <li><a href="index.php" class="text-black"><i class='fa fa-home'></i></a></li>
      <li><a href="Add.php" class="text-black"><i class='fa fa-wifi'></i></a></li>
      <li><a href="List.php" class="text-primary"><i class='fa fa-list'></i></a></li>
      <li><a href="Profile.php" class="text-black"><i class='fa fa-user'></i></a></li>

        </div>
        <div class="right rounded shadow-sm">
<table class="table">
    <div class="bg-info-subtle"><?php if(isset($delete_post)){echo $delete_post;} ?></div>
<thead>
    <tr>
        <th class="text-primary"><?php echo $COUNTER; ?></th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Post Date</th>
        <th>Action</th>

    </tr>
</thead>
<?php while($data_info=mysqli_fetch_assoc($data)){
 
   ?>
<tbody>

    <tr>
    <td><?php if(isset($data_info)){ echo $data_info['id'];}?></td>
        <th><?php if(isset($data_info)){ echo $data_info['Profile_name'];} ?></th>
        <td><?php if(isset($data_info)){ echo $data_info['Profile_name'];} ?></td>
        <td><?php if(isset($data_info)){ echo $data_info['Post_info'];} ?></td>
        <td><?php if(isset($data_info)){ echo $data_info['Post_time'];} ?></td>
        <td><a href="?action=todo&&id='<?php if(isset($data_info)){ echo $data_info['id'];}?>'"><button class="btn-sm btn btn-danger">Delete</button></a></td>
    </tr>
</tbody>
<?php } ?>
</table>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

    </script>
</body>

</html>