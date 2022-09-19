<?php

include_once 'connexion.php';
include 'header.php';


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

    $result=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
    
     $data=$result->fetch_assoc();
     $_SESSION['user_id']=$data['id'];
     $_SESSION['role']=$data['role'];
    

  }else{
    echo"<div>
    <h2>une ereur c'est produit pendand l'inscription</h2>
    <p>le mail ou le numéro de téléphone est deja utilisé</p>
    <a href='#'>Revenir a la page d'acueil </a>
 </div>";
  }
  if($data!==false){
    if(!empty($_SESSION)){
      echo"<div>
      <h2>l'inscription est un sucecce</h2>
      <a href='#'>connecter vous</a>
   </div>";
    }
  }
    
  } 
  }

