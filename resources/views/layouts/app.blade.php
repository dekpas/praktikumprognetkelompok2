<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<title>E-Commerce Kelompok 2</title>
	<link rel="stylesheet" href="{{ asset('thewayshop/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href="{{ asset('thewayshop/css/style.css') }} ">
	<link rel="stylesheet" href="{{ asset('thewayshop/css/responsive.css') }} ">
	<link rel="stylesheet" href="{{ asset('thewayshop/css/custom.css') }} ">
</head>

<body>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
	<!-- ALL JS FILES -->
	<script src="{{ asset('thewayshop/js/jquery-3.2.1.min.js') }} "></script>
	<script src="{{ asset('thewayshop/js/popper.js') }} "></script>
	<script src="{{ asset('thewayshop/js/bootstrap.min.js') }} "></script>
	<!-- ALL PLUGINS -->
	<script src="{{ asset('thewayshop/js/jquery.superslides.min.js') }} "></script>
	<script src="{{ asset('thewayshop/js/bootstrap-select.js') }} "></script>
	<script src="{{ asset('thewayshop/js/inewsticker.js') }} "></script>
	<script src="{{ asset('thewayshop/js/bootsnav.js') }} "></script>
	<script src="{{ asset('thewayshop/js/images-loded.min.js') }} "></script>
	<script src="{{ asset('thewayshop/js/isotope.min.js') }} "></script>
	<script src="{{ asset('thewayshop/js/owl.carousel.min.js') }} "></script>
	<script src="{{ asset('thewayshop/js/baguetteBox.min.js') }} "></script>
	<script src="{{ asset('thewayshop/js/form-validator.min.js') }} "></script>
	<script src="{{ asset('thewayshop/js/contact-form-script.js') }} "></script>
	<script src="{{ asset('thewayshop/js/custom.js') }} "></script>
	<script>
		jQuery(document).ready(function(e){
			jQuery('.radiobtn').click(function(e){
				var index = $('.radiobtn').index(this);
				console.log(jQuery('#radio10'+index).val());
				jQuery.ajax({
					url: "{{url('/show_categori')}}",
					method: 'post',
					data: {
						_token: $('#signup-token').val(),
						id: jQuery('#radio10'+index).val(),
					},
					success: function(result){
						$('.ganti').html(result.hasil);
					}
				});
			});
		});
	</script>
</body>

</html>