<?php


class Darkwe{
    private $conn;
   
 public function __construct()
 {
   


    $this->conn=mysqli_connect('sql208.infinityfree.com','if0_35386836', 'aGZarBlJmCK', 'if0_35386836_darkwe');

    if($this->conn){
    
    }
    else {
die('Somthing went Wrong');
    }
 }


public function Add_User($user)
{

$Full_name=$user['Full_Name'];
$Email_name=$user['Email_Name'];
$Password_name=$user['Password_name'];

if(!empty($Full_name) && !empty($Email_name) && !empty($Password_name)){

    $Reg_query="INSERT INTO `dakwe_tble`(`id`, `Full_name`, `Email_name`, `Password_name`) VALUES (null,'$Full_name','$Email_name','$Password_name')";

        $data_inserted= "Successfully Created";
        $faild_insert="Somthing goes wrong";
    if(mysqli_query($this->conn, $Reg_query)){
         return $data_inserted;
    }
    else{
        return $faild_insert;
    }
   
}





}



public function Login_User($Login)
{

  $User_Password=$Login['Password_Name'];
  $User_Email=$Login['Email_Name'];
 $login_alert="User x";
 $login_alert_err="User Not found";
 if($User_Email==='admin.shihab@gmail.com'){

$_SESSION['Admin']="admin.shihab@gmail.com";


    header('location:/Admin/Deshbord/Todo.php');

 }
 else{
    $Login_query="SELECT * FROM `dakwe_tble` WHERE Email_name='$User_Email' && Password_name='$User_Password'";

    if(mysqli_query($this->conn, $Login_query)){
       $Login_data=mysqli_query($this->conn, $Login_query);
        $Login_user= mysqli_fetch_assoc($Login_data);
   
   if($Login_user){
     
       session_start();
    $_SESSION['UserId']=$Login_user['id'];
   
       header('location:/Admin/Deshbord/');
   }else {
       return "User Not Found";
   }
   
    }
    else{
       return 'User Not Found';
   
    }
   

 }




}
public function LogOut(){
    unset( $_SESSION['UserId']);
    header('location:index.php');
}

public function List_data()
{
    $List_query="SELECT * FROM `dakwe_tble` ORDER BY id DESC";

    if(mysqli_query($this->conn, $List_query)){

        $List_fetch=mysqli_query($this->conn, $List_query);

        return $List_fetch;
    }
}

public function User()
{
    $id= $_SESSION['UserId'];
    $User_query="SELECT * FROM `dakwe_tble` WHERE id='$id'";
    if(mysqli_query($this->conn, $User_query))
    {
        $user_q_result= mysqli_query($this->conn, $User_query);
        $actual_result= mysqli_fetch_assoc($user_q_result);
        if($actual_result){
            return $actual_result;
        }
        else {
            return "User Not found";
        }
    }
}



public function User_pic_update($img){
    $id= $_SESSION['UserId'];
$img_name=$_FILES['update_profile']['name'];
$img_tmp= $_FILES['update_profile']['tmp_name'];
    $Update_query= "UPDATE `dakwe_tble` SET `Img_info`='$img_name' WHERE id='$id'";


if(mysqli_query($this->conn, $Update_query)){
    $upload_msg=move_uploaded_file($img_tmp, "../Uploads/".$img_name);

    if($upload_msg){
        return "Now refesh the page";
    }
    else{
        return "Tap the Profile First";
    }


}else{
    return "Somthing went wrong";
}

}
  public function User_row(){
         $user_row='SELECT * FROM `dakwe_tble`';
         $num_result=mysqli_query($this->conn, $user_row);
         if($num_result){
            $ac_result= mysqli_num_rows($num_result);
            return $ac_result;
         }
  }
  public function Visitor_data(){
    $vistor_ip=$_SERVER['REMOTE_ADDR'];
$query= "SELECT * FROM `trafhic_std` WHERE IP_ADDRSS='$vistor_ip'";


$result = mysqli_query($this->conn, $query);
if(!$result){
    die('somthing went wrong in trafhic'.$result);

}$total_vistor= mysqli_num_rows($result);

if($total_vistor<1){
    $query= "INSERT INTO `trafhic_std` (IP_ADDRSS) VALUES ('$vistor_ip')";
$result= mysqli_query($this->conn,$query);

}
$todo="SELECT * FROM `trafhic_std`";
$todos=mysqli_query($this->conn, $todo);
$todo_counter=mysqli_num_rows($todos);



return $todo_counter;




  }

public function  Edit_gist($eidt_gist){
    $gist_info=$eidt_gist['gist_info'];

$id= $_SESSION['UserId'];
$gist_update="UPDATE `dakwe_tble` SET `Details`='$gist_info' WHERE id='$id'";
if(mysqli_query($this->conn, $gist_update)){
    return "d Successfully";
}


}

public function Post($post){
    $post_info=$post['post_data'];
    $File_post=$_FILES['post_file']['name'];
    $File_post_tmp=$_FILES['post_file']['tmp_name'];
 $data_pic=$this->User();
 $data_pic_two=$data_pic['Img_info'];
 $data_profile_name=$data_pic['Full_name'];
 $post_time=date('d-m-y');
$query="INSERT INTO `post`(`id`, `Post_info`,`Post_pic`, `Profile_pic`,`Profile_name`, `Post_time`) VALUES (null,'$post_info','$File_post','$data_pic_two','$data_profile_name','$post_time')";

if(!empty($post_info)){
  
   if(mysqli_query($this->conn, $query)){
  
    if(move_uploaded_file($File_post_tmp, '../Uploads/'.$File_post)){
        return "Poseted Successfully";
    }
    else {
        return "Couldn't move file";
    }
   }
     

 
}else {
    return "Fill the gap";
}




}
public function Social(){

    $query ="SELECT * FROM `post` ORDER BY id DESC LIMIT 25";

if(mysqli_query($this->conn, $query)){

    $result= mysqli_query($this->conn, $query);

    if($result){
        return $result;
    }
}


}
public function Post_delete($data_id){
$querydata="DELETE FROM `post` WHERE id=$data_id";

$result=mysqli_query($this->conn, $querydata);
if($result){
 return "Post deleted";
}

}




}

$Objects= new Darkwe();











?>