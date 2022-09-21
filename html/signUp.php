<?php
include_once 'includes/connexion.php';
include 'includes/header.php';;

// vérifire la conection 
if ($con !== false); {
  // verifié si POST n'ai pas vide  
  if (isset($_POST)) {
    //1.recuperer les valeur utilisateur en les en les protégent 
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $mail = htmlspecialchars($_POST['mail']);
    $address = htmlspecialchars($_POST['address']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    // requete pour selectionner  la colone mail 
    $result=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
     
    // récuperer le resulta 
    $result=$result->fetch_assoc();
 
    if($result !==null){

      $_GET['mail']=$result['mail'];
      $_GET['phone_number']=$result['phone_number'];
    }   
    // verifier si le mail est numéro de telephone ne sont pas deja dans la bdd
    // vérifier si le password est déja utilisé ? 
    // if($_GET['password']==$_POST['password']){
       
    // }

      if(empty($_GET)){
     var_dump($_GET);
        
     // préparer la requette pour inserer les donner utilisateur 
     $query = $con->prepare(
       "INSERT INTO users ( 
    `lastname`,
    `firstname`,
    `mail`,
    `phone_number`,
    `address`,
    `password`
    )VALUES(?,?,?,?,?,?)"
    );
    
    // on execute la requete en injectent les donner utilisateur 
    $result = $query->execute(array($lastname, $firstname, $mail, $address, $phone_number, $password));
    var_dump($result);
    $data=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
     $data=$data->fetch_assoc();
    var_dump($data);

    
     if($data!==false){
      $_SESSION['user_id']=$data['id'];
      // $_SESSION['role']=$data['role'];
      if(!empty($_SESSION)){
        echo"<div class='info'>
        <h2 calsse='error'>l'inscription est un sucecce</h2>
        <a href='index.php' class='btn btn-primary'>connecter vous</a>
     </div>";
      }
    }
  }else{
       echo"<div class='info1'>
       <h3>une ereur c'est produit pendant l'inscription</h3>
       <p>le mail ou le numéro de téléphone est deja utilisé</p>
       <p>veuiller recomancer l'inscription </p>
       <button data-bs-toggle='modal' data-bs-target='#signupModal'>
       S'incrire
       </button>     
       </div>";
  }      
 } 
}


include "includes/footer.php";
