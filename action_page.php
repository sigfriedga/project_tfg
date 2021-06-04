<?php 

include("includes/connect/bd.php"); 
if(isset($_POST)){
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
 
  $insertData = "INSERT INTO contactform (`name`, `surname`, `email`) VALUES(
    '$name',
    '$surname', 
    '$email')";
  
    $runInsert = mysqli_query($connect, $insertData);

    if(!$runInsert){
      echo " Error in SQL query";
    }
}
?>
<link rel="stylesheet" href="css/main.css">
<section class="confirmed">
<div class="confirmed__area">
  <img src="img/logo.png" alt="">
  <h1>¡Thanks for contact us!</h1>
  <p>Thanks again for joining us! Your first subscription email will be arriving soon</p>
  <a href="index.php"><span class="btn__orange">Come Back</span></a>
  </div>
</section>
