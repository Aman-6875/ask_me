<!DOCTYPE html>
@include('frontend.partials.header')
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	@include('frontend.partials.navigation')
	
	@yield('content')
	
	@include('frontend.partials.footer')
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

@include('frontend.partials.scripts')

</body>

<!-- Mirrored from 2code.info/demo/html/ask-me-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 06:06:18 GMT -->
</html>