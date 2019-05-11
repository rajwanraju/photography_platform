<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Shoot a Photography</title>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{asset('frontEnd/')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{asset('frontEnd/')}}/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('frontEnd/')}}/css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('frontEnd/')}}/css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="{{asset('frontEnd/')}}/css/style.css" rel='stylesheet' type='text/css' />
	<link href="{{asset('frontEnd/')}}/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
</head>

<body>
	<!-- /banner -->
	<section class="banner-sec-w3layouts" id="home">
@include('frontEnd.includes.header1')

@yield('homeContent')
@include('frontEnd.includes.footer')
<!-- js -->
	<script src="{{asset('frontEnd/')}}/js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- carousel -->
	<script src="{{asset('frontEnd/')}}/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					1024: {
						items: 2,
						nav: false
					},
					1080: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->
	<!-- flexSlider -->
	<script defer src="{{asset('frontEnd/')}}/js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide"
			});
		});
	</script>
	<!-- //flexSlider -->
	<!--/ start-smoth-scrolling -->
	<script src="{{asset('frontEnd/')}}/js/move-top.js"></script>
	<script src="{{asset('frontEnd/')}}/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	 <script>
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	   </script>
	<!--// end-smoth-scrolling -->
	<!-- Gallery js file -->
	<script src="{{asset('frontEnd/')}}/js/jquery.picEyes.js"></script>
	<script>
		$(function () {
			//picturesEyes($('.demo li'));
			$('.demo li').picEyes();
		});
	</script>
	<!-- //Gallery js file -->
	<!--pop-up-box-->
	<link href="{{asset('frontEnd/')}}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="{{asset('frontEnd/')}}/js/jquery.magnific-popup.js"></script>
	<!--//pop-up-box-->
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!--//search-bar-->

	
		<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	   
	<!-- //Custom-JavaScript-File-Links -->
	<script src="{{asset('frontEnd/')}}/js/bootstrap.js"></script>

</body>

</html>