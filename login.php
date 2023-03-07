<?php
include 'dbh.inc.php';
session_start();

$nickname = htmlspecialchars($_POST["Username"]);

  $stmt = $pdo->prepare("SELECT * FROM adherent WHERE nickname =:nickname");
  $stmt->bindParam(':nickname', $nickname);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row) {

    if (password_verify($_POST["pwd"], $row["password"])) {
    $_SESSION["adherent_id"] = $row["code_adherent"];
    header("Location: homePage.php");
    exit;  
    
 } else {
    
     echo 'Password is false';
     print_r($row);
 }


  } else {

      echo "No matching rows found.";
  }


  ?>


