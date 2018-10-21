<?php
session_start();
include_once 'includes/connection.php'; ?>
<?php  
//echo $_SESSION['user_id'] ;
//die;
if(isset($_SESSION['user_id'])){
$query   = "select * from orders where user_id = {$_SESSION['user_id']}";
//echo $query ;
$result  = mysqli_query($link, $query);
$num_rows = mysqli_num_rows($result);
}
//echo $num_rows ;
//die;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
	<title>UpSkills - Education Scheduling</title>
	<meta charset="UTF-8">
	<meta name="description" content="UpSkills - Education Scheduling">
	<meta name="keywords" content="UpSkills, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
        
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/manual-style.css"/>
        <script>
    
        </script>
            
          

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body background="img/background_image.png">
	<!-- Page Preloder -->
     
	<div id="preloder">
		<div class="loader"></div>
	</div>
        
        

	<!-- Header section -->
        <header class="header-section"  style="color: black; background: rgba(0, 0, 0, 0.4);" >
            
            <div  class="container" >
                
			<div class="row" >
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/site-logo.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
                            <div class="col-lg-9 col-md-9" >
                                <a href="" class="site-btn header-btn"  id="btc">Login</a>
                                
					<nav class="main-menu" >
                                            
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="courses.html">Courses</a></li>
							<li><a href="blog.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

        
<!--	<section class="set-bg" data-setbg="img/bc.png">
		<div class="container">
			<div class="hero-text text-white">
			</div>
			
		</div>
	</section>-->
          
<div id="wrapperHeader">
    <img src="img/bc.png"   id="bc"/>
    <img src="img/pp.png" alt="bc" class="vibrate-3" id="io"  />
   </div>
<!--        <div class="thumb" style=" transform-style: preserve-3d;">
                                <a href="#" id="thumba"></a>
                           </div>-->
  

        
