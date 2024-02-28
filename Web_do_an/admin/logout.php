<?php

    session_start();
   if(isset($_SESSION["user1"])){
   
	unset($_SESSION["user1"]);
   }
 header("location:login1.php");
  

?>