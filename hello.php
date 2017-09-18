<!DOCTYPE html>
<html>
<head>
	<title>PHP Test</title>
</head>
<body>
	<?php echo '<p> Hello World </p>
	<h1> It is a beautiful world, no?? </h1>
	<h2> THANK YOU!!! </h2>'; 

	?>

	<?php 
	echo $_SERVER['HTTP_USER_AGENT'];
	?>

	<?php
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') == FALSE) {
		    echo 'You are using Mozilla.<br />';
		}
	?>

	<?php
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
		?>
		<h3>strpos() must have returned non-false</h3>
		<p>You are using Internet Explorer</p>
		<?php
		} else {
		?>
		<h3>strpos() must have returned false</h3>
		<p>You are not using Internet Explorer</p>
		<?php
		}
	?>

	<form action="hello.php" method="post">
	 <p>Your name: <input type="text" name="name" /></p>
	 <p>Your age: <input type="text" name="age" /></p>
	 <p><input type="submit" /></p>
	</form>

	Hi <?php echo htmlspecialchars($_POST['name']); ?>.
	You are <?php echo (int)$_POST['age']; ?> years old.

</body>
</html>