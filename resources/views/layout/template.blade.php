<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title'){{ "FashionEase" }}</title>
	<!-- Favicon -->
	<link href="{{asset('asset/img/favicon.ico')}}" rel="shortcut icon" />
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	@stack('stylesheet')
	<!-- Stylesheets -->
	{{-- <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}"> --}}
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/fontawesome.min.css"> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/jquery-ui.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	@livewireStyles
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
	@include('layout.header')

	{{-- Overlay --}}
	<div class="overlay-black"></div>
	{{-- End of Overlay --}}
	@yield('content')

	@include('layout.footer')

	{{-- Bootstrap CDN --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
	{{-- Ajax CDN --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('asset/js/main.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	@livewireScripts
	<script>
		window.addEventListener('toastr', event => {
			let status = event.detail.status;

			toastr.options = {
				"preventDuplicates": true,
				"positionClass": "toast-top-center",
			};
			switch (status) {
				case 'success':
					toastr.success(event.detail.message);
					break;
				case 'error':
					toastr.error(event.detail.message);
					break;
				case 'warning':
					toastr.warning(event.detail.message);
					break;
				case 'info':
					toastr.info(event.detail.message);
					break;
				default:
					break;
			}
		})
	</script>
	@stack('script')
</body>

</html>