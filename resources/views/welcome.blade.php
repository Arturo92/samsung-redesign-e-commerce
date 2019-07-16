<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Samsung</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #wrapper {
            	width: 100%;
            }

            #nav-bar-holder {
            	width:auto;
            	text-align: center;
            }

            #logo {
            	background-image: url("images/logo.png");
            }
	        #dropdownMenuLink {
	        	margin-top: 4px;
	        	background-color: inherit;
	        	color:inherit;
	        	border: transparent solid 0;
	        	font-size:12px;
	        }

	        #search {
	        	background-image: url("images/search.png");
	        	background-size: contain;
	        	border: transparent solid 0;
	        	background-repeat: no-repeat;
	        	height:auto;
	        	background-position: center;
	        	width: auto;
	        }

	        #cart {
	        	background-image: url("images/cart.png");
	        	background-size: contain;
	        	border: transparent solid 0;
	        	background-repeat: no-repeat;
	        	height:auto;
	        	background-position: center;
	        	width: auto;
	        }

	        #account {
	        	background-image: url("images/account.png");
	        	background-size: contain;
	        	border: transparent solid 0;
	        	background-repeat: no-repeat;
	        	height:auto;
	        	background-position: center;
	        	width: auto;
	        }

	        #carouselExampleSlidesOnly{
	        	height:600px;
	        }

	        #caption {
	        	margin-bottom: 25%;
	        }

	        #caption h1 {
	        	color:black;
	        }

	        #caption p {
	        	color:black;
	        }

	        #caption a {
	        	color:black;
	        	margin-right: 6px;
	        }

	        #caption button {
	        	color:black;
	        	background-color: transparent;
	        	border: black solid 0.5px;
	        	padding-left:20px;
	        	padding-right: 20px;
	        	padding-top:10px;
	        	padding-bottom: 10px;

	        }

	         #caption2 {
	        	margin-bottom: 25%;
	        	margin-left: 20%;
	        	width:100%;
	        }

	        #caption2 h1 {
	        	color:white;
	        }

	        #caption2 p {
	        	color:white;
	        }

	        #caption2 a {
	        	color:white;
	        	margin-right: 6px;
	        }

	        #caption2 button {
	        	color:white;
	        	background-color: transparent;
	        	border: white solid 0.5px;
	        	padding-left:20px;
	        	padding-right: 20px;
	        	padding-top:10px;
	        	padding-bottom: 10px;

	        }

	        #caption3 {
	        	margin-bottom: 10%;
	        	margin-right: 50%;
	        }

	        #caption3 h1 {
	        	color:black;
	        }

	        #caption3 p {
	        	color:black;
	        }

	        #caption3 a {
	        	color:black;
	        	margin-right: 6px;
	        }

	        #caption3 button {
	        	color:black;
	        	background-color: transparent;
	        	border: black solid 0.5px;
	        	padding-left:20px;
	        	padding-right: 20px;
	        	padding-top:10px;
	        	padding-bottom: 10px;

	        }

	        #caption4 {
	        	margin-bottom: 10%;
	        	margin-right: 50%;
	        }

	        #caption4 h1 {
	        	color:black;
	        }

	        #caption4 p {
	        	color:black;
	        }

	        #caption4 a {
	        	color:black;
	        	margin-right: 6px;
	        }

	        #caption4 button {
	        	color:black;
	        	background-color: transparent;
	        	border: black solid 0.5px;
	        	padding-left:20px;
	        	padding-right: 20px;
	        	padding-top:10px;
	        	padding-bottom: 10px;

	        }

	         #caption5 {
	        	margin-bottom: 25%;
	        	margin-right: 35%;
	        }

	        #caption5 h1 {
	        	color:black;
	        }

	        #caption5 p {
	        	color:black;
	        }

	        #caption5 a {
	        	color:black;
	        	margin-right: 6px;
	        }

	        #caption5 button {
	        	color:black;
	        	background-color: transparent;
	        	border: black solid 0.5px;
	        	padding-left:20px;
	        	padding-right: 20px;
	        	padding-top:10px;
	        	padding-bottom: 10px;
	        }

	        #content-1 {
	        	width: 100%;
	        }
	        #content-1-holder {
	        	/*padding-left: 30%;
	        	padding-right: 30%;*/
	        	padding-top: 5%;
	        }

	        .content-images {
	        	margin-top: 10%;
	        }

	        #footerbtn {
	        	height: 45px;
	        }
        </style>
    </head>
    <body>
    	<div id="wrapper">
    		<div id="nav-bar-holder">
    			<nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" id="logo" href="#"></a>
                    <img src="{{ asset('images/logo.png') }}" height="40px" width="100px">

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" style="margin-left:4px;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <b>MOBILE</b>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    TV HOME & THEATER
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    COMPUTING
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    APPLIANCES & SMART HOME
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OFFERS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    EXPOLORE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    SUPPORT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    BUSINESS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                        </li>
              <div style="width:auto;">
                <div style="width: 100%;">
                <form style="float:right;" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0" id="search" type="submit"></button>
                <button class="btn my-2 my-sm-0" id="cart" type="button"></button>
                <button class="btn my-2 my-sm-0" id="account" type="button"></button>
                </form>
              </div>
              </div>
  </div>
