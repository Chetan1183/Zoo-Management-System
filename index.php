<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Zoo Management System | Home Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
		<?php include_once('includes/header.php');?>
			<div class="header-banner">
				<div class="container">
					<div class="head-banner">
						<h3>Visit to a Zoo</h3>
						<p> Pune Municipal Corporation established Peshwe Park Zoo at the foothills of Parwati in 1953 where the Peshwe had their private Menagerie. The zoo had been established on a limited land of around 7 acres where the animals used to be housed and displayed to the visitors in concrete cages behind iron bars. Later after 1992, the zoos had to transform from the meagre menagerie to the scientific wildlife conservation centre. To develop a zoo which will fulfil the objectives of naturalistic animal housing, conservation breeding, wildlife conservation education and research a new site at Katraj having a land area of 130 acres was selected and development work was initiated in 1996. The new zoo was inaugurated on 14th March 1999 and renamed Rajiv Gandhi Zoological Park and Wildlife Research Centre.>
					</div>
					<div class="banner-grids">
						<div class="col-md-6 banner-grid">
							<h4>This week's featured Animal: </h4>
							<h4> Common myna.</h4>
						</div>
						<div class="col-md-6 banner-grid">
						<h4>Description</h4>
							<p> Mynas are medium-sized passerines with strong feet. Their flight is strong and direct, and they are gregarious. Their preferred habitat is fairly open country, and they eat insects and fruit. Plumage is typically dark, often brown, although some species have yellow head ornaments..</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--header-->
			<!--welcome-->
			<div class="content">
				<div class="welcome">
					<div class="container">
						<h2>welcome to zoo planet</h2>
							<div class="welcome-grids">
								
								<?php 
 $query=mysqli_query($con,"select * from tblanimal order by rand() limit 4");
 while ($row=mysqli_fetch_array($query)) {
 ?>
								<div class="col-md-3 welcome-grid" >
									<img src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt=" " class="img-responsive" />
									<div class="wel-info">
										<h4><a href="animal-detail.php?anid=<?php echo $row['ID'];?>"><?php echo $row['AnimalName'];?>(<?php echo $row['Breed'];?>)</a></h4>
										<p><?php echo substr($row['Description'],0,100);?>.</p>
									</div>
								</div><?php }?>
								<br>
								<div class="clearfix"></div>
							</div>
					</div>
				</div>
			<!--welcome-->
			
				<!--animals-->
					<div class="animals">
						<div class="container">
							<h3>animals</h3>
							<div class="clients">
								<ul id="flexiselDemo3">
									<?php 
 $query=mysqli_query($con,"select * from tblanimal");
 while ($row=mysqli_fetch_array($query)) {
 ?>
									<li><img src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt=" " class="img-responsive" /></li><?php }?>
								</ul>
									<script type="text/javascript">
								$(window).load(function() {
									
								  $("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 1
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 2
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									});
								</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--models-->
		
				
						<!--events-->
						<!--specials-->
				 <?php include_once('includes/special.php');?>
			</div>
			<!--footer-->
			<?php include_once('includes/footer.php');?>
</body>
</html>
