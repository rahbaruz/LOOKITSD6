<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('theme.head')
@yield('custom_css')
<body class="overflow-x-hidden bg-white">
	<!-- Document Wrapper ============================================= -->
	<div id="wrapper" class="clearfix">
       <!-- Header ============================================= -->
        <div class="w-100 z-10">
            @include('theme.header')
        </div>
        <!-- #header end -->
        <div class="row">
            <!-- aside -->
            @include('theme.aside_left')
            <!-- /aside -->
            <!-- Content ============================================= -->
            @yield('content')
            <!-- #content end -->
            <!-- aside -->
            @include('theme.aside_right')
            <!-- /aside -->
        </div>
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