</nav>
</div>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img height="601px" src="{{ asset('images/galaxys10.jpg') }}" class="d-block w-100" alt="...">
        <div id="caption" class="carousel-caption d-none d-md-block">
          <h1>Galaxy S 10</h1>
          <p>Do more, do it better and do it faster with the next generation of Samsung Galaxy, including our first 5-G ready device.</p>
          <a href="">Learn more</a>
          <button id="cta" type="button">Buy Now</button>
        </div>
    </div>
    <div class="carousel-item">
      <img height="601px" src="{{ asset('images/qled8k2.jpg') }}" class="d-block w-100" alt="...">
      <div id="caption2" class="carousel-caption d-none d-md-block">
          <h1>QLED 8K</h1>
          <p>High Defenition Redifined</p>
          <a href="">Learn more</a>
          <button id="cta" type="button">Buy Now</button>
        </div>
    </div>
    <div class="carousel-item">
    	<div class="d-block w100">
      <img height="600px" src="{{ asset('images/kitchen.jpg') }}" class="d-block w-100" alt="...">
      <div id="caption3" class="carousel-caption d-none d-md-block">
          <h1>Tucson Stainless Steel Appliances</h1>
          <p>Our Newest design-forward finish is elagant and versitile, empowring you to create your dream kitchen.</p>
          <a href="">Learn more</a>
          <button id="cta" type="button">Shop Now</button>
        </div>
    </div>
</div>
<div class="carousel-item">
    <div class="d-block w100">
      <img height="600px" src="{{ asset('images/space.jpg') }}" class="d-block w-100" alt="...">
      <div id="caption4" class="carousel-caption d-none d-md-block">
          <h1>Reclaim Your Space</h1>
          <p>The Space Monitor Lives Up To Its Name By Helping You Increase Your Usable Desk Space Significantly Up To 40% Compared To Other Monitors.</p>
          <a href="">Learn more</a>
          <button id="cta" type="button">Buy Now</button>
        </div>
    </div>
</div>
<div class="carousel-item">
    <div class="d-block w100">
      <img height="600px" src="{{ asset('images/unpacked.webp') }}" class="d-block w-100" alt="...">
      <div id="caption4" class="carousel-caption d-none d-md-block">
          <h1>Galaxy Unpacked</h1>
          <p>Watch The Live Stream Here On August 7th, 2019 4PM EST | 1PM PST</p>
          <button id="cta" type="button">Sign Up</button>
        </div>
    </div>
</div>

