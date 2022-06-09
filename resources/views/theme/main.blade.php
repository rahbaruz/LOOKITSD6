<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('theme.head')
@yield('custom_css')
<body class="stretched bg-white">
	<!-- Document Wrapper ============================================= -->
	<div id="wrapper" class="clearfix">
       <!-- Header ============================================= -->
		@include('theme.header')
        <!-- #header end -->
		<!-- Content ============================================= -->
		@yield('content')
        <!-- #content end -->
		<!-- Footer ============================================= -->
		@include('theme.footer')
        <!-- #footer end -->
	</div>
    <!-- #wrapper end -->
	<!-- JavaScripts ============================================= -->
	@include('theme.js')
	@yield('custom_js')
</body>
</html>