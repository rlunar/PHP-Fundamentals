<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		ul, li { margin: 0px auto; padding: 0px; }
		li { list-style: none; }
		.notice { color:red; font-style: italic; }
	</style>
</head>
<body>
	<h1>Join the mailing list</h1>
	<form action="" method="post">
		<?php if ( isset($status) ) : ?>
				<p class="notice"><?=$status;?></p>
		<?php endif; ?>
		<ul>
			<li>
				<label for="name">Your name: </label>
				<input type="text" name="name" value="<?=old('name');?>">
			</li>
			
			<li>
				<label for="email">Your Email address: </label>
				<input type="text" name="email" value="<?=old('email');?>">
			</li>

			<li>
				<input type="submit" value="Sign Up!">
			</li>
		</ul>
	</form>
</body>
</html>
