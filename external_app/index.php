<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>External App</title>

<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
      
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
     <h3>It is time to communicate with the exposed API key to be passed in the header</h3>
	<hr>
	<h4>1. Feature 1 - Placing an order</h4>
	<hr>
	<form name="order_form" id="order_form">
		<fieldset>
			<legend>Place order</legend>
			<input type="text" name="name_of_food" id="name_of_food" placeholder="name of food" required><br>
			<input type="number" name="number_of_units" id="number_of_units" placeholder="number of units" required><br>
			<input type="number" name="unit_price" id="unit_price" placeholder="unit price" required><br>
			<input type="hidden" name="status" id="order_status" value="received"><br><br>
			<button type="submit" id="btn-place-order" class="btn btn-primary">Place order >></button>
		</fieldset>
	</form>
	<hr>
	<h4>1. Feature 2 - Checking order status</h4>
	<hr>
	<form name="order_status_form" id="order_status_form">
		<fieldset>
			<legend>Check order status</legend>
			<input type="number" name="order_id" id="order_id" placeholder="order id" required><br><br>
			<button id="btn-check-status" class="btn btn-warning" type="submit">Check order status</button>
		</fieldset>
	</form>
</body>
</html>