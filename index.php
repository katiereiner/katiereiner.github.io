<!DOCTYPE html>
<html>
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
		<div id="aboutme">
			I'm Katie. <br><br>

			I am a current Junior at The University of Michigan fascinated by new technologies and driven by the way consumers make decisions. I believe that creators can harness this information to disrupt and innovate. 
		</div>
		<img src="friends.jpg" class="pictures" id="friends" alt="My friends and I">
		<img src="dad.jpg" class="pictures" id="dad" alt="My dad!">
		<img src="family.jpg" class="pictures" id="family" alt="My mom and brother :)">
<span id="timestamp">
	<?php
// outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.


if (file_exists($fName)) {
    echo "$fName was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
}
?></span>
	</body>
	<?php
		include 'footer.php';
	?>
</html>



