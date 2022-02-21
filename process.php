<?php
     
      $dbhost ="localhost";
      $dbuser ="root";
      $dbpass= "";
      $dp="phplogin";

      $conn = new mysqli ($dbhost, $dbuser, $dbpass);
      if($conn->connect_error){
          echo "ERROE - 404";
      }
      else{
          echo "connected   ";
      }

      $username =$_POST['username'];
      $password =$_POST['password'];
      
      //echo $username;
      //echo $password;



      $sql = "SELECT * FROM user WHERE username ='$username' AND password ='$password'";
      $result=mysqli_query($conn,$sql);
      $row =mysqli_fetch_array($result);
      if($row['username']==$username  &&$row['password']==$password) {

        echo "WELCOME " .$username. "you are sucessfully Loggin ";
      }
      else{
        echo "<script> alert ";
      }
         
      

?>