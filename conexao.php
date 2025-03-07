<?php
 

 $servername = "localhost";
 $database = "dados";
 $username = "root";
 $password = "root";
 

 $conn = mysqli_connect($servername,$username, $password, $database);
 
 if(!$conn){
   die("Falha na conexão:".mysqli_connect_error());
}


?>