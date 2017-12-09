<?php session_start();
 require 'db/db.php'
?>
<!doctype html>
<html lang="da">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scales=1">
	<meta name="description" content="beskrivelse">
	<meta name="robots" content="index, follow">
		<meta property="og:title" content="relevant title" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.detrigtigematch.dk" />
		<meta property="og:image" content="logo eller relevant billede" />
		<meta property="og:description" content="forklaring" />
		<meta property="og:locale" content="da_DK" />
	<title>Det Rigtige Match!</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>
<?php include 'header.php'
?>
<div>
    <h1>
        Det Rigtige Match!
    </h1>
    <h2>

    </h2>
</div>
<?php include 'sidenav.php'
?>
<?php include 'footer.php'
?>
	<!-- JQuery så det kan loades -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
