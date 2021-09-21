<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Item</title>
  <link rel="stylesheet" type="text/css" href="css/barbcss.css">
</head>
<body>
<div class="header">
		<h2>Add Vehicle</h2>
	</div>
	
<form action="includes/addvehicle.php" method="POST">
	<div class="input-group">
		<label>Vehicle Make</label>
		<input type="text" name="vmake">
	</div>
	<div class="input-group">
		<label>Vehicle Model</label>
		<input type="text" name="vmodel">
	</div>
	<div class="input-group">
		<button type="submit" class="btn">Add Vehicle</button>
	</div>
</div>
</form>
<br>
<br>
<center>
	<a href="admin.html">Back</a>	
</center>

</body>
</html>
