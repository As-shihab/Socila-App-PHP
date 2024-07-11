

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
    header('location:/Admin/index.php');
}
$user_profile_info=$Objects->User();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Student</title>
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
          <a href="/Adminindex.php"><h1>Darkwe</h1></a>
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
<thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>
    <?php
    $list_info=$Objects->List_data();

       while($list_data=mysqli_fetch_assoc($list_info)){
       
       
     
     ?>

    <tr>
        <!-- <td>
    <div style="width:40px; height:40px; overflow:hidden;">

        
      <img style="width:100%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHYAAAB/CAMAAAANdsbrAAABKVBMVEX////ppSYYHB2tfykREiTqvJgkJiUAAACHcl+ysrK4iHHvwJvonwDspyYgJCWqfSnitpMAAByzgykAABDoohnyqyYICR8AABn9+vSngGoRGR3569brsU4SHSX79OgAEhjNpoepeBSndQB+a1oACRzuv3Xz16vqqjn24L+cciU1MCTy0Z8AFSXZmyeUbSbBjCh6XCSJZiVLTkxfXla6mH3vx4Xu5tqzhEnIrH/j4+QqKzc+PkZpaXEiIi9SUlxcXGXst11RQCNBNyVlTyU5OTZOQjpaTkNuXU6YfGapjXQIJS5wZlsAMDsAEyverV0tP0K6i0PPuJa8llTdzbLptoDVp3ewi1yPdVaceUWce1LGkWG2hmGUb1+TaAsfGA1ra2iYmJt7fH7Ix8nxuyC8AAAIoUlEQVRoge2aeX/aSBKGkYSQgiQQp235QA4QbAw2AbxZGzDmSBBjTyaTSTY7N/j7f4it1gFC6paaw5n9w68NFvwID29VdXVJJBJ50Yte9D11cnj25uK6XL6/L19fX5wdHu4/N3H/8E35iMnKspy1BUdM5f767OTZmCdn5QpQFMYnoCtH18/hev+szIAxshRZPrrYsef9i2CmTc7K92e7g56UKZh2uGVmR+CT66wXqii5nAI5hj85X6rlyi7AF4wXmmPqXGMwHFarw0Hj/KruJSvy/eGW0MMj2Qc9HyRqxwlLx7XjYaOe84Y6e72dVW9SFSVZrSVibgG6wXhDLVc2N3xy77WqMCMP1NRx1WdYkS82pJ756lepV4/9UOS4xvlqS77fqH1ceK2ChngqivSlL9DZygbd49pPzY1IVODGkldecDa7doIxVCVdI1KBO0in696ltC4XQ2VyVUw1uerqksMYXouLoyrpUhAV2eWSnNfwOlwclVEGnvUKYllW0wqs9UQtyXFcMr1qWMlS1xWuhmHxmJllC5qNHY/ff5hMiqIxnRSsKDfSHALXFTc4W6FcR4c4KpM7R2XMTtrqQjwvWTJMbmLImUqullb2iIq6j9/klBHEmG1LEu+XVDRDkEhyNniltGSqBn1P2FuHiVjBwEGRxgmzltMczrBMsRO+wYYYUnscS4wJUF6aFpbJ9RtWQtOLTyz8y6taTCOa5VVkNzFaYrlkcmk4W940xKhFZXQiVpqw1sp1yRXpsDATQgyFfHkciEVRdkrZH2kleBXtVzBTsIV9G4zVcdil4eDdF9soLGwjEGsm149dGg5qVvtEaiiW/wDYahLDtdp00HR1TR6Hw7CoprBYp03LRLsBZq3ctgOwooYNsh1pRckSs0ssY4Q9ryXArcSjXiy5BXlFz0ApJwYErFlaMgl7RCpjxly3H354aDVNtVotQ9fbuj51noGnHmPa6rr1GJbf4KmkBmVh64b0+NgElKl268cHsfj4OHUew3HbaJCxYPgjHlsOPr9SJb3mbEAQ2x/hrrl8zP80lfhLMhX0GltU+5VAagVyWFOXJfQIx01Xabd0XvoUiD39GYc9C4qxiZV+WGKkR7g9uEq7pYZhuc+4DhmwaE0BpjV1MJLelKARiwusih6HYE9xUQ6qYxvbbjnDhfSAPoH6uHhswCeQsN3Cldxf/NSTYCijfAGM+KCj9Kq62JTMHtHS0Uil6lOUZjWYyp3+e+3UMtmPPK9L7WILqWgnVdJF8/HDVAXs1xAs98mf3LDUoppqq67e5KwkSzqspZDUgv7lw5LGimWUP/I6cS+Q2m0p1Cz32o8NXrVmmL/oUyLW0MOpmJUbVlGm34pB3IGMd+FUTE0d0lx5qohOm5LUtq7q8UXQVfGcAst9XreQLbvisoKNg3j8oGhzpbYYXk+gTxthcwfmpCzx06IoigdwK1rZhm4R0ioI2KAtfon9D7InqQaiWioaKmpX4jcaKsd52yN5ZnQH+TNQ1LaJE0XDMP+IsJqn4reArTYAG9otTOyVTRQXp5voMyD+f+mw3oVLhWWUX63QGryzBfCG9QxVarn0hti6nVJDR2CJ123qr3RmN8QyuXd2NRWL9u86Zv1BpioppG8iRpSZ9ZcU1QJCYf4Nh6XpjKa8Ox9VuzCxB37qAS3W1y6oerKJjRteqhGnxfp68hpYHzdOiz396sXu01EZ5mvcy43TY/2Tctjg6Lj9Iumw9SzBRpweixkdQ05FFkIDJIDjB6bilmjd+ocayoWL5lYAx1dFicVMjoHney7Z44S+gv2drl34ChmGqfAZjkHXLZ2pZhVM1Ryx516hEyu6OFxxDYvuSP9Og32Nu6Qd2B7Nb/Xq9Y+rU6ob/O48mU4HxxqTWogyEQvI+tXlqMoWVN6jZaT/yLDVQeMySUbjToGIUVZyzNXlIFYqFTRWwIznDviDhq7fF2LDxjmHJ+NO+AhRVpT65bBU0jQWSXuPOR+wIn2QYC0BethI4sCn+OuOmMtSuXojVdLYhbBXpkzwpLB8lVZiR37HhBj7G5WSO99zvRvBrjmtH7CrKrBvvVzMeZclX8cYpVjv201wXxZI6ljzvrI08nAxvcLW0YpdZVTyvhdw3/tONiWpzfqowF29SkUoKKSVESP3FkMFrmaeB7ig+iSDocIrV+LsGyzwdpWrAu69QJmYqC9O43l9whJeqMVcLfOUbHbFbm5AwsIaybwvGm1dbxvFsUB8GVtwhZmcWaRFy1DqvnLykAVQpoANr6PSAkssY0snzoyRa5BdUGthl7hmHS12e1xxrqvlld7Q75+sMCtXgTGm5oYuHkfW5EpYPeuqZK6h0BAjmTuCMtpBjCG5Vqui+gbXbM2xnWC1QXgVL3SUDVk+9Nhqkiaxlk4q2fRusGwh+Rp7zRyrQ+V8JxUFNfUnTTktuI3MbrDCdA1qJHLz105KSmiuRd0Rd20qTFZjYWvqfG0q6O/tuJow24QaicyELQItJJ42o0YiT4mNDQvNm02pUFjNzbgbB9jRK2EDsNDZwqqt2bpgIfFqayjoZr4OWGBnu4BaYJauqDVhPNvl/1K+mY3DLQtCcyfhXdETWCZ7huk1Mdt4pYaQkWcfGz0FPrcv3mD0vJkQlip0/p4/M3Kpm5snpJub7wV80Yv+P/XqH1FE+EcUia4qDz/O0TMKYW9TAMmjWz7T6fVSe/m9fG+v88zY/F2ne9e56887/c58Nn/Vmd3O5/Nuv7fF26bypvbgZh/m95BScMtHbbf9brfbv+0DtTefzWbaU39809sqyN3+Xadz15nDff8Wju7AWncOv/35/C5lYffmnS789PsIPJuB41l3Nt/bgprv9rt9CB+Aut07oN0BAKzBQb/f3bOw0V6+d9vr9KK30Wgnmop2Mr3b6DYhNoOMSgXeLIWqFAUaKHYFRW2s9QkX989aw5a8C+g76X/H81waMUN0bAAAAABJRU5ErkJggg==" alt="Shihab">
    </div>
</td> -->
<td><?php echo $list_data['Full_name'];?></td>
<td><?php echo $list_data['Email_name'];?></td>
<td><a class="btn btn-info" href="data.com">Go</a></td>

</tr>
<?php } ?>
</tbody>
</table>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

    </script>
</body>

</html>