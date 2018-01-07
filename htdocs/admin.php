<?php
require_once('functions.php');
authenticate(array("admin"));
?>

<!DOCTYPE html>
<head>
	<title>Admin User Page</title>
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/adminuserpage.css">
	<script src="js/adminuserpage.js"></script>
</head>
<body>
	<div class="container">
		<div class="title">
			<h1>Clientlist</h1>
		</div>
		<!--adding contacts-->
		<div class="clientadd"><button id="ClientAdd">+ Add new client</button></div>
		<!--contact form that needs to be filled in-->
		<div class="clientaddForm">
        <form class="spots" action="actions/adduser.php" method="POST">
			<label for="username">Username</label><input type="text" id="username" class="formFields" placeholder="Username">
			<label for="password">Password</label><input type="text" id="password" class="formFields" placeholder="Password">
			<br>
			<label for="role">Role</label>
    			<select class="role">
  					<option value="user">User</option>
  					<option value="admin">Admin</option>
  					<option value="service">Service</option>
				</select>
			<br><br>
			<!--buttons for actual addition and cancelling-->
			<button id="Add">Add Now</button>
            <!-- <button id="Cancel">Cancel</button> -->
        </form>
		</div>

		</div>
		<div class="title">
			<h2>Available spots</h2>
		<div>
            <form class="spots" action="actions/setoption.php" method="POST">
                <input type="hidden" name="option" value="total_spots">
                Total Parking Spots: <input class="spots" type="text" name="value"
                    value="<?php echo getOption('total_spots'); ?>"><br>
            </form>
<!--             <form class="spots" action="actions/setoption.php" method="POST">
                <input type="hidden" name="option" value="available_spots">
                Available Parking Spots: <input class="spots" type="text" name="value"
                    value="from database"><br>
            </form>
 -->			<br>
		</div>
		<br><br><br><br>
		<div class="title">
			<h2>Time spent parking</h2>
		<div>
			<div class="dateForm">
            <form class="spots" action="accesslog.php" method="GET">
    			<label for="datestart">Date Start</label><input type="date" id="datestart" class="formFields">
    			<label for="datestart">Date End</label><input type="date" id="dateend" class="formFields">
            </form>
			</div>
		</div>
	</div>
</body>
</html>
