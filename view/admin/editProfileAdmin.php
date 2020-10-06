<?php include_once('../../includes/connection.php'); ?>
<?php include_once('../../php/editProfileAdmin.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/editProfileAdmin.css">
	<link rel="stylesheet" type="text/css" href="../../css/adminHeader.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
	<title>Edit Profile</title>
</head>
<body>
	<?php include_once('../../includes/adminHeader.php'); ?>

	<div class="breadcrum">
		Edit Profile
	</div>

	<div class="form">
		<center>
			<form action="editProfileAdmin.php" method="post">
				<table class="info">
					<tr>
						<td class="proPic">
							<img src="../../img/admin.jpg">
						</td>
						<td class="labels">
							<label>First Name</label><br>
							<label>Last Name</label><br>
							<label>Password</label><br>
							<label>Re-enter Password</label><br>
						</td>
						<td class="inputs">
							<input type="text" name="firstName" value="<?php echo $records['firstName']; ?>"><br>
							<input type="text" name="lastName" value="<?php echo $records['lastName']; ?>"><br>
							<input type="password" name="password1" value="<?php echo $records['password']; ?>"><br>
							<input type="password" name="password2" value="<?php echo $records['password']; ?>"><br>
						</td>
					</tr>
					<tr class="save">
						<td colspan="3">
							<input type="submit" value="Save" name="submit">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
</body>
</html>