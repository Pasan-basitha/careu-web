<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../../css/admin/home.css">
	<link rel="stylesheet" type="text/css" href="../../css/admin/adminHeader.css">
	<link rel="stylesheet" type="text/css" href="../../includecss/footer.css">
	<title>Home</title>
</head>
<body>
	<?php include_once('../../includes/adminHeader.php'); ?>

	<div class="tasks">
		<table>
			<tr>
				<td>
					<div>
						<a href="create119OperatorAccount.php" type="submit" class="new119"><p>New 119 Operator</p><img src="https://img.icons8.com/color/96/000000/add-user-male--v1.png"/></a>
					</div>
				</td>
				<td>
					<div>
						<a href="create1990OperatorAccount.php" type="submit" class="new1990"><p>New 1990 Operator</p><img src="https://img.icons8.com/color/96/000000/add-user-male--v1.png"/></a>
					</div>
				</td>
				<td>
					<div>
						<a href="userManagement.php" type="submit" class="usermanage"><p>User Management</p><img src="https://img.icons8.com/color/96/000000/checked-user-male--v1.png"/></a>
					</div>
				</td>
				<td>
					<div>
						<a href="reports.php" type="submit" class="report"><p>Generate Reports</p><img src="https://img.icons8.com/color/96/000000/fine-print.png"/></a>
					</div>
				</td>
			</tr>
		</table>
	</div>

	<?php include_once('../../includes/footer.php'); ?>
</body>
</html>