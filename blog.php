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
		<h1>Our Certificate & Online Programs for 2021</h1>
	</section>
	<!-------------- Blog Page Content ------->
	<section class="blog-content">
		<div class="row">
			<div class="blog-left">
				<img src="Images/certificate.jpg">
				<h2>Our Certificate & Online Programs for 2021</h2>
				<p>Dr. M.S. Ramaiah, a visionary, educationist, industrialist and philanthropist founded “Gokula Education Foundation (GEF)” in the year 1962 and under the aegis of this foundation was born “M.S. Ramaiah Institute of Technology (MSRIT)” in the same year. Dr. M.S. Ramaiah, a successful entrepreneur by the end of the first decade after independence, realized that the socio-political </p>
				<br>
				<p>economic edifice of this country must be built on the solid base of education. At that time, the opportunities for professional education, be it in Engineering field or in Medical field, were too limited to fulfill the aspirations of the large number of bright and talented students of this country. It was in this context that Dr. M.S. Ramaiah established the GEF and under its aegis MSRIT, a pioneering effort in the area of private, self-financed technical education system. His vision, ideals and goals, which were implicit in the functioning of GEF, are reflected in the articulation of the mission of GEF. Today eighteen institutions, including MSRIT, are successfully running under the umbrella of GEF.</p>
				<br>
				<p>economic edifice of this country must be built on the solid base of education. At that time, the opportunities for professional education, be it in Engineering field or in Medical field, were too limited to fulfill the aspirations of the large number of bright and talented students of this country. It was in this context that Dr. M.S. Ramaiah established the GEF and under its aegis MSRIT, a pioneering effort in the area of private, self-financed technical education system. His vision, ideals and goals, which were implicit in the functioning of GEF, are reflected in the articulation of the mission of GEF. Today eighteen institutions, including MSRIT, are successfully running under the umbrella of GEF.</p>
				<br>
				<p>economic edifice of this country must be built on the solid base of education. At that time, the opportunities for professional education, be it in Engineering field or in Medical field, were too limited to fulfill the aspirations of the large number of bright and talented students of this country. It was in this context that Dr. M.S. Ramaiah established the GEF and under its aegis MSRIT, a pioneering effort in the area of private, self-financed technical education system. His vision, ideals and goals, which were implicit in the functioning of GEF, are reflected in the articulation of the mission of GEF. Today eighteen institutions, including MSRIT, are successfully running under the umbrella of GEF.</p>
				<div class="comment-box">
					<h3>Leave a comment</h3>
					<form class="comment-form">
						<input type="text" placeholder="Enter Name...">
						<input type="email" placeholder="Enter email...">
						<textarea rows="5" placeholder="Your Comment"></textarea>
						<button type="submit" class="hero-btn red-btn">POST COMMENT</button>
					</form>

				</div>

			</div>
			<div class="blog-right">
				<h3>Post Categories</h3>
				<div>
					<span>Business Analytics</span>
					<span>21</span>
				</div>
				<div>
					<span>Data Science</span>
					<span>28</span>
				</div>
				<div>
					<span>Machine Learning</span>
					<span>15</span>
				</div>
				<div>
					<span>Computer Science</span>
					<span>34</span>
				</div>
				<div>
					<span>AutoCAD</span>
					<span>42</span>
				</div>
				<div>
					<span>Journalism</span>
					<span>22</span>
				</div>
				<div>
					<span>Commerce</span>
					<span>30</span>
				</div>
				

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
