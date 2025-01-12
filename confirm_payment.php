<?php

?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
	<title>Payment - PETRADENIM</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirm-payment.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
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
        		<li><a href="shop.html">Shop</a></li>
        		<li><a href="#">About Us</a></li>
        		<li><a href="login.html">Login/Register</a></li>
        		<li><a href="shopping-cart.html"><i class="fas fa-shopping-cart"></i></a></li>
      		</ul>
      		<div class="icon menu-btn">
        		<i class="fas fa-bars"></i>
      		</div>
    	</div>
  	</nav>

  	<div class="container">
  		<h1 class="text-center">PAYMENT CONFIRMATION</h1>
  		<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     		<div class="card">
         		<div class="card-header p-4">
             		<h1 class="pt-3 d-inline-block">PETRADENIM.CO</h1>

         		</div>
         	<div class="card-body">
            	<div class="row mb-4">
                	<div class="col-sm-6">
                 		<h3 class="mb-0 pt-5">Invoice #BBB10234</h3>
                 		Date: 12 Jun,2019
                 	</div>
                	<div class="col-sm-6 text-left" id="infokirim">
                    	<div class="mb-0" style="font-weight: 700;">TUJUAN PENGIRIMAN:</div>
                    	<div class="text-dark mb-0">Richson Sedjie	</div>
                    	<div>Jalan Tupai Nomor 78</div>
                    	<div>Mamajang Kota Makassar 90135</div>
                    	<div>Sulawesi Selatan</div>
                    	<div>0812 4322 4432</div>
                	</div>
             	</div>
             	<div class="table-responsive-sm">
                 	<table class="table table-striped" id="list-belanja">
                     	<thead>
                         	<tr>
                             	<th class="center">No</th>
                             	<th>Item</th>
                             	<th class="right">Price</th>
                             	<th class="center">Qty</th>
                             	<th class="right">Subtotal</th>
                         	</tr>
                     	</thead>
                     	<tbody>
                         	<tr>
                             	<td class="center">1</td>
                             	<td class="left strong">Iphone 10X</td>
                             	<td class="right" id="hargabarang">1500</td>
                             	<td class="center" id="qtybelanja">2</td>
                             	<td class="right" id="subtotalbelanja"></td>
                         	</tr>
                         	<tr>
                             	<td class="center">2</td>
                             	<td class="left">Iphone 8X</td>
                             	<td class="right" id="hargabarang">1200</td>
                             	<td class="center" id="qtybelanja">1</td>
                             	<td class="right" id="subtotalbelanja"></td>
                         	</tr>
                         	<tr>
                             	<td class="center">3</td>
                             	<td class="left">Samsung 4C</td>
                             	<td class="right" id="hargabarang">800</td>
                             	<td class="center" id="qtybelanja">3</td>
                             	<td class="right" id="subtotalbelanja"></td>
                         	</tr>
                         	<tr>
                             	<td class="center">4</td>
                             	<td class="left">Google Pixel</td>
                             	<td class="right" id="hargabarang">500</td>
                             	<td class="center" id="qtybelanja">3</td>
                             	<td class="right" id="subtotalbelanja"></td>
                         	</tr>
                     	</tbody>
                 	</table>
             	</div>
             	<div class="row">
                 	<div class="col-lg-4 col-sm-5"></div>
                 	<div class="col-lg-4 col-sm-5 ml-auto">
                    	<table class="table table-clear">
                        	<tbody>
                            	<tr>
                                	<td class="left">
                                    	<strong class="text-dark">Total Belanja</strong></td>
                                	<td class="right">
                                    	<strong class="text-dark">Rp200.000</strong>
                                	</td>
                            	</tr>
                        	</tbody>
                     	</table>
                 	</div>
             	</div>
         	</div>
         	<div class="card-footer bg-white">
            	<p class="mb-0 text-center">Pesanan Anda sudah kami terima, silakan transfer senilai Rp 200.000 ke salah satu bank dibawah ini.</p>
            	<img class="img-fluid mx-auto d-block pt-5" src="image/bca.svg" style="max-width: 40%; ">
            	<p class="mb-0 text-center pt-3">No Rek : 7970283565</p>
            	<p class="mb-0 text-center">Atas nama : Richson Sedjie</p>
        	</div>
    	</div>
	</div>
  </div>

	<footer class="page-footer mt-3">
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

  	<script>
  		$(document).ready(function(){
      		$('#list-belanja tr').ready(function() {
    			var price = $(this).find("#hargabarang").text();
    			var qty = $(this).find("#qtybelanja").text()
    			var subtotal = price * qty;
    			document.getElementById("subtotalbelanja").innerHTML = subtotal;
 			});
 		});

  	</script>

  	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  		AOS.init();
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
