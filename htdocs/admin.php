<?php
require_once('functions.php');
authenticate(array("admin"));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin User Page</title>
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/adminuserpage.css">
</head>
<body>
	

<h1>Admin</h1>
    
<h3>Add User</h3>    
<form>
  <label>Name:</label><br>
  <input type="text" name="name"><br>
  <label>Password:</label><br>
  <input type="password" name="password"><br>
    <input type="radio" name="role" value="user" checked> User
  <input type="radio" name="role" value="service"> Service
  <input type="radio" name="role" value="Admin"> Admin<br>
  <input type="submit" name="submit" value="Submit">
    
</form>
    
<h3>Parking spots</h3>
    
<form>
  <label>Number:</label><br>
  <input type="text" name="number" value="23"><br>
  <input type="submit" name="submit" value="Submit">
</form>
    
<h3>Parking log</h3>
    
<form>
  <label>Start date:</label><br>
  <input type="date" name="startdate"><br>
  <label>End date:</label><br>
  <input type="date" name="enddate"><br>
  <input type="submit" name="submit" value="Submit">
</form>
    
    
    
</body>
</html>
