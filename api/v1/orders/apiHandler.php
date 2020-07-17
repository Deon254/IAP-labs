<?php

   include_once '../../../dbconnector';

   class ApiHandler 
   {
     private $meal_name;
     private $meal_units;
     private $unit_price;
     private $status;
     private $user_api_key;

     public function getMealName()
     {
       return $this->meal_name;
     }

     public function setMealName($meal_name)
     {
       $this->meal_name = $meal_name;
     }

     public function getMealUnits()
     {
      return $this->meal_units;
     }

     public function setMealUnits($meal_units)
     {
       $this->meal_units = $meal_units;
     }

     public function getUnitPrice()
     {
       return $this->unit_price;
     }

     public function setUnitPrice($unit_price)
     {
      $this->unit_price = $unit_price;
     }

     public function getStatus()
     {
      return $this->status;
     }

     public function setStatus($staus)
     {
      $this->status = $status;
     }

     public function getUserApiKey()
     {
      return $this->user_api_key;
     }

     public function setUserApiKey($key)
     {
      $this->user_api_key = $key;
     }


     public function createOrder()
     {
       $connect = new DBconnector();
       $res = mysqli_query($connect->conn, "INSERT INTO orders(order_name,units,unit_price,order_status) VALUES ('$this->meal_name','$this->meal_units','$this->unit_price','$this->status')") or die("Error: ".mysqli_error($con->conn));

       return $res;
     }

     public function checkOrderStatus($id)
     {
       $connect = new DBconnector();
       $order = mysqli_fetch_assoc( mysqli_query($connect->conn,  "SELECT * FROM orders WHERE order_id = '$id' "));

       return $order['order_status'];
     }

     public function fetchAllOrders()
     {
      // TO DO
     }

     public function checkApiKey()
     {
      $connect  = new DBconnector();
      $api = mysqli_query($connect->conn, "SELECT * FROM api_keys WHERE api_key = '$this->user_api_key' ");

      return $api;
     }

     public function checkContentType()
     {
       // TO DO
     }

   }

?>