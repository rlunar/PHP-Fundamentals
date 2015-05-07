<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (mail('rluna@webdcg.com', 'New Website Message', htmlspecialchars($_POST['message']))) {
		$status = "Thank you for your message.";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form ul { margin: 0px auto; padding: 0; }
		form li { list-style: none; margin-bottom: 1em; }
	</style>
</head>
<body>
	<h1>Contact Form</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" />
			</li>
			<li>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email" />
			</li>
			<li>
				<label for="message">Message:</label>
				<textarea name="message" id="message"></textarea>
			</li>
			<li>
				<input type="submit" value="Go!" />
			</li>
		</ul>
	</form>
	<?php if (isset($status)) { echo $status; } ?>
</body>
</html>