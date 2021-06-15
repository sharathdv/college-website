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
		<h1>Our Courses</h1>
	</section>
	<!---------  Courses ---------->
	<section class="course">
   		<h1>Courses We Offer</h1>
   		<p>I love my University, Because it's best in class.</p>
   		<div class="row">
   			<div class="course-col">
   				<h3>Intermediate</h3>
   				<p>The University of Michigan is a public research university in Ann Arbor, Michigan. Founded in 1817 in Detroit, as the Catholepistemiad, or the University of Michigania, 20 years before the territory became a state, the university is Michigan's oldest.</p>
   			</div>
   			<div class="course-col">
   				<h3>Degree</h3>
   				<p>The University of Michigan is a public research university in Ann Arbor, Michigan. Founded in 1817 in Detroit, as the Catholepistemiad, or the University of Michigania, 20 years before the territory became a state, the university is Michigan's oldest.</p>
   			</div>
   			<div class="course-col">
   				<h3>Post Graduation</h3>
   				<p>The University of Michigan is a public research university in Ann Arbor, Michigan. Founded in 1817 in Detroit, as the Catholepistemiad, or the University of Michigania, 20 years before the territory became a state, the university is Michigan's oldest.</p>
   			</div>
   		</div>
   </section>
   <!-------------  Facilities   ---------->
   <section class="facilities">
  	<h1>Our Facilities</h1>
  	<p>I love my University, Because it's best in class.</p>
  	<div class="row">
  		<div class="facilities-col">
  			<img src="Images/library.png">
  			<h3>World Class Library</h3>
  			<p>In colleges, the library occupies a prominent position and it is an important and integral part of the teaching programme.</p>
		</div>
		<div class="facilities-col">
  			<img src="Images/basketball.png">
  			<h3>Largest Play Ground</h3>
  			<p>In colleges, the library occupies a prominent position and it is an important and integral part of the teaching programme.</p>
		</div>
		<div class="facilities-col">
  			<img src="Images/cafeteria.png">
  			<h3>Tasty and Healthy Food</h3>
  			<p>In colleges, the library occupies a prominent position and it is an important and integral part of the teaching programme.</p>
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
