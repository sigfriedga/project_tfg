<?php include("includes/bd/bd.php"); 

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
}

?>