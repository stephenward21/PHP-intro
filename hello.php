<!DOCTYPE html>
<html>
<head>
	<title>PHP Test</title>
</head>
<body>
	<!-- Can use the <?php ?> and <?= ?> tags to write compatible php in version 5 and 7.  <script tags deprecated in php 7 -->
	<!-- instructions or lines/blocks of code are escaped with a ';' -->
		
	<?= echo '<p> Hello World </p>
	<h1> It is a beautiful world, no?? </h1>
	<h2> THANK YOU!!! </h2>'; 

	?>

	<?= 
	echo $_SERVER['HTTP_USER_AGENT'];
	?>

	<?=
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') == FALSE) {
		    echo 'You are using Mozilla.<br />';
		}
	?>

	<?=
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
		?>
		<h3>strpos() must have returned non-false</h3>
		<p>You are using Internet Explorer</p>
		<?=
		} else {
		?>
		<h3>strpos() must have returned false</h3>
		<p>You are not using Internet Explorer</p>
		<?=
		}
	?>

	<form action="hello.php method="post">
	 <p>Your name: <input type="text" name="name" /></p>
	 <p>Your age: <input type="text" name="age" /></p>
	 <p><input type="submit" /></p>
	</form>

	Hi <?= echo htmlspecialchars($_POST['name']); ?>.
	You are <?= echo (int)$_POST['age']; ?> years old.

	<!-- BOOLEANS -->

	<?php 
	$foo = 'the bird is blue'
	echo $foo;
	?>

	<?php
// == is an operator which tests
// equality and returns a boolean
	if ($action == "show_version") {
	    echo "The version is 1.23";
	}

	// this is not necessary...
	if ($show_separators == TRUE) {
	    echo "<hr>\n";
	}

	// ...because this can be used with exactly the same meaning:
	if ($show_separators) {
	    echo "<hr>\n";
	}
	?>

	<?php
	var_dump((bool) "");        // bool(false)
	var_dump((bool) 1);         // bool(true)
	var_dump((bool) -2);        // bool(true)
	var_dump((bool) "foo");     // bool(true)
	var_dump((bool) 2.3e5);     // bool(true)
	var_dump((bool) array(12)); // bool(true)
	var_dump((bool) array());   // bool(false)
	var_dump((bool) "false");   // bool(true)
	?>

	<!-- INTEGERS -->
	<!-- var_dump returns infor about the type and value of the variable (similar to typeOf in javascript) -->
	<?php
	$large_number = 2147483647;
	var_dump($large_number);                     // int(2147483647)

	$large_number = 2147483648;
	var_dump($large_number);                     // float(2147483648)

	$million = 1000000;
	$large_number =  50000 * $million;
	var_dump($large_number);                     // float(50000000000)
	?>

</body>
</html>