



<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html">	<img src="assets/images/logo2.png"/> </a></h2>
			<p>Our brand caters to a unique fusion of modern and traditional couture to suit every occasion. Our Sarees are artistic enough to light up your entire look, adding a sense of glam to your personality. Thanks to our  handcrafted wooden block prints. We believe in art, and our brand speaks for itself. 
				Pick Kar before someone else picks!
				</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="https://www.facebook.com/Pickar/" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://instagram.com/pickar_india?igshid=5xrjbp5ddeui" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="https://wa.me/919930685868" class="pinterest">
																  <div class="front"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-whatsapp" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our Information </h4>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						
						<li><a href="womens.php">Women's wear</a></li>
						<li><a href="{{url('about')}}">About</a></li>
						
						<li><a href="{{url('contact')}}">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two" style="float:right;">
					<h4>Brand Information</h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p><a href="tel:+919930685868"> +91 9930685868</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com"> pickarindia@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p><a href="https://goo.gl/maps/ukfZUc1rLZ8YfQtg7">2/3 Babulnath Pande Society,Near Swami Samarth High School,Datttekdi, Jogeshwari (East), Mumbai 400060 </a>
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		
		<p class="copy-right">&copy {{Date('Y')}} Pickar. All rights reserved | Design by <a href="#">Pickar</a></p>
	</div>
</div>
<!-- //footer -->


<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="{{asset('assets/js/minicart.min.js')}}"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="{{asset('assets/js/easy-responsive-tabs.js')}}"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.countup.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>