<!DOCTYPE html>
<html>
<head>
	<meta lang="{{str_replace('_','-', app()->getLocale())}}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<title> Authentication </title>
	<style type="text/css">
		body,html{
			height: 100% !important;
		}

.bg-auth{
	position: fixed;
	width: 100%;
	height: 100%;
	filter: blur(2px);
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
	background-image: url("{{asset('img/auth-bg.jpg')}}");
}
	</style>
</head>
<body>



	<div class="bg-auth">

	</div>
	@yield('auth_body')


	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>