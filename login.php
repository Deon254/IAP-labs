<?php 
  include_once  'dbconnector.php';
  include_once  'user.php';

  $con = new DBConnector;
  if(isset($_POST['btn-login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $instance = User::create();
   $instance->setPassword($password);
   $instance->setUsername($username);

   if($instance->isPasswordCorrect()){
      $instance->login();

      $con->closeDatabase();

      $instance->createUserSession();
   }else{
     $con->closeDatabase();
     header("Location:login.php");
   }

  }
?>

<html>
   <head>
     <title>CRUD OPERATIONS</title>
      <script type="text/javascript" src="validate.js"></script>

      <link rel="stylesheet" type="text/css" href="validate.js">
   </head>

   <body>
         
       <form method="post" name="login" id="login" action="<?=$_SERVER['PHP_SELF'] ?>">
       
        <table align="center">
          <tr>
            <td><input type="text" name="username" placeholder="Username" required></td>
          </tr>

           <tr>
            <td><input type="password" name="password" placeholder="Password" required></td>
          </tr>

           <tr>
            <td><button type="submit" name="btn-login"> <strong>LOGIN</strong></button></td>
          </tr>
       
        </table>
       </form>
   </body>


</html>