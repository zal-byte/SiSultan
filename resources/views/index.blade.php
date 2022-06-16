<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<title>SiTan</title>
</head>
<style type="text/css">
	@font-face{
		font-family: 'eudoxus';
		src:  url("{{asset('font/eudoxus/Variable/EudoxusSansGX.woff')}}") format("woff");
		src: url("{{asset('font/eudoxus/Variable/EudoxusSansGX.ttf')}}") format("truetype");
	}
	body{
		font-family: 'eudoxus';
	}
</style>
<body>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

	<div id="loader">
		<div class="d-flex flex-column min-vh-100">
	      <div class="d-flex flex-grow-1 justify-content-center align-items-center">
	      	<div>
	      		<p class="text-center">
	      			<img src="{{asset('img/jabar_logo.svg')}}" style="width:50%;">
	      		</p>
	      		<p class="text-center text-white">
	      			Loading...
	      		</p>
	      	</div>
	      </div>
	    </div>
	</div>
	<div class="container-fluid bg-dark">
		<nav class="navbar navbar-dark navbar-expand-md bg-dark">
			<h3 class="navbar-brand">
				<span class="fa-solid fa-tree" style="margin-right: 5px;"></span> SiTan
			</h3>
			<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myNav">
				<ul class="navbar-nav text-white">
					<li class="nav-item">
						<a class="nav-link active">
							How is that possible?
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled">
							Have you ever heard this ?
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="container-fluid bg-dark text-white p-2">
		<h3 class="font-weight-bold">
			Selamat Datang di website SiTan !
		</h3>
		<p class="p-2">
			<span class="fa fa-info" style="margin-right:10px;"></span> Gunakan map dibawah untuk menampilkan data - data pada setiap daerah.
		</p>
	</div>	

	<div class="container">
		<div class="d-flex justify-content-center">
			<div class="card shadow m-2 half-card">
				<div class="card-body p-0">
					<div class="frame-body">
						@yield('map')
						<h4 class="text-white">
							Jawa Barat
						</h4>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="container">
		<div class="flexs d-flex justify-content-center">
			<div class="card border-0 shadow desc" style="border-radius: 0px 30px 30px 0px;">
				<div class="card-body" style="padding-left: 0px; padding-top: 0px; padding-bottom: 0px;">
					<div class="d-flex">
						<div class="d-flex align-items-center bg-info p-2">
							<span class="fa-solid fa-circle-info fa-2x"></span>
						</div>
						<p class="inf m-2">
							Jawa Barat sebagai pengertian administratif mulai digunakan pada tahun 1925 ketika Pemerintah Hindia Belanda membentuk Provinsi Jawa Barat. Pembentukan provinsi itu sebagai pelaksanaan Bestuurshervormingwet tahun 1922, yang membagi Hindia Belanda atas kesatuan-kesatuan daerah provinsi.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid mt-2">
			<div class="card border-0 shadow">
				<div class="card-body">
					<h2 class="font-weight-bold">
						Luas 
					</h2>
					<hr>
					@if(isset($data))
						<div class="d-flex flex-wrap justify-content-center">
							@foreach($data as $s)
							<button type="button" class="btn btn-primary m-1">
								{{$s['nama']}} <span class="badge bg-dark">{{$s['luas']}} &#13221; </span>
							</button>
							@endforeach
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>

	<br>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/panzoom.min.js')}}"></script>
<script type="text/javascript">

	$(document).ready(function(){

		$("#loader").fadeOut(1000);

		const element = document.getElementById("Layer_1");
		const panzoom = Panzoom(element, {
			maxScale:5,
			beforeWheel: e=> !e.altKey
		});
		panzoom.pan(10,10);
		panzoom.zoom(1,{animate:true});
		const parent = element.parentElement
		parent.addEventListener('wheel', panzoom.zoomWithWheel);

	});




</script>
</body>
</html>