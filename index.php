<?php 
  require_once('config.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SukaKode &mdash; Tukang Ngoding</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="SukaKode adalah Team yang membuat project website back-end dan front-end sederhana, Order Kami !" />
	<meta name="keywords" content="jasa program, jasa bikin web, laravel, php, sukakode, jasa bikin program, jasa buat program, jual program, beli program" />
	<meta name="author" content="sukakode.com" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
  -->

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=$base_url?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=$base_url?>/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=$base_url?>/css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=$base_url?>/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?=$base_url?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?=$base_url?>/js/respond.min.js"></script>
	<![endif]-->

  <style>
    #fh5co-header .display-tc h1 {
      color: #5a5569 !important;
    }
    #fh5co-header .display-tc h1 span:after, .fh5co-cover .display-tc h1 span:after {
      background: #6fb0ae !important;
    }
    #fh5co-header .display-tc h1 span:before, .fh5co-cover .display-tc h1 span:before {
      background: #b06f6f !important;
    }
    ::selection {
      color: #fff;
      background: #d1acac;
    }
    #fh5co-features {
      background: #a8c5c7;
    }

    #fh5co-features .feature-left .icon i {
      color: #a8c5c7 !important;
    }
    
    .fh5co-bg-dark {
      background: #b06f6f;
    }
  </style>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">	
    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(<?=$base_url?>/images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay" style="background: #dddddd !important;"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="display-t js-fullheight">
              <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                <div class="profile-thumb" style="background: url(<?=$base_url?>/images/SK.png);"></div>
                <h1><span>Suka Kode</span></h1>
                <h3><span style="color: #5a5569 !important;">Web Developer Team</span></h3>
                <p>
                  <ul class="fh5co-social-icons">
                    <li><a href="#"><i style="color:#3882ca !important;" class="icon-twitter2"></i></a></li>
                    <li><a href="#"><i style="color:#3882ca !important;" class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i style="color:#3882ca !important;" class="icon-instagram2"></i></a></li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div id="fh5co-about" class="animate-box">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Tentang Kita</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2>Haiii !</h2>
            <p>Pokok nya kita menyediakan program, bikin program website, jual yang udah jadi, bikin dari awal, nambahin fitur, dll. Pokoknya udah gitu aja...</p>
            <p>
              <ul class="fh5co-social-icons">
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                <li><a href="#"><i class="icon-facebook3"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
	

    <!-- <div id="fh5co-features" class="animate-box">
      <div class="container">
        <div class="services-padding">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
              <h2>My Services</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 text-center">
              <div class="feature-left">
                <span class="icon">
                  <i class="icon-paintbrush"></i>
                </span>
                <div class="feature-copy">
                  <h3>Web Design</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 text-center">
              <div class="feature-left">
                <span class="icon">
                  <i class="icon-briefcase"></i>
                </span>
                <div class="feature-copy">
                  <h3>Branding</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                </div>
              </div>

            </div>
            <div class="col-md-4 text-center">
              <div class="feature-left">
                <span class="icon">
                  <i class="icon-search"></i>
                </span>
                <div class="feature-copy">
                  <h3>Analytics</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-4 text-center">

              <div class="feature-left">
                <span class="icon">
                  <i class="icon-bargraph"></i>
                </span>
                <div class="feature-copy">
                  <h3>Web Developent</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                </div>
              </div>

            </div>

            <div class="col-md-4 text-center">
              <div class="feature-left">
                <span class="icon">
                  <i class="icon-genius"></i>
                </span>
                <div class="feature-copy">
                  <h3>Web Marketing</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                </div>
              </div>

            </div>
            <div class="col-md-4 text-center">
              <div class="feature-left">
                <span class="icon">
                  <i class="icon-chat"></i>
                </span>
                <div class="feature-copy">
                  <h3>Support</h3>
                  <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div id="fh5co-skills" class="animate-box">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Skills</h2>
          </div>
        </div>
        <div class="row row-pb-md">
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="chart" data-percent="95"><span><strong>HTML5</strong>95%</span></div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="chart" data-percent="93"><span><strong>CSS3</strong>93%</span></div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="chart" data-percent="90"><span><strong>jQuery</strong>90%</span></div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="chart" data-percent="89"><span><strong>PHP</strong>89%</span></div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="chart" data-percent="85"><span><strong>MySQL</strong>85%</span></div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="chart" data-percent="90"><span><strong>AngularJS</strong>90%</span></div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="chart" data-percent="85"><span><strong>Ruby</strong>85%</span></div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="chart" data-percent="90"><span><strong>Java</strong>90%</span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-wrap">
              <h3><span class="name-left">HTML5/CSS3</span><span class="value-right">95%</span></h3>
              <div class="progress">
                <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                </div>
              </div>
            </div>
            <div class="progress-wrap">
              <h3><span class="name-left">WordPress</span><span class="value-right">90%</span></h3>
              <div class="progress">
                <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                </div>
              </div>
            </div>
            <div class="progress-wrap">
              <h3><span class="name-left">PHP</span><span class="value-right">80%</span></h3>
              <div class="progress">
                <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                </div>
              </div>
            </div>
            <div class="progress-wrap">
              <h3><span class="name-left">Java</span><span class="value-right">85%</span></h3>
              <div class="progress">
                <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-wrap">
              <h3><span class="name-left">Design</span><span class="value-right">100%</span></h3>
              <div class="progress">
                <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                </div>
              </div>
            </div>
            <div class="progress-wrap">
              <h3><span class="name-left">Ruby</span><span class="value-right">70%</span></h3>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar"
                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                </div>
              </div>
            </div>
            <div class="progress-wrap">
              <h3><span class="name-left">Python</span><span class="value-right">85%</span></h3>
              <div class="progress">
                <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                </div>
              </div>
            </div>
            <div class="progress-wrap">
              <h3><span class="name-left">jQuery</span><span class="value-right">75%</span></h3>
              <div class="progress">
                <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div id="fh5co-work" class="fh5co-bg-dark">
      <div class="container">
        <div class="row animate-box">
          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Projects</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 text-center col-padding animate-box">
            <a href="#" class="work" style="background-image: url(<?=$base_url?>/images/portfolio-1.jpg);">
              <div class="desc">
                <h3>Project Name</h3>
                <span>Illustration</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 text-center col-padding animate-box">
            <a href="#" class="work" style="background-image: url(<?=$base_url?>/images/portfolio-2.jpg);">
              <div class="desc">
                <h3>Project Name</h3>
                <span>Brading</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 text-center col-padding animate-box">
            <a href="#" class="work" style="background-image: url(<?=$base_url?>/images/portfolio-3.jpg);">
              <div class="desc">
                <h3>Project Name</h3>
                <span>Illustration</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 text-center col-padding animate-box">
            <a href="#" class="work" style="background-image: url(<?=$base_url?>/images/portfolio-4.jpg);">
              <div class="desc">
                <h3>Project Name</h3>
                <span>Design</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 text-center col-padding animate-box">
            <a href="#" class="work" style="background-image: url(<?=$base_url?>/images/portfolio-5.jpg);">
              <div class="desc">
                <h3>Project Name</h3>
                <span>Website</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 text-center col-padding animate-box">
            <a href="#" class="work" style="background-image: url(<?=$base_url?>/images/portfolio-6.jpg);">
              <div class="desc">
                <h3>Project Name</h3>
                <span>Illustration</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 text-center col-padding animate-box">
            <a href="#" class="work" style="background-image: url(<?=$base_url?>/images/portfolio-7.jpg);">
              <div class="desc">
                <h3>Project Name</h3>
                <span>Brading</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 text-center col-padding animate-box">
            <a href="#" class="work" style="background-image: url(<?=$base_url?>/images/portfolio-8.jpg);">
              <div class="desc">
                <h3>Project Name</h3>
                <span>Illustration</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- <div id="fh5co-started" class="fh5co-bg-dark">
      <div class="overlay"></div>
      <div class="container">
        <div class="row animate-box">
          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Hire Me!</h2>
            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
            <p><a href="#" class="btn btn-default btn-lg">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div id="fh5co-consult">
      <div class="video fh5co-video" style="background-image: url(<?=$base_url?>/images/cover_bg_1.jpg);">
        <div class="overlay"></div>
      </div>
      <div class="choose animate-box">
        <h2>Contact</h2>
        <form action="#">
          <div class="row form-group">
            <div class="col-md-6">
              <input type="text" id="fname" class="form-control" placeholder="Your firstname">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6">
              <input type="text" id="lname" class="form-control" placeholder="Your lastname">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="text" id="email" class="form-control" placeholder="Your email address">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary">
          </div>

        </form>	
      </div>
    </div> -->
	</div>
	
	<div id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-right">
					<p>
            &copy; 2021 All Rights Reserved
            <br>
            <a href="https://www.sukakode.com" target="_blank">www.sukakode.com</a>
          </p>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?=$base_url?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=$base_url?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=$base_url?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=$base_url?>/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?=$base_url?>/js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src="<?=$base_url?>/js/jquery.easypiechart.min.js"></script>
	
	<!-- Main -->
	<script src="<?=$base_url?>/js/main.js"></script>

	</body>
</html>

