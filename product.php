<!DOCTYPE html>
<html>
	<head>
		<title>Konga Game of Codes</title>
		<link rel="stylesheet" type="text/css" href="Assets/nivo-slider/nivo-slider.css" />
		<link rel="stylesheet" type="text/css" href="Assets/nivo-slider/themes/default/default.css" />
		<script type="text/javascript" src="Assets/nivo-slider/jquery.js"></script>
		<script type="text/javascript" src="Assets/nivo-slider/jquery.nivo.slider.js"></script>
		<style>
			.canvas{ width: 295px; height: 450px;  }
            .img_avatar{ width: 295px; height: 450px; } 
			.min-canvas{ width: 72px; height: 110.156px; margin-bottom: 3px;  margin-left: 3px;}
            .min-canvas img{ width: inherit; height: inherit; }
            #container{ width: 450px; }
            .external{width: 50px; height: 20px; border: 5px solid #ccc;/*		  border-radius: 3px;*/}
            #side-bar{list-style-type: none;  width: 80px; margin: 0px;}
			
			
			
            #side-bar > li{
                background: yellow;
                margin-bottom: 10px;
                padding: 20px;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
            }
            #side-bar li:hover{
                width: 200px;
                transition: 2.5s all;
            }
			body {
				 bottom: 0px;
				font-family: calibri;
				 height: auto;
				 left: 0px;
				 margin: auto;
				 padding: 0px;
				 right: 0px;
				 width: 100%;
				background-color: #F9FAFB;
			}	
			.top-most-header{
				background-color: #FFFFFF;
				height: 35px;
				margin-top: 0;
				width: 100%;
				margin-bottom: 15px;
				border-bottom: 1px solid #ccc;
			}
			
			.top-most-header ul{list-style-type: none;overflow: hidden;padding: 0px; margin: 0px; margin-right: 10px; padding: 8px;}
			
			.top-most-header ul >li {display: inline-block;float: right;}
			
			.top-most-header ul > li > a{text-decoration: none; color:#335C88;}
			.nav{
				height: 100px;
				width: 100%;
				
			}
			
						#icons{
	margin-bottom: 10px;
	text-align: center;
	bottom: 0px;
	width: 100%;
}
			
			#subscribe{
	text-align: center;
	width: 100%;
	padding-top: 10px;
	padding-bottom: 20px;
}

.help{
	color: #335C88;
	text-decoration: none;
}

.subscribe-text{
	width: 450px;
	height: 10px;
	border: 1px solid #335C88;
	border-radius: 3px;
	padding: 10px;
	color: #335C88;
}

