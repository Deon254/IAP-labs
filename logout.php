<?php 
  include_once 'user.php';
  
  $instance = User::create();

  $instance->logout();
?>