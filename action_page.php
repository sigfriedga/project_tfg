 
<?php
if(isset($_POST['checkin'])){
  $id = $_POST["id"];
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["email"];

  $insertData = "INSERT INTO datos VALUES(
    '$id',
    '$name',
    '$surname', 
    '$email')";

    $runInsert = mysqli_query($connect, $insertData);

    if(!$runInsert){
      echo " Error in SQL query";
    }
}

?>