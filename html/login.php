<?php

include "includes/connexion.php";
include "includes/header.php";
if(!empty($_POST['mail']) && !empty($_POST['password'])){
    $mail = htmlspecialchars( $_POST['mail']);
    $password = htmlspecialchars($_POST['password']);
    $result=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
    
     $data=$result->fetch_assoc();
    
    if($data!==null){
        if (password_verify($_POST['password'], $data['password']) === true) {
        $_SESSION['user_id']=$data['id'];
        $_SESSION['role']=$data['role'];
        if(!empty($_SESSION)){
            echo"<div class='info'>
            <h2 calsse='error'>l'inscription est un sucecce</h2>
            <a href='index.php' class='btn btn-primary'>connecter vous</a>
         </div>";
          
        }
      }else{
           echo"<div class='info1'>
           <h3>une ereur c'est produit pendant l'inscription</h3>
           <p>le mail ou le numéro de téléphone est deja utilisé</p>
           <p>veuiller recomancer l'inscription </p>
           <button data-bs-toggle='modal' data-bs-target='#loginModal'>
           S'incrire
           </button>     
           </div>";
      }      
    }else{
        echo"<div class='info1'>
        <h3>le mail ou le numéro de téléphone existe pas </h3>
        <button data-bs-toggle='modal' data-bs-target='#loginModal'>
         Se connecter   
        </div>";
    }
}



?>
<div>

</div>



