<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body data-spy="scroll" data-target=".navMenuCollapse">
<div id="wrap">

	<!-- INTRO CENTER FORM -->
	<header id="intro-center-form" class="intro-block cover-bg text-center" style="background-image:url(images/bg10.jpg)">
		@include('includes.intro')
	</header>

	<!-- COUNTER BLOCK -->
	<section id="counter" class="facts-block bg-color2 dark-bg text-center" >
		@include('includes.steps')
	</section>

	<!-- FAQ BLOCK -->
	<section id="faq">
		@include('includes.faq')
	</section>


	<!-- FOOTER CENTER -->
	<footer id="footer-center" class="text-center bg-color3">
		@include('includes.footer')
	</footer>
</div>
<!-- /#wrap -->

<!-- JavaScript -->
<script src="scripts/jquery-1.11.2.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><script src="scripts/jquery.validate.min.js"></script>
<script src="scripts/smoothscroll.js"></script>
<script src="scripts/jquery.smooth-scroll.min.js"></script>
<script src="scripts/placeholders.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/video.js"></script>
<script src="scripts/bigvideo.js"></script>
<script src="scripts/custom.js"></script>
</body>
</html>
