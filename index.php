<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="The primary portfolio of Wells Lucas Santo, currently a graduate student at NYU Polytechnic with interests in neuroengineering and philosophy.">
	<meta name="keywords" content="Wells Santo, Wells Lucas Santo, neuroengineering, neurophilosophy, awaterfallsunset, theonlydevking">
	<meta name="author" content="Wells Lucas Santo">
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<title>Wells Lucas Santo | { engineer. researcher. teacher. }</title>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="http://www.ultimata.net/favicon.png" />

	<link rel="stylesheet" href="buttons.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" media="screen and (max-width: 1020px)" href="mid.css" />
	<link rel="stylesheet" media="screen and (max-width: 800px)" href="small.css" />
	<link rel="stylesheet" media="screen and (max-width: 480px)" href="mobile.css" />

	<script src="jquery-1.11.2.min.js"></script>

	<script src="avatarchange.js"></script>

</head>
<body>

	<div id="header">

		<div id="avatar"><a href="http://www.wellssanto.com"><img src="Avatar2Resized.png" style="width: 150px; height: 150px;" alt="Me" /></a></div>

		<div id="links">
			<a href="https://www.facebook.com/theonlyDevking" target="_blank"><img src="facebookicon.png" alt="Facebook" style="width: 40px; height: 40px;" class="fblink" /></a>
			<a href="https://twitter.com/theonlyDevking" target="_blank"><img src="twittericon.png" alt="Twitter" style="width: 40px; height: 40px;" id="twlink" /></a>
			<a href="http://awaterfallsunset.tumblr.com/" target="_blank"><img src="tumblricon.png" alt="Tumblr" style="width: 40px; height: 40px;" id="tulink"/></a>
			<a href="http://instagram.com/awaterfallsunset" target="_blank"><img src="instaicon.png" alt="Instagram" style="width: 40px; height: 40px;" id="inlink"/></a>
			<span style="white-space: nowrap;">
			<a href="https://soundcloud.com/devking" target="_blank"><img src="soundicon.png" alt="Soundcloud" style="width: 40px; height: 40px;" id="solink"/></a>
			<a href="https://github.com/Devking" target="_blank"><img src="githubicon.png" alt="GitHub" style="width: 40px; height: 40px;" id="ghlink" /></a>
			<a href="http://www.linkedin.com/pub/wells-lucas-santo/34/53b/175" target="_blank"><img src="linkedicon.png" alt="LinkedIn" style="width: 40px; height: 40px;" id="lilink"/></a>
			</span>
		</div>

		<div id="title">
			<h1>Wells Lucas Santo</h1>
			<h2><span style="white-space: nowrap;">{ <a href="#">engineer</a>.</span> <a href="#">researcher</a>. <span style="white-space: nowrap;"><a href="#">teacher</a>. }</span></h2>
		</div>

		<div id="smallinfo">
			I. <a href="http://www.poly.edu" target="_blank">NYU</a> M.S. Computer Science
			<br />II. Researching Neuroengineering + Philosophy
			<br />III. Frontend Developer at <a href="http://percolate.com/" target="_blank">Percolate</a>
		</div>

		<div id="info">
			<ol type="I">
			<li>MS Computer Science + BS Computer Engineering + Minor Philosophy of Science at <a href="http://www.poly.edu" target="_blank">NYU</a>.</li>
			<li>Independently writing on + researching <a href="http://www.wellssanto.com/?page=writings#nav">Neuroengineering + Philosophy</a>.</li>
			<li>Educational Coach at <a href="http://www.fivepointslearning.com" target="_blank">Five Points Learning</a> in Brooklyn, NY.</li>
			<li>Front-End Web Developer at <a href="http://percolate.com/" target="_blank">Percolate</a> in New York, NY.</li>
			</ol>
		</div>

	</div>

	<div id="lowercontainer">

		<div id="nav">
			<ul>
				<li><a href="http://www.wellssanto.com">Home</a></li>
				<li><a href="?page=biography">Biography</a></li>
				<li><a href="?page=writings">Selected Writings</a></li>
				<div id="navwrap">
				<li><a href="/WellsSantoResume.pdf" target="_blank">Resume</a></li>
				<li><a href="/WellsSantoCV.pdf" target="_blank">CV</a></li>
				<li><a href="?page=contact">Contact</a></li>
				</div>
			</ul>
		</div>

		<?php 

			switch($_GET['page']): 
			   case 'writings': case 'biography': case 'contact':
			      include $_GET['page'] . '.htm';
			      break;
			    default: 
			      include 'main.htm';
			endswitch;

		?>

	</div>

	<div id="footer">
		<p>Copyright &copy; 2008-2015 Wells Lucas Santo. All rights reserved.</p>
		<p><i>Last Updated: 18 Jan 2015</i>
		<p><a href="#header">Return to top.</a></p>
	</div>

</body>
</html>