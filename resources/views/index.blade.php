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
	#meinNav a{
		cursor: pointer;
	}


	.list-group-item{
		cursor: pointer;
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
	<div class="container-fluid" style="background-color:#1E0973;">
		<nav class="navbar navbar-dark navbar-expand-md" style="background-color:#1E0973;">
			<h3 class="navbar-brand">
				<!-- <span class="fa-solid fa-tree" style="margin-right: 5px;"></span>  -->SISULTAN
			</h3>
			<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myNav">
				<ul class="navbar-nav ms-auto text-white" id="meinNav">
					<li class="nav-item">
						<a class="nav-link">
							Home
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link">
							Profil
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link">
							Info Daerah
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link">
							Lokasi Wisata
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link">
							Galeri
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="container-fluid	bg-dark text-white p-2">
		<h3 class="display-4">
			Selamat Datang
		</h3>
		<p class="lead">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

	<div class="container" >
		<div class="d-flex justify-content-center">
			<div class="card shadow m-2 half-card">
				<div class="card-body p-0">
					<div class="frame-body">
						@yield('map')
						<ul class="list-group list-group-horizontal p-1">
							<li class="list-group-item bg-primary">
								<a class="nav-link text-white">
									Potensi Hutan
								</a>
							</li>
							<li class="list-group-item bg-primary">
								<a class="nav-link text-white">
									Luas Wilayah
								</a>
							</li>
							<li class="list-group-item bg-primary">
								<a class="nav-link text-white">
									Hutan Lindung
								</a>
							</li>
						</ul>
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
	</div>

	<br>

		<footer class="text-center text-lg-start" style=" background-color:#1E0973; min-height: 100px; height: 200px;">
			<section class="d-flex justify-content-center jutify-content-lg-between p-4">
				<div class="me-5 d-none d-lg-block">
					<span>
						<a href="#" class="nav-link text-white">TENTANG KAMI</a>
					</span>
				</div>
				<div class="me-4 text-reset">
					<span>
						<a href="#" class="nav-link text-white">TAUTAN</a>
					</span>
				</div>
				<div class="me-4 text-reset">
					<span>
						<a href="#" class="nav-link text-white">PROFIL</a>
					</span>
				</div>
				<div class="me-4 text-reset">
					<span>
						<a href="#" class="nav-link text-white">INFORMASI KONTAK</a>
					</span>
				</div>
			</section>
		</footer>
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