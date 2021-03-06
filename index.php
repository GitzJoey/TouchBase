<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>GitzJoey's House</title>

    <link rel="icon" href="img/logo/stealth.png" sizes="16x16" type="image/png">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css"/>
	<link rel="stylesheet" href="slick/slick.css" type="text/css"/>
	<link rel="stylesheet" href="slick/slick-theme.css" type="text/css"/>
	<link rel="stylesheet" href="css/tooplate-style.css">

	<script>
		var renderPage = true;

		if(navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0){
			/* Microsoft Internet Explorer detected in. */
			alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
			renderPage = false;
		}
	</script>
</head>

<body>
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="#welcome" id="tmNavLink_Welcome" class="scrolly active" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-welcome">
									<i class="fas fa-home tm-nav-fa-icon"></i>
									<span>Welcome</span>
								</a>
							</li>
							<!--
							<li>
								<a href="#services" id="tmNavLink_Services" class="scrolly" data-bg-img="constructive_bg_02.jpg" data-page="#tm-section-services" data-page-type="carousel">
									<i class="fas fa-map tm-nav-fa-icon"></i>
									<span>Services</span>
								</a>
							</li>							
							<li>
								<a href="#about" class="scrolly" data-bg-img="constructive_bg_03.jpg" data-page="#tm-section-about">
									<i class="fas fa-users tm-nav-fa-icon"></i>
									<span>About</span>
								</a>
							</li>
							-->
							<li>
								<a href="#contact" id="tmNavLink_Contact" class="scrolly" data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-contact">
									<i class="fas fa-comments tm-nav-fa-icon"></i>
									<span>Contact</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

				<section id="tm-section-welcome" class="tm-section">
					<div class="ml-auto">
						<header class="mb-4"><h1 class="tm-text-shadow">Hi There...</h1></header>
						<p class="mb-5 tm-font-big">Welcome to GitzJoey's Personal Website, I'm a Full Stack Developer with 20 years of experiences specially in Banking and Healthcare. I also do freelance work for any IT related jobs. Please contact me for more info</p>
						<a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink_Contact">Continue...</a> 
					</div>
				</section>

				<section id="tm-section-services" class="tm-section tm-section-carousel">
					<div>
						<header class="mb-4"><h2 class="tm-text-shadow">Services</h2></header>		            
						<div class="tm-img-container">
							<div class="tm-img-slider">
								<a href="img/gallery-img-01.jpg" class="tm-slider-img"><img src="img/gallery-img-01-tn.jpg" alt="Image" class="img-fluid"></a>
								<a href="img/gallery-img-02.jpg" class="tm-slider-img"><img src="img/gallery-img-02-tn.jpg" alt="Image" class="img-fluid"></a>
								<a href="img/gallery-img-03.jpg" class="tm-slider-img"><img src="img/gallery-img-03-tn.jpg" alt="Image" class="img-fluid"></a>
								<a href="img/gallery-img-04.jpg" class="tm-slider-img"><img src="img/gallery-img-04-tn.jpg" alt="Image" class="img-fluid"></a>
								<a href="img/gallery-img-05.jpg" class="tm-slider-img"><img src="img/gallery-img-05-tn.jpg" alt="Image" class="img-fluid"></a>
								<a href="img/gallery-img-06.jpg" class="tm-slider-img"><img src="img/gallery-img-06-tn.jpg" alt="Image" class="img-fluid"></a>
							</div>
						</div>		            		          
					</div>       		          	
				</section>

				<section id="tm-section-about" class="tm-section">						
					<div class="row mb-4">
						<header class="col-xl-12"><h2 class="tm-text-shadow">About</h2></header>		
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
							<div class="media tm-bg-transparent-black tm-border-white">
								<i class="fab fa-apple tm-icon-circled tm-icon-media"></i>
								<div class="media-body">
									<h3>HTML Templates</h3>
									<p>We provide a variety of templates for you at no cost. Please spread a word about <a href="https://plus.google.com/+tooplate" target="_parent">Tooplate</a> website. Thank you.</p>	
								</div>
							</div>
						</div>	
						<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
							<div class="media tm-bg-transparent-black tm-border-white">
								<i class="fas fa-map-pin mr-4 tm-icon-circled tm-icon-media"></i>	
								<div class="media-body">
									<h3>Free Images</h3>
									<p>Photos by <a href="https://unsplash.com" target="_blank">Unsplash.com</a> website, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>	
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
							<div class="media tm-bg-transparent-black tm-border-white">
								<i class="fab fa-fly mr-4 tm-icon-circled tm-icon-media"></i>
								<div class="media-body">
									<h3>Phasellus eleifend</h3>
									<p>Phasellus feugiat scelerisque sapien, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>		
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
							<div class="media tm-bg-transparent-black tm-border-white">
								<i class="fab fa-linode mr-4 tm-icon-circled tm-icon-media"></i>
								<div class="media-body">
									<h3>Phasellus eleifend</h3>
									<p>Phasellus feugiat scelerisque sapien, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>	
								</div>
							</div>
						</div>			          		
					</div>						               
				</section>

				<section id="tm-section-contact" class="tm-section">
					<div class="tm-bg-transparent-black tm-contact-box-pad">
						<div class="row mb-4">
							<div class="col-sm-12">
								<header><h2 class="tm-text-shadow">Contact</h2></header>
							</div>
						</div>
						<div class="row tm-page-4-content">
							<div class="col-md-7 col-sm-12 tm-contact-col">
								<div class="contact_message">
									<form id="contact-form" action="#contact" method="post" class="contact-form">
										<div class="form-group">
											<input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required>
										</div>
										<div class="form-group">
											<input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required>
										</div>
										<div class="form-group">
											<textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Message" required></textarea>
										</div>
                                        <div class="form-group">
                                            <img src="" alt="CAPTCHA" class="captcha-image">
                                            <i class="fas fa-redo refresh-captcha"></i>

                                            <input type="text" id="captcha_text" name="captcha_text" class="form-control" placeholder="Captcha" required>
                                        </div>
										<button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Submit</button>
									</form>
								</div>
							</div>
							<div class="col-md-5 col-sm-12 tm-contact-col">
								<div class="tm-address-box">
									<p>Thanks for your interest to contact me, please note that i'm live in GMT +8 country. I'll try to contact you back as soon as possible</p>
									<p>Please make sure you put valid email address, and also you can put others contacts so I can reach you faster.</p>
									<address>
										586 AMK Ave 3<br>
										Singapore,<br>
										560586
									</address>
								</div>
							</div>
						</div>
					</div>
				</section>					

			</div>

			<footer class="footer-link">
				<p class="tm-copyright-text">Copyright &copy; <?php echo date('Y'); ?> GitzJoey. All right reserved.</p>
			</footer>
		</div>			
	</div>

	<div id="preload-01"></div>
	<div id="preload-02"></div>
	<div id="preload-03"></div>
	<div id="preload-04"></div>

	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script> <!-- Slick Carousel -->

	<script>
		var sidebarVisible = false;
		var currentPageID = "#tm-section-welcome";

        var refreshButton = document.querySelector(".refresh-captcha");
        refreshButton.onclick = function() {
            document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
        }
        
		function setupCarousel() {
			if($('#tm-section-2').css('display') == "none") {
			}
			else {	

				var slider = $('.tm-img-slider');
				var windowWidth = $(window).width();

				if (slider.hasClass('slick-initialized')) {
					slider.slick('destroy');
				}

				if(windowWidth < 640) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 1,
	              		slidesToScroll: 1
	              	});
				}
				else if(windowWidth < 992) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 2,
	              		slidesToScroll: 1
	              	});
				}
				else {
	              	slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 3,
	              		slidesToScroll: 2
	              	});
				}

				$('.tm-img-slider').magnificPopup({
				  delegate: 'a',
				  type: 'image',
				  gallery: {enabled:true}
				});
      		}
  		}

  		function setupNav() {
	     	$(".tm-main-nav a").click(function(e){
	     		e.preventDefault();
		    	
		    	var currentNavItem = $(this);
		    	changePage(currentNavItem);
		    	
		    	setupCarousel();
		    	setupFooter();

		    	$("#tmSideBar").removeClass("show");
		    });	    
  		}

  		function changePage(currentNavItem) {
  			$(".tm-main-nav a").removeClass("active");
     		currentNavItem.addClass("active");

	    	$(currentPageID).hide();

	    	currentPageID = currentNavItem.data("page");
	    	$(currentPageID).fadeIn(1000);

	    	var bgImg = currentNavItem.data("bgImg");
	    	$.backstretch("img/" + bgImg);

	    	if (currentNavItem.data("page") == "#tm-section-contact") {
	    	    refreshButton.click();
            }
  		}

  		function setupNavToggle() {
			$("#tmMainNavToggle").on("click", function(){
				$(".sidebar").toggleClass("show");
			});
  		}

  		function setupFooter() {  			
  			var padding = 100;
  			var footerPadding = 40;
  			var mainContent = $("section"+currentPageID);
  			var mainContentHeight = mainContent.outerHeight(true);
  			var footer = $(".footer-link");
  			var footerHeight = footer.outerHeight(true);
  			var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
  			var windowHeight = $(window).height();		

  			if(totalPageHeight > windowHeight){
  				$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
  				footer.css("bottom", footerHeight + "px");  			
  			}
  			else {
  				$(".tm-content").css("margin-bottom", "0");
  				footer.css("bottom", "20px");  				
  			}  			
  		}

      	$(window).on("load", function(){
      		if(renderPage) {
		      	$('body').addClass('loaded');

		      	var allPages = $(".tm-section");

		      	var linkToAnotherPage = $("a.tm-btn[data-nav-link]");
			    
			    if(linkToAnotherPage != null) {
			    	
			    	linkToAnotherPage.on("click", function(){
			    		var navItemToHighlight = linkToAnotherPage.data("navLink");
			    		$("a" + navItemToHighlight).click();
			    	});
			    }
		      	
		      	allPages.hide();

		      	$("#tm-section-welcome").fadeIn();

		     	var bgImg = $("#tmNavLink_Welcome").data("bgImg");
		     	
		     	$.backstretch("img/" + bgImg, {fade: 500});

			    setupCarousel();
			    setupNav();
			    setupNavToggle();
			    setupFooter();

			    $(window).resize(function() {
			    	setupCarousel();
			    	setupFooter();
			    });
      		}	      	
		});

        $('#contact-form').submit(function(event) {
            event.preventDefault();

            $.ajax({
                type: "POST",
                url: "contact.php",
                data: new FormData(document.querySelector('form')),
                processData: false,
                contentType: false,
                success: function(data) {
                    var ret = JSON.parse(data).return;
                    if (ret == 'Invalid Captcha') {
                        $('#captcha_text')[0].setCustomValidity('Invalid Captcha');
                    } else if (ret == 'Invalid Email') {
                        $('#contact_email')[0].setCustomValidity('Invalid Email');
                    } else {
                        alert(ret);
                        $('#contact-form')[0].reset();
                    }
                }
            });
        });
	</script>
</body>
</html>