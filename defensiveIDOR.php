<?php
  session_start();
  if (!isset($_SESSION['logged'])){
  	header("location:http://test.com/login");
  	die();
  }


?>