<?php session_start(); ?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
	<title>PETRADENIM - HIGH QUALITY DENIM</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  <title>Responsive Sticky Navbar | CodingNepal</title> -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
	<nav class="navibar">
    	<div class="content">
      		<div class="logo">
        		<a href="index.php">PETRADENIM</a>
      		</div>
      		<ul class="menu-list">
        		<div class="icon cancel-btn">
          			<i class="fas fa-times"></i>
        		</div>
        		<li><a href="shop.php">Shop</a></li>
        		<li><a href="about_us.html">About Us</a></li>
						<?php if (!isset($_SESSION['name'])) { ?>
        			<li><a href="login.php">Login/Register</a></li>
						<?php } else { ?>
							<li><a href="/rucas.co/services/global/logout.php"><?= $_SESSION['name']; ?></a></li>
						<?php } ?>
        		<li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
      		</ul>
      		<div class="icon menu-btn">
        		<i class="fas fa-bars"></i>
      		</div>
    	</div>
  	</nav>
  <div class="banner">
  		<button class="btn discover-btn">DISCOVER  MORE</button>
  </div>

  	<div class="container-fluid pb-3">
  		<h2 class="text-center pt-2">Quality Denim is our number one priorities</h2>
  		<h3 class="border-top border-primary"></h3>
  		<div class="row" id="rowgal">
  			<div class="column">
  				<img data-aos="zoom-in-right" src="image/col1.jpg">
  				<img data-aos="zoom-in-right" src="image/col2.jpg">
  				<img data-aos="zoom-in-right" src="image/col4.jpg">

  			</div>
  			<div class="column">
  				<img data-aos="fade-down"
     data-aos-duration="3000" src="image/col3.jpg">
  				<img data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500" src="image/col9.jpg">
  				<!-- <img src="image/col8.jpg"> -->

  			</div>
  			<div class="column">
  				<img data-aos="zoom-in-left" src="image/col7.jpg">
  				<!-- <img src="image/col6.jpg"> -->
  				<img data-aos="zoom-in-left" src="image/col5.jpg">

  			</div>
  		</div>
  	</div>

    <div data-aos="zoom-out-up" class="view mb-4" style="background-image: url('image/a.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; color: white; height: 32vh;width: 80%; margin-left: 8.4%;">
    	<div class="mask rgba-black-light align-items-center">
    		<div class="container">
                <div class="row">
                	<div class="col-md-12 mb-4 white-text text-center pt-3">
                		<h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>NEW COLLECTION</strong></h1>
                		<hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                		<h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>FALL / WINTER 2020</strong></h5>
                		<button type="button" class="btn btn-dark">
                			<a href="shop.php" style="color: white;">SHOP NOW</a>
                		</button>
                	</div>
                </div>
            </div>
        </div>
    </div>

	<footer class="page-footer">
        <div class="footer-copyright text-left py-5 ml-5 mr-5">© 2020 Copyright:
            <a href="https://rucas.co/" target="#">PETRADENIM.CO</a>
            <a href="https://instagram.com/rucas.co">
            	<i class="fab fa-instagram float-right"></i>
            </a>
        </div>

    </footer>

  	<script>
    	const body = document.querySelector("body");
    	const navbar = document.querySelector(".navibar");
    	const menuBtn = document.querySelector(".menu-btn");
    	const cancelBtn = document.querySelector(".cancel-btn");
    	menuBtn.onclick = ()=>{
      	navbar.classList.add("show");
      	menuBtn.classList.add("hide");
      	body.classList.add("disabled");
    	}
    	cancelBtn.onclick = ()=>{
      	body.classList.remove("disabled");
      	navbar.classList.remove("show");
      	menuBtn.classList.remove("hide");
    	}
    	window.onscroll = ()=>{
      	this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    	}
  	</script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  		AOS.init();
			$(document).ready(function() {
				$(".discover-btn").click(function() {
					window.location.href = "shop.php";
				});
			});
	</script>
</body>
</html>