<div class="carousel-item">
      <img height="600px" src="{{ asset('images/ecosystem2.png') }}" class="d-block w-100" alt="...">
      <div id="caption5" class="carousel-caption d-none d-md-block">
          <h1>Seamlessly Connect Your Galaxy</h1>
          <p>Elevate Your Life By Unlocking The Power Of A Truly Connected Galaxy Ecosystem.</p>
          <button id="cta" type="button">Explore</button>
        </div>
</div>
      <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <h1 style="text-align: center; margin-top: 10%;">Next Generation Galaxy</h1>
    <div class="card" style="width: 49%; float: left; height: auto;">
  <img height="360px;" src="{{ asset('images/switch.webp') }}" class="card-img-top" alt="...">
  <div style="text-align: center; height: 125px;" class="card-body">
    <h3 style="color:black;" class="card-text">Switch From Galaxy Note9 to Galaxy S10 and Save Up To $300.</h3>
  </div>
</div>

<div class="card" style="width: 49%; float:right; height: auto;">
  <img height="360px;" src="{{ asset('images/5g.webp') }}" class="card-img-top" alt="...">
  <div style="text-align: center; height: 125px;" class="card-body">
    <h3 style="color:black;" class="card-text">What is 5G?</h3>
    <br/>
  </div>
</div>

    <div style="width: 100%; height: auto;">
    	<div style="width: 100%; text-align: center;">
	<video width="600px" height="355px" controls>
  <source src="{{ asset('images/video.mp4' )}}" type="video/mp4">
  	Your browser does not support the video tag.
</video>
<div style="text-align: center;" class="card-body">
    <h3 style="color:black;" class="card-text">Wireless PowerShare</h3>
 </div>
</div>
</div>

    <div id="content-2">
    	<div id="content-2-holder">
    		<div id="row-1">
    			<h1 style="text-align: center; margin-top: 10%;">Explore</h1>
    <div class="card" style="width: 49%; float: left;">
  <img height="360px;" src="{{ asset('images/content2right.jpg') }}" class="card-img-top" alt="...">
  <div style="text-align: center;" class="card-body">
    <h3 style="color:black;" class="card-text">Samsung Experince Store NYC LA</h3>
    <br/>
  </div>
</div>

<div class="card" style="width: 49%; float:right;">
  <img height="360px;" src="{{ asset('images/content2left.jpg') }}" class="card-img-top" alt="...">
  <div style="text-align: center;" class="card-body">
    <h3 style="color:black;" class="card-text">Productivity How 5G Will Change Your Life</h3>
    <br/>
  </div>
</div>
    		</div>
    		<div id="row-2">
    <div class="card" style="width: 49%; float: left;">
  <img height="360px;" src="{{ asset('images/qled8k.jpg') }}" class="card-img-top" alt="...">
  <div style="text-align: center; height: 125px;" class="card-body">
    <h3 style="color:black;" class="card-text">Samsung Within TV Is Making History Again</h3>
    <br/>
  </div>
</div>

<div class="card" style="width: 49%; float:right;">
  <img height="360px;" src="{{ asset('images/nbc.jpg') }}" class="card-img-top" alt="...">
  <div style="text-align: center; height: 125px;" class="card-body">
    <h3 style="color:black;" class="card-text">Photography How To Film Broadcast Ready On Your Phone</h3>
  </div>
</div>
    		</div>
    	</div>
    </div>

    <div class="text-center" style="width: 100%;">
    	<div style="width: auto;">
    <h2 style="text-align: center; margin-top: 80%;">Follow Us</h2>
<div style="height: 350px; margin-top: 10%; text-align: center;" id="btn-toolbar-holder">
<div class="btn-toolbar" style="text-align: center;" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2 rounded mx-auto d-block" style="text-align: center; width: 100%;" role="group" aria-label="First group">
    <img src="{{ asset('images/fb.png')}}" id="footerbtn">
    <img src="{{ asset('images/twitter.png')}}" id="footerbtn">
    <img src="{{ asset('images/ig.png')}}" id="footerbtn">
    <img src="{{ asset('images/youtube.png')}}" id="footerbtn">
    <img src="{{ asset('images/mail.png')}}" id="footerbtn">
    <img src="{{ asset('images/rss.png')}}" style="margin-left: 1%;" id="footerbtn">
  </div>
