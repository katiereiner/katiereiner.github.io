<!DOCTYPE html>
<html lang="en">
<head>
<title>Katie's Personal Page</title>
<link rel="stylesheet" type="text/css" href="normalize.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="application.js"></script>

<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
<meta name="viewport" content="width=device-width" />
</head>
<body>
	<?php 
		$fName = basename(__FILE__);
		?>
	<?php 
			include 'header.php';
	?>

	<p class="experience">COMPANION MOBILE APP<a href="http://www.companionapp.io"><img src="companion.jpg" alt="companion"></a></p>
	<p class="experience">CRIBSPOT STUDENT HOUSING</p>
	<p class="experience">SPOON UNIVERSITY</p>
	<p class="experience">EBCARD MOBILE APP</p>

<span id="timestamp"><?php
// outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.

$filename = 'experience.php';
if (file_exists($filename)) {
    echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
}
?></span>
	<?php
		include 'footer.php';
	?>
</body>
</html>