<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title') | Muses
    </title>
    <link href="{{ asset ('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- Custom Css files -->
    <link href="{{ asset ('frontend/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text; charset=utf-8" />
    <meta name="keywords" content="" />
    <link href="{{ asset ('frontend/css/style4.css') }}" rel="stylesheet" type="text/css" media="all" />	
</head>
    
    
<body>

    @include('layouts.inc.navbar')
    
    <div class="content">
        @yield ('content')
    </div>


    @include('layouts.inc.footer')

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script src="{{ asset ('frontend/js/jquery.min.js') }}"></script>
    <!--- start-rate---->
    <script src="{{ asset ('frontend/js/jstarbox.js') }}"></script>
    <script src="{{ asset ('frontend/js/simpleCart.min.js') }}"> </script>
    <!-- slide -->
    <script src="{{ asset ('frontend/js/bootstrap.min.js') }}"></script>
    <!--light-box-files -->
	<script src="{{ asset ('frontend/js/jquery.chocolat.js') }}"></script>
	<link rel="stylesheet" href="{{ asset ('frontend/css/chocolat.css') }}" type="text/css" media="screen" charset="utf-8">
	
    <!--light-box-files -->
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
	</script>

    <script type="text/javascript">
		jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
				    } 
			    })
		    });
	    });

    </script>
    @yield('script')

</body>
</html>