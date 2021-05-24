<?php
    $server = 'localhost';
    $user = 'root';
    $password = '1234';
    $database = 'form';

    $connect = mysqli_connect($server, $user, $password, $database);

      if(!$connect){
        echo"Error in your connection server";
      }
  ?>