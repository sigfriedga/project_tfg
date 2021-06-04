<?php

class db_nba {
  private $conection;

  public function __construct(){
      $this->conection = mysqli_connect("localhost", "root", "1234" , "form");
      if ($this->conection->connect_errno){
          echo 'Error in your connection server';
      }
  }

  public function getExist($email){
      $query = "SELECT email FROM contactform WHERE email = '{$email}'";
      $result = $this->conection->query($query);
      $row_array = array();
      while($row = $result->fetch_assoc()){
          array_push($row_array, $row);
      }
      return $row_array;
      
  }
  
}

  ?>