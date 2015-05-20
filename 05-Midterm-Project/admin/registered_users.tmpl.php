<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- Needs to be locked down -->
	<h1>Folks on your mailing list</h1>
<?php 
	if ( $registered_users ) {
		foreach ($registered_users as $user) {
			list($name, $email) = $user;
			echo "<li>$name: <a href='mailto:$email'>$email</a></li>";
		}
	} else {
		echo "<li>No registered members.</li>";
	}
?>
</body>
</html>
