



<header class="shadow-sm header">
  <div class="left dropdown">
  
  
  <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa fa-user"></i>
  </button>
  <ul class="dropdown-menu shadow-sm">
    <li class="d-flex p-3"><i class="fa fa-download"></i><a class="dropdown-item" href="#">Resume</a></li>
    <li><a class="dropdown-item" href="#">Contact </a></li>
    <li><a class="dropdown-item" href="google.com">About</a></li>
    <?php
    
    if(isset($_SESSION['UserId'])){

      echo "<li><a class='dropdown-item' href='?action=Logout'>LogOut</a></li>";
    }

    
    ?>
  </ul>
</div>

  </div>
  <div class="mid">
       <h1><a href="#">Shihab</a></h1>
  </div>
  <div class="right">
<?php


if(isset($_SESSION['UserId'])){
  $btn2="<button class='btn btn-info text-white'>Deshbord</button>";
  echo "<a href='Admin/Deshbord/'>.$btn2.</a>";
}else{
  $btn="<button class='btn btn-primary'>LogIn</button>";

  echo "<a href='?action=Login'>.$btn.</a>";
}

?>
  </div>
</header>