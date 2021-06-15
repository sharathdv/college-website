<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Sharath Institute of Technology</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-header">
		<nav>
			<a href="index.html"><img src="Images/logo.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="course.php">COURSE</a></li>
					<li><a href="blog.php">BLOG</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<h1>About Us</h1>
	</section>
	<!-----------   about us content   ----------->
	<section class="about-us">
		<div class="row">
			<div class="about-col">
				<h1>We are the world's Largest University</h1>
				<p>The University of Toronto is one of the world’s great universities, distinguished by an extraordinary depth and breadth of excellence. U of T’s global outlook and cosmopolitan location in one of the world’s great cities provide students with a transformative educational experience, equipping them with the knowledge, skills and competencies needed to navigate our rapidly changing world.</p>
				<a href="" class="hero-btn red-btn">EXPLORE NOW</a>
			</div>
			<div class="about-col">
				<img src="Images/about.jpg">
				

			</div>

		</div>
		


	</section>








 <!----------   Footer   -------->
  <section class="footer">
  	<h4>About Us</h4>
  	<p>M S Ramaiah Institute of Technology (MSRIT) was started in 1962 by Late Dr. M S Ramaiah,<br> our Founder Chairman who was a renowned visionary, philanthropist, and a pioneer in creating several landmark infrastructure projects in India.</p>
  	<div class="icons">
  		<i class="fa fa-facebook"></i>
  		<i class="fa fa-twitter"></i>
  		<i class="fa fa-instagram"></i>
  		<i class="fa fa-linkedin"></i>
  	</div>
  	<p>Made with <i class="fa fa-heart-o"></i> by SHARATH.D.V</p>
  </section>





   <!--------  JavaScript for Toggle Menu --------->
   <script type="text/javascript">
   		var navLinks = document.getElementById("navLinks"); 
   		function showMenu(){
   			navLinks.style.right = "0";
   		}
   		function hideMenu(){
   			navLinks.style.right = "-200px";
   		}
   	
   </script>

</body>
</html>
