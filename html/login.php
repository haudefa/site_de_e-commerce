<?php
header('Location:Enfants.php');
include "connexion.php";
include "header.php";
if(!empty($_POST['mail']) && !empty($_POST['password'])){
    $mail = htmlspecialchars( $_POST['mail']);
    $password = htmlspecialchars($_POST['password']);
    $result=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
    
     $data=$result->fetch_assoc();
    
    if($data!==null){
        if (password_verify($_POST['password'], $data['password']) === true) {
        $_SESSION['user_id']=$data['id'];
        $_SESSION['role']=$data['role'];
    
    }
}

}
die();
?>
<div>

</div>



