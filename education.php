<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
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

<div class="education">
	<h4 class="mich_holder">UNIVERSITY OF MICHIGAN - ROSS SCHOOL OF BUSINESS</h4>
	<div class="michigan">

		<p>There's no denying that the University of Michigan is one of the most special places in the world. The spirit, innovation and intelligence that floods the campus is inspiring and what drove my passion for business and technology. Go Blue! </p>
	</div>

	<h4 class="lse_holder">LONDON SCHOOL OF ECONOMICS</h4>
	<div class="lse">
		<p>Having the opportunity to study macroeconomics at LSE was an amazing experience. I was able to completely emmerse myself in a foreign country and not only learn economics from the perspective of another country but also learn about different cultures around the world.</p>
	</div>

	<h4 class="dev_holder">DEV BOOTCAMP - THE ORIGINAL CODING BOOTCAMP</h4>
	<div class="dev">
	
		<p>My time at Dev Bootcamp was life changing. I spent 9 weeks learning Ruby on Rails and Javascript, worked with multiple teams as different positions and most importantly, learned "how to" learn.</p>
	</div>
</div>
<span id="timestamp"><?php
// outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.

$filename = 'education.php';
if (file_exists($filename)) {
    echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
}
?></span>
	<?php
		include 'footer.php';
	?>
</body>
</html>
