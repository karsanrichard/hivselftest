<?php $assets_url = $this->config->item('assets_url'); ?>

<html lang="en-US" class="js flexbox no-flexboxtweener skrollr skrollr-desktop"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HIV Self Test :: Home</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:700%7CUbuntu:400,500,700,400italic&amp;subset=latin" type="text/css" media="all">
<link rel="stylesheet" href="<?= @$assets_url; ?>font-icons/fontello/css/apalodi-fontello.css" type="text/css" media="all">
<link rel="stylesheet" href="<?= @$assets_url; ?>css/style.css" type="text/css" media="all">
<?= @$page_css; ?>
<link rel="stylesheet" href="<?= @$assets_url; ?>css/style-custom.css" type="text/css" media="all">
<script type="text/javascript" src="<?= @$assets_url; ?>js/vendor/jquery.js"></script>
<script type="text/javascript" src="<?= @$assets_url; ?>js/vendor/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?= @$assets_url; ?>js/vendor/modernizr.min.js"></script>


<style type="text/css">
.aslider-home-modern .aslider-swiper-wrapper{min-height:95vh}.aslider-home-modern{background-color:#28353D}.aslider-home-modern .aslider-preloader-4{background-color:#9373DE}.aslider-home-modern .aslider-preloader-4::before{background-color:#28353D}.aslider-home-modern .aslider-no-slides{color:#9373DE}.aslider-home-modern .aslider-content{max-width:1180px}

.aslider-home-modern .aslider-slide-0 .aslider-content-inner{max-width:700px}.aslider-home-modern .aslider-slide-0:not(.has-video) .aslider-media{background-image:url("<?= @$assets_url; ?>img/banners/banner1.png");background-position:center center;background-size:cover;background-repeat:no-repeat}.aslider-home-modern .aslider-slide-0 .aslider-media-overlay{background-color:rgba(147,115,222,0)}.aslider-home-modern .aslider-slide-0 .aslider-button-primary{background-color:#fff;border-color:#fff;color:#9373DE}.aslider-home-modern .aslider-slide-0 .aslider-button-primary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-0 .aslider-button-primary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-0 .aslider-button-secondary{background-color:rgba(255,255,255,0);border-color:#fff;color:#fff}.aslider-home-modern .aslider-slide-0 .aslider-button-secondary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-0 .aslider-button-secondary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-0 .aslider-title{color:#fff}.aslider-home-modern .aslider-slide-0 .aslider-subtitle{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-0 .aslider-description{color:#fff}.aslider-home-modern .aslider-slide-0 .aslider-content em{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-0 .aslider-content a:not(.button){border-color:rgba(255,255,255,.1)}.aslider-home-modern .aslider-slide-0 .aslider-content a:not(.button):hover{background-color:rgba(255,255,255,.1)}


.aslider-home-modern .aslider-slide-1 .aslider-content-inner{max-width:700px}.aslider-home-modern .aslider-slide-1:not(.has-video) .aslider-media{background-image:url("<?= @$assets_url; ?>img/banners/banner2.png");background-position:center center;background-size:cover;background-repeat:no-repeat}.aslider-home-modern .aslider-slide-1 .aslider-media-overlay{background-color:rgba(147,115,222,0.8)}.aslider-home-modern .aslider-slide-1 .aslider-button-primary{background-color:#fff;border-color:#fff;color:#9373DE}.aslider-home-modern .aslider-slide-1 .aslider-button-primary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-1 .aslider-button-primary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-1 .aslider-button-secondary{background-color:rgba(255,255,255,0);border-color:#fff;color:#fff}.aslider-home-modern .aslider-slide-1 .aslider-button-secondary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-1 .aslider-button-secondary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-1 .aslider-title{color:#fff}.aslider-home-modern .aslider-slide-1 .aslider-subtitle{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-1 .aslider-description{color:#fff}.aslider-home-modern .aslider-slide-1 .aslider-content em{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-1 .aslider-content a:not(.button){border-color:rgba(255,255,255,.1)}.aslider-home-modern .aslider-slide-1 .aslider-content a:not(.button):hover{background-color:rgba(255,255,255,.1)}

.aslider-home-modern .aslider-slide-2 .aslider-content-inner{max-width:700px}.aslider-home-modern .aslider-slide-2:not(.has-video) .aslider-media{background-image:url("<?= @$assets_url; ?>img/banners/banner3.png");background-position:center center;background-size:cover;background-repeat:no-repeat}.aslider-home-modern .aslider-slide-2 .aslider-media-overlay{background-color:rgba(147,115,222,0.8)}.aslider-home-modern .aslider-slide-2 .aslider-button-primary{background-color:#fff;border-color:#fff;color:#9373DE}.aslider-home-modern .aslider-slide-2 .aslider-button-primary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-2 .aslider-button-primary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-2 .aslider-button-secondary{background-color:rgba(255,255,255,0);border-color:#fff;color:#fff}.aslider-home-modern .aslider-slide-2 .aslider-button-secondary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-2 .aslider-button-secondary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-2 .aslider-title{color:#fff}.aslider-home-modern .aslider-slide-2 .aslider-subtitle{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-2 .aslider-description{color:#fff}.aslider-home-modern .aslider-slide-2 .aslider-content em{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-2 .aslider-content a:not(.button){border-color:rgba(255,255,255,.1)}.aslider-home-modern .aslider-slide-2 .aslider-content a:not(.button):hover{background-color:rgba(255,255,255,.1)}

.aslider-home-modern .aslider-slide-3 .aslider-content-inner{max-width:700px}.aslider-home-modern .aslider-slide-3:not(.has-video) .aslider-media{background-image:url("<?= @$assets_url; ?>img/banners/banner4.png");background-position:center center;background-size:cover;background-repeat:no-repeat}.aslider-home-modern .aslider-slide-3 .aslider-media-overlay{background-color:rgba(147,115,222,0.8)}.aslider-home-modern .aslider-slide-3 .aslider-button-primary{background-color:#fff;border-color:#fff;color:#9373DE}.aslider-home-modern .aslider-slide-3 .aslider-button-primary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-3 .aslider-button-primary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-3 .aslider-button-secondary{background-color:rgba(255,255,255,0);border-color:#fff;color:#fff}.aslider-home-modern .aslider-slide-3 .aslider-button-secondary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-3 .aslider-button-secondary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-3 .aslider-title{color:#fff}.aslider-home-modern .aslider-slide-3 .aslider-subtitle{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-3 .aslider-description{color:#fff}.aslider-home-modern .aslider-slide-3 .aslider-content em{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-3 .aslider-content a:not(.button){border-color:rgba(255,255,255,.1)}.aslider-home-modern .aslider-slide-3 .aslider-content a:not(.button):hover{background-color:rgba(255,255,255,.1)}

.aslider-home-modern .aslider-slide-4 .aslider-content-inner{max-width:700px}.aslider-home-modern .aslider-slide-4:not(.has-video) .aslider-media{background-image:url("<?= @$assets_url; ?>img/banners/banner4.png");background-position:center center;background-size:cover;background-repeat:no-repeat}.aslider-home-modern .aslider-slide-4 .aslider-media-overlay{background-color:rgba(147,115,222,0.8)}.aslider-home-modern .aslider-slide-4 .aslider-button-primary{background-color:#fff;border-color:#fff;color:#9373DE}.aslider-home-modern .aslider-slide-4 .aslider-button-primary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-4 .aslider-button-primary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-4 .aslider-button-secondary{background-color:rgba(255,255,255,0);border-color:#fff;color:#fff}.aslider-home-modern .aslider-slide-4 .aslider-button-secondary:hover{background-color:#28353D;border-color:#28353D;color:#fff}.aslider-home-modern .aslider-slide-4 .aslider-button-secondary:before{background-color:#28353D}.aslider-home-modern .aslider-slide-4 .aslider-title{color:#fff}.aslider-home-modern .aslider-slide-4 .aslider-subtitle{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-4 .aslider-description{color:#fff}.aslider-home-modern .aslider-slide-4 .aslider-content em{color:rgba(255,255,255,.8)}.aslider-home-modern .aslider-slide-4 .aslider-content a:not(.button){border-color:rgba(255,255,255,.1)}.aslider-home-modern .aslider-slide-4 .aslider-content a:not(.button):hover{background-color:rgba(255,255,255,.1)}


.aslider-home-modern .aslider-title{font-size:40px}.aslider-home-modern .aslider-subtitle{font-size:12px;text-transform:uppercase}.aslider-home-modern .aslider-description{font-size:16px}.aslider-home-modern .aslider-button{font-size:12px;line-height:1;text-transform:uppercase}@media only screen and ( min-width : 660px ) {.aslider-home-modern .aslider-swiper-wrapper{min-height:95vh}.aslider-home-modern .aslider-title{font-size:45px}}@media only screen and ( min-width : 1025px ) {.aslider-home-modern .aslider-swiper-wrapper{min-height:95vh}.aslider-home-modern .aslider-title{font-size:55px}}
</style>


<style type="text/css">.custom-css-1488241484908{padding-top:90px;padding-bottom:90px}.custom-css-1488239830737{background-color:#fff;background-color:#fff}.custom-css-1488241938953{background-color:#28353d}.custom-css-1488244328363{padding:90px 20px 20px}.custom-css-1488245476729{padding-top:50px;padding-bottom:50px;background-color:#fff}.custom-css-1488041420143{background-color:#28353d;padding:80px 12%}.custom-css-1488041425297{padding:80px 12%}.custom-css-1488041385976{padding:80px 12%}.custom-css-1488239923758{border-color:#eee;border-style:solid;border-width:10px;padding:80px 12%}.custom-css-1488241686986{padding-top:200px}.custom-css-1488241607219{padding-top:200px}.custom-css-1488239923758{border-color:#eee;border-style:solid;border-width:10px;padding:80px 12%}.custom-css-1488242558389{padding:80px 12%}.custom-css-1488243026145{padding-top:200px}.custom-css-1488243053150{padding-top:200px}.custom-css-1488242590341{padding:80px 12%}.custom-css-1488245539123{background-color:rgba(255,255,255,0.01);*background-color:#fff;padding:0}</style>
</head>
<body class="header-transparent no-page-heading fluid-width no-top-content-padding no-bottom-content-padding">
	<div id="page" class="site">
		<header id="masthead" class="site-header header-resize is-light">
			<div class="site-header-container container">
			<div class="logo">
				<a href="<?= @base_url('Home/');?>" rel="home">
					<img class="logo-default" src="<?= @$assets_url; ?>img/besure-logo.png" alt="Be Sure">
					<img class="logo-light" src="<?= @$assets_url; ?>img/besure-logo-white.png" alt="Be Sure">
					<img class="logo-dark" src="<?= @$assets_url; ?>img/besure-logo-grey.png" alt="Be Sure">
				</a>
			</div>
			<div class="site-header-inner">
				<div class="header-search-form">
					<form role="search" method="get" class="search-form" action="/">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="Search" value="" name="s"/>
						</label>
						<button type="submit" class="search-submit"><span>Search</span></button>
					</form>
					<span class="header-search-form-close site-action-close"></span>
				</div>
				<div class="site-navigation-wrapper">
					<nav class="main-navigation">

					<ul class="site-nav">
						<li class="menu-item menu-item-has-children menu-no-link mega-menu mm-col-2 mega-menu-center"><a href="<?= @base_url('Home/');?>"><span><span class="menu-item-label">Home</span></span></a>
						</li>

						<li class="menu-item menu-item-has-children menu-no-link"><a href="<?= @base_url('Home/FAQ/');?>"><span><span class="menu-item-label">FAQs</span></span></a>
						</li>


						<li class="menu-item menu-item-has-children menu-no-link"><a href="<?= @base_url('Home/videos/');?>"><span><span class="menu-item-label">Conduct a Test</span></span></a>
						</li>

						

						<li class="menu-item menu-item-has-children menu-no-link"><a href="<?= @base_url('Outlets'); ?>"><span><span class="menu-item-label">Get a Kit</span></span></a>
						</li>

						<li class="menu-item menu-item-has-children menu-no-link"><a href="<?= @base_url('Map'); ?>"><span><span class="menu-item-label">Health Professionals</span></span></a>
						</li>

						<li class="menu-item menu-item-has-children menu-no-link"><a href="<?= @base_url('Home/Resources/');?>"><span><span class="menu-item-label">Resources</span></span></a>
						</li>
						

						<li class="menu-item menu-font-icon menu-button"><a target="_blank" href="#"><span><span class="menu-item-label">Login</span></span></a></li>
					</ul>

					</nav>
				</div>
			</div>
			</div>
		</header>


		<?= $this->load->view($partial, $partialData); ?>


		<footer id="colophon" class="site-footer">
			<div class="site-footer-container container">
				<div class="footer-logo">
					<a href="index.html" rel="home">
						<img src="<?= @$assets_url; ?>img/logo-footer.png" alt="Azra">
					</a>
				</div>
				<div class="footer-content">
					<nav class="footer-menu">
						<ul>
						<li class="menu-item"><a href="about-us.html">Do you need information, counseling or someone friendly to talk to about HIV & AIDS, Sex, STIs, Contraceptives, sexual and Gender Based Violence and other health, Teen or Youth related issues? CALL/SMS: 1190 Free from Safaricom line (Everyday 8am-8pm )</a></li>
						</ul>
					</nav>
					<div class="copyright">
						<p>© <a href="http://www.one2onekenya.org" target="_blank">One 2 One</a> and <a href="" target="_blank">LVCTHealth</a></p>
					</div>
				</div>
				<div class="footer-social">
					<div class="social-icons">
						<a class="social-icon icon-facebook" href="https://www.facebook.com/One2one-ke-144444975612410/?hc_location=ufi" target="_blank"><span>facebook</span></a>

						<a class="social-icon icon-twitter" href="https://twitter.com/one2oneke?lang=en" target="_blank"><span>twitter</span></a>
						<a class="social-icon icon-instagram" href="https://www.instagram.com/onetooneke/?hl=en" target="_blank"><span>instagram</span></a>

						<i class="social social-whatsapp x1.5"></i> 0700-121-121

					</div>
				</div>
			</div>
		</footer>


	</div>


	<button class="button back-to-top"></button>

	<link rel="stylesheet" href="<?= @$assets_url; ?>css/animate.min.css" type="text/css" media="all">
	<script type="text/javascript" src="<?= @$assets_url; ?>js/plugins.js"></script>
	<script type="text/javascript" src="<?= @$assets_url; ?>js/main.js"></script>

	<?= @$page_js; ?>
</body>
</html>