</div>
</div>
</div>
</div>


    <p style="text-align: center;">
    	ᶿFor a limited time only, on Samsung.com/Shop Samsung App, pre-order or purchase a new qualifying Galaxy device (“Qualifying Purchase”), send in your qualifying trade-in device to Samsung through the Samsung Trade-In Program, and if Samsung determines your trade-in device meets all eligibility requirements, you will receive a trade-in credit specific to your qualifying trade-in device to apply toward your Qualifying Purchase.Show More
    </p>
    <p style="text-align: center;">
    	+ Must be an eligible legal resident of the 50 US/DC & at least 18 years old to participate. Show More
    </p>
    <p style="text-align: center;">
    	± Must be an eligible legal resident of the 50 US/DC & at least 18 years old to participate.Show More
    </p>
    <p style="text-align: center;">
    	‡ Must be an eligible legal resident of the 50 US/DC & at least 18 years old to participate.Show More
    </p>
    <p style="text-align: center;">
    	©2019 Samsung Electronics America, Inc. Samsung, Galaxy S and Shop Samsung are all trademarks of Samsung Electronics Co., Ltd.Show More
    </p>
    <p style="text-align: center;">
    	50 U.S./D.C. only. Additional limitations apply. Click here for full terms and condition
    </p>
    <div id="footer">
    	<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Shop</h5>
      <a href="" class="card-text">Phones</a>
      <br/>
      <a href="" class="card-text">Wearables</a>
      <br/>
      <a href="" class="card-text">TV & Home Theater</a>
      <br/>
      <a href="" class="card-text">Computing</a>
      <br/>
      <a href="" class="card-text">Home Appliances</a>
      <br/>
      <a href="" class="card-text">Smart Home</a>
      <br/>
      <a href="" class="card-text">Samsung Experience Store</a>
      <br/>
      <a href="" class="card-text">Shop Refurbished</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Support</h5>
      <a href="" class="card-text">Contact Us</a>
      <br/>
      <a href="" class="card-text">Product Support</a>
      <br/>
      <a href="" class="card-text">Order Support</a>
      <br/>
      <a href="" class="card-text">Your Account</a>
      <br/>
      <a href="" class="card-text">Register Your Product</a>
      <br/>
      <a href="" class="card-text">Samsung Community</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">OFFERS</h5>
      <a href="" class="card-text">Offers</a>
      <br/>
<a href="" class="card-text">Samsung Rewards</a>
      <br/>
      <a href="" class="card-text">Student & Educator Discounts</a>
      <br/>
      <a href="" class="card-text">Governement Discoounts</a>
      <br/>
      <a href="" class="card-text">Military Discounts</a>
      <br/>
      <a href="" class="card-text">Employee Discounts</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">About Us</h5>
      <a href="" class="card-text">About Samsung</a>
      <br/>
  <a href="" class="card-text">Explore</a>
      <br/>
<a href="" class="card-text">Careers</a>
      <br/>
      <a href="" class="card-text">Newsroom</a>
      <br/>
      <a href="" class="card-text">Investor Relations</a>
      <br/>
      <a href="" class="card-text">Responsible Recycling</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">FOR BUSINESS</h5>
       <a href="" class="card-text">Business Products & Solutions</a>
      <br/>
      <a href="" class="card-text">Custom Home Integration</a>
    </div>
  </div>
</div>
<div style="text-align: center; background-color: darkblue; color:white; padding-top: 1.5%; padding-bottom: 1.5%;" id="footer-bottom">
    	USA/English Privacy Legal Accessibility Help Sitemap
    </div>
</div>

    </div>
                </div>
    		</div>
    </body>
</html>
