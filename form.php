<?php

	$name = $_POST["nome"];
	$nachname = $_POST["surname"];
	$tel = $_POST["tel"];
	$mobile = $_POST["mobile"];
	$email = $_POST["email"];
	$district = $_POST["district"];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Results</title>
<meta name="viewport" content="width=device-width, user-scalable=no">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/normalize.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="wrapper" class="container">

	<figure class="page-head-image">
      <img src="http://loremflickr.com/300/300/person" />
    </figure>

	<h1>Hello <?php echo $name . " " . $nachname ?></h1>
	<p><strong>Tel:</strong> <?php echo $tel ?></p>
	<p><strong>Mobile:</strong> <?php echo $mobile ?></p>
	<p><strong>District:</strong> <?php echo $district ?></p>
	<p><strong>Email:</strong> <?php echo $email ?></p>
	<p>Thank you!</p>
</div>
	
</body>
</html>