.subscribe-btn{
	width: 120px;
	height: 35px;
	border: 1px solid white;
	background-color: #335C88;
	color: white;
	border-radius: 3px;
	font-family: Century Gothic;
	margin-left: 10px;
}
			
			.social{
	width: 30px;
	height: 30px;
	padding-right: 5px;
}
		
			
			.product-content{width: 100%;}
			.navigator{ background-color: #F9FAFB; height: 40px; width: 100%;  border: 1px solid #ccc;}
			.slider{ height: 450px; width: 100%;  }
			.customize{ height: 70px; width: 100%; background-color: #F9FAFB;  }
			.nav-icon{ width: 30px; height: 30px; float: right; }
			.txt-search{width: 500px; height: 30px; padding-left: 10px;}
			.search-btn{width: 100px; height: 36px; color: #ffffff; background: #335C88; border: none; font-weight: bold;}
			.txt-search:focus{border: 1px solid #335C88; }
/*			.txt-search { position: relative; width:240px; }*/
/*
			.txt-search input { border:none: background:#fff; display:block; width: 100%; box-sizing: border-box }
			.txt-search img { position: absolute; top: 2px; right: 5px }
*/
			.navigator ul { list-style-type: none; margin: 0; padding: 0; overflow: hidden;}
			.navigator li { float: left;}
			.navigator li > a, .dropbtn {display: inline-block; color: #626669; text-align: center; padding: 6px 25px; text-decoration: none; }
			.navigator li a:hover, .dropdown:hover .dropbtn { border-bottom: 2px solid #335C88;}
			.navigator li .dropdown { display: inline-block; }
			.nivoSlider { position:relative; background:url(themes/default/loading.gif) no-repeat 50% 50%; width: 100%; height:450px; z-index: -1}
			.nivoSlider img {position:absolute; width:100%; height:450px; top:0px; left:0px; display:none; }
			.nivoSlider a { border:0; display:block; }
			.customize h3{color: #626669; text-align: center;}
			.table{width: 100%; margin-bottom: 50px; margin-top: 50px; background-color: #F9FAFB;}
			.products td{width: 14%; height: 200px;}
			.products td > img{width: 100%; height: 100%; align-content: center; border: 1px solid #ccc;}
			.banner{width: 100%; height: 350px;  background-color: #F9FAFB;}
			.big-banner{width: 70%; height: inherit; float: left;  margin-right: 10px; box-shadow: 5px 5px 5px 3px rgba(0,0,0,0.3);}
			.small-banner{width: 25%; height: 170px; float: right;  margin-right: 30px; margin-bottom: 5px; box-shadow: 5px 5px 5px 3px rgba(0,0,0,0.3);}
			.dropdown-content { z-index: 2; display: none; position: absolute; background-color: #f9f9f9; min-width: 100% !important; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); height: 400px;}
			.dropdown-content a { color: black; padding: 12px 16px; text-decoration: none; display: block;text-align: left;}
			.dropdown-content a:hover {background-color: #f1f1f1}
			.dropdown:hover .dropdown-content {display: block;}
/*			.canvas-col{height: 500px; }*/
			.cat-01{width: 100%;  height: 450px;  background-color: #F9FAFB; border-top: 3px solid #ccc; margin-top: 50px; border: 1px solid #ccc;}
			.categories{width: 200px; height: 100%;  float: left;}
			.cat-banner{width: 450px; height: 100%;  float: left;}
			.cat-content{width: 599px; height: 100%; float: left; /* border: 1px solid black; */}
/*			.cat-banner img{width: 100%; height: 100%;}*/
			.cat-header{height: 80px; background-color: crimson;}
			.cat-body{height: 323px; }
			.cat-body ul{list-style-type: none;}
			.cat-body ul > li{padding: 10px; 0px; 10px; 0px;}
			.cat-body ul > li > button{background: none; border: none;}
			.cat-footer{height: 30px; background: #ccc; bottom: 0;}
			.table2 tr > td{width: 20%; height: 100%;}
			.table2 tr > td > img{width: 100%; height: 100%;}
			.table2 tbody{height: 137px;}
			.rating{width: 50%; height:50px;}
			.buy-product{width: 100%; height: 500px; margin-top: 50px;}
			.buy-product-display{width: 49%; height: 100%; border: 1px solid #ccc; background: #ffffff; margin-right: 8px; float: left;}
			.buy-product-display img{margin-top: 80px; margin-left: 80px; width: 400px; height: 300px;}
			.buy-product-description{width: 49%; height: 100%; border: 1px solid #ccc; background: #ffffff; float: right;}
			
		</style>
	</head>
	<body>
		<div class="top-most-header">
			<ul>
				<li><a href="#">Sign Up <strong>OR</strong> Login</a></li>
				<li><a href="#">Cart</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;</li>
				<li><a href="#">Order History</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;</li>
				<li><a href="#">Home</a> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;</li>
			</ul>
		</div>
		<div style="margin-left: 50px; margin-right: 50px;">
		<div class="nav">
			<input type="text" name="txt-search" placeholder="Search ..." class="txt-search"/>
			<button type="button" name="btn-search" class="search-btn">SEARCH</button>
			<img src="Assets/img/icons/Contacts_100px.png" class="nav-icon"/>
			<img src="Assets/img/icons/Add%20Shopping%20Cart_96px.png" class="nav-icon"/>
		</div>
		<div class="navigator">
			<ul>
				<li><a class="active" href="#">Home</a></li>
				<li><a href="problem/#home">Phones &amp; Tablets</a></li>
				<li><a href="problem/#home">Computers &amp; Accessories</a></li>
				<li><a href="problem/#home">Home Appliances &amp; Electronics</a></li>
				<li><a href="problem/#home">Kitchen Appliances</a></li>
				<li><a href="problem/#home">Baby , Kids &amp; Toys</a></li>
				<li class="dropdown">
					<a href="#" class="dropbtn">Other Categories</a>
<!--
					<div class="dropdown-content">
						<a href="exploitation/analysis.html">Analysis</a>
						<a href="exploitation/explore.html">Explore</a>
						<a href="exploitation/evolution.html">Evolution</a>
						<a href="exploitation/adaptive_ir.html">Adaptive IR</a>
					</div>
-->
				</li>
			</ul>
		</div>
		<div class="buy-product">
			<div class="buy-product-display">
				<img src="Assets/img/slider/side11.jpg"/>
			</div>
			<div class="buy-product-description">
				<div>
					<h2>Product Name:</h2>
					<h2>Product Description:</h2>
					<h2>Price:</h2>
					<h2>Rating</h2>
					<button type="button">Add to Cart</button><br />
				</div>
			</div>
		</div>
		<div class="product-content">
			<table class="products table" cell-spacing="15">
				<tbody>
					<tr>
						<td>
							<img src="Assets/img/slider/side11.jpg"><br />
							<span>
								<label>Product Description</label><br />
								<img src="Assets/img/icons/4-star-rating.png" class="rating"><br />
								<label>Product Price Range</label>
							</span>
						</td>
						<td>
							<img src="Assets/img/slider/side12.jpg"><br />
							<span>
								<label>Product Description</label><br />
								<img src="Assets/img/icons/3-star-rating.png" class="rating"><br />
								<label>Product Price Range</label>
							</span>
						</td>
						<td>
							<img src="Assets/img/slider/side13.jpg"><br />
							<span>
								<label>Product Description</label><br />
								<img src="Assets/img/icons/5-star-rating.png" class="rating"><br />
								<label>Product Price Range</label>
							</span>
						</td>
						<td>
							<img src="Assets/img/slider/side8.jpg"><br />
							<span>
								<label>Product Description</label><br />
								<img src="Assets/img/icons/1-star-rating.png" class="rating"><br />
								<label>Product Price Range</label>
							</span>
						<td>
							<img src="Assets/img/slider/side9.jpg"><br />
							<span>
								<label>Product Description</label><br />
								<img src="Assets/img/icons/2-star-rating.png" class="rating"><br />
								<label>Product Price Range</label>
							</span>
						</td>
						<td>
							<img src="Assets/img/slider/side10.jpg"><br />
							<span>
								<label>Product Description</label><br />
								<img src="Assets/img/icons/4-star-rating.png" class="rating"><br />
								<label>Product Price Range</label>
							</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
				<div class="banner">
			<div class="big-banner">
				<img src="Assets/img/slider/slider1.png" width="100%" height="100%">
			</div>
			<div class="small-banner"><img src="Assets/img/slider/side6.jpg" width="100%" height="100%"></div>
			<div class="small-banner"><img src="Assets/img/slider/side7.jpg" width="100%" height="100%"></div>
		</div>
<!--		<script src="Assets/js/jquery-3.1.1.min.js"></script>-->
        <script type="text/javascript" src="Assets/js/ai.js"></script>
        <script type="text/javascript" src="search.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({
				effect: 'random',
				pauseTime: 4000,
				animSpeed: 700
				});
			});
		</script>
						<div class="footer">
            <div id="subscribe">
                <form>
                    <h2 style="color: #335C88">Subscribe to our newsletter!</h2>
                    <input type="email" required="required" class="subscribe-text" placeholder="Enter your e-mail"/>
                    <button type="button" class="subscribe-btn">SUBSCRIBE</button>
                </form>
            </div>
            <hr width="95%" />
            <div id="icons">
                <a href="#"><img src="../images/twitter.png" class="social"/></a>
                <a href="#"><img src="../images/instagram.png" class="social"/></a>
                <a href="#"><img src="../images/facebook.png" class="social" /></a>
                <a href="#"><img src="../images/gplus.png" class="social" /></a>
                <a href="#"><img src="../images/pinterest.png" class="social" /></a>
                <h5 style="color:#333333;">&nbsp;&copy;2016 Copyrights. All rights reserved</h5>
				<a href="#" class="help">Contact Us</a> | <a href="#" class="help">Privacy Policy</a> | <a href="#" class="help">Terms and Conditions</a> | <a href="#" class="help">FAQ</a>
            </div>
        </div>
			</div>
		<script>
		window.fbAsyncInit = function() {
      FB.init({
        appId: "APP_ID",
        xfbml: true,
        version: "v2.6"
      });

    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) { return; }
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

  </script>
<div class="fb-messengermessageus" 
  messenger_app_id="1645220495748555" 
  page_id="1645220495748555"
  color="white"
  size="xlarge" style="position: fixed;
    bottom: 0;
    right: 0;" >
</div> 
	</body>
</html>