<?php
session_start();
include './html/connexion.php';
include 'includes/header.php';

var_dump($_POST);
var_dump($_SESSION);
if(isset($_POST)!==false)
{
  //1.recuperer les valeur utilisateur
  // 2. protéger les donner  
  $lastname = htmlspecialchars($_POST['lastname']);
  $firstname = htmlspecialchars($_POST['firstname']);
  $email = htmlspecialchars($_POST['mail']);
  $address = htmlspecialchars($_POST['address']);
  $phone_number = htmlspecialchars($_POST['phone_number']);
  $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
  $dataUser=[$lastname,$firstname,$address,$email,$phone_number,$password];
  
  if($db !== false) {
    
    // 3.envoier une requete sql a la bdd
    $query=$db->prepare(
    'INSERT INTO users ( 
    `lastname`,
    `firstname`,
    `mail`,
    `phone_number`,
    `password`,
    `address`
   )VALUES
   (:lastname,
    :firstname,
    :mail,
    :phone_number,
    :password,
    :address)'
   );
   $result=$query->execute(array(
    ":lastname" => $lastname,
    ":firstname"=>$firstname,
    ":mail"=> $email,
    ":phone_number"=>$phone_number,
    ":password"=>$password,
    ":address"=>$address
  ));

  }}