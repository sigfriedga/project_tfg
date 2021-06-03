<?php include("includes/connect/bd.php"); 

if(isset($_POST['checkin'])){
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["email"];

  $insertData = "INSERT INTO contactform (`name`, `surname`, `email`) VALUES(
    '$name',
    '$surname', 
    '$email')";
  
    $runInsert = mysqli_query($connect, $insertData);

    if(!$runInsert){
      echo " Error in SQL query";
    }


    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $email = $_POST["email"];

      $searchemail = "SELECT email from contactform WHERE email='$email'";

      //Realizamos la consulta y anadimos $connect, ya que es la variable que creamos en nuestro archivo db.php
      $result = $connect->query($searchemail);

      //Usaremos la funcion mysqli_num_rows en la consulta $result,
      //esta funcion nos regresa el numero de filas en el resultado
      $counter = mysqli_num_rows($result);

      //SI SI EXISTE una fila, quiere decir QUE SI ESTA EL CORREO EN LA BASE DE DATOS
      if($counter == 1) {
         echo 'This Email already exist';
      } 
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
