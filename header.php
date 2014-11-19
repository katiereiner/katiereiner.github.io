<header>
			<nav>
				<ul>
					<li><a href="index.php" 
						<?php if ($fName == "index.php") 
						{ echo "class = \"current\"";
						} 
						?>
						>Home</a></li> 

					<li><a href="aboutme.php"
						<?php if ($fName == "aboutme.php") 
						{ echo "class = \"current\"";
						} 
						?>
						>About Me</a></li>

					<li><a href="education.php" 
						<?php if ($fName == "education.php") 
						{ echo "class = \"current\"";
						} 
						?>
						>Education</a></li>

					<li><a href="experience.php" 
						<?php if ($fName == "experience.php") { echo "class = \"current\"";
						} 
						?>
						>Experience</a></li>
				</ul>
			</nav>
</header>