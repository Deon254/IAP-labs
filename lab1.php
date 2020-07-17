<?php
include('dbconnector.php');
include('user.php');
$conn=new DBConnector;

if (isset($_POST['btn-save'])){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$city_name=$_POST['city_name'];
	
	$user = new User($first_name,$last_name, $city_name);
	$res = $user->save();
	
	if($res){
		echo" Save operation was successful";
	}else{
		echo "An error occured!";
		
	}
	//<?$_SERVER['PHP_SELF']
		
}


?>


<!DOCTYPE html>
	<head>
		<title>Lab 1</title>
	</head>
	
	<body>
	<form action=""  method="post">
	<table border="1" align="center">
			<h1 class="modal-title"align="center" > Modal</h1>
			<table border="1" align="center">
		
			
			<tr>
			<td>First name</td>
			<td><input type="text" name="first_name" required placeholder="First Name"/></td>
			
			</tr>
			<tr>
			<td>Last name</td>
			<td><input type="text" name="last_name" required placeholder="Last Name"/></td>
			
			</tr>
			
			<tr>
			<td>User city</td>
			<td><input type="text" name="city_name" required placeholder="City"/></td>
			
			</tr>
			<tr>
			<td colspan="2" align ="center"><button type="submit" name ="btn_save"><strong>Save</strong></button></td>
			</tr>
			</table>
			</table>
			</form>
			</body>
			</html>