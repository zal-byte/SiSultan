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
	.thumbnail{
		position: relative;
		padding: 0px;
		margin-right: 10px;
		width: 20%;

	}
	
	li{
		cursor: pointer;
	}

	.img-cat{
		cursor: pointer;
		box-shadow: 1px 1px 10px #999;
		height: 100%;
	}
	.caption{
		position: absolute;
		bottom: 10px;
		left: 20px;
		color: white;
		text-shadow: 1px 1px 1px black;
	}
	@media screen and (min-width: 768px){
		.img-cat{
			width: 100%;
		}
	}
	@media screen and (max-width: 768px){
		.img-cat{
			width: 100%;
		}
		.cen{
			text-align: center !important;
		}

	}

	.hor-scroll{
		overflow-y: hidden;
		overflow-x: auto;
		width: 100%;
		white-space: nowrap;
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
				<ul class="navbar-nav ms-auto text-white">
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

	<div class="container-fluid bg-dark text-white">
		<img src="{{asset('img/garut.png')}}" class="img-fluid">
	</div>	
		<div class="d-flex justify-content-center mt-2 p-2">
			<div class="form-group w-100" style="margin-right:10px;">
				<select class="form-select">
					<option>Apa yang kamu cari?</option>
					<option>Madu</option>
					<option>Kayu</option>
				</select>
			</div>
			<div class="form-group w-100">
				<select class="form-select">
					<option>Pilih kategori</option>
					<option>Madu</option>
					<option>Kayu</option>
				</select>
			</div>
		</div>

		<div class="d-flex justify-content-center mt-5">
			<h2 class="font-weight-bold text-center" style="color: #1E0973;">
				<b>Kategori Populer</b>
			</h2>
		</div>

		<div class="container mt-2 mb-2 w-100">
			<div class="d-flex flex-row justify-content-center">
				<div class="thumbnail">
					<img src="https://www.mongabay.co.id/wp-content/uploads/2013/04/Aji-Wihardandi-0843.jpg" alt="" class=" img-cat" style="border-radius: 20px;">
					<div class="caption">
						<b> Kayu </b>
					</div>
				</div>
				<div class="thumbnail">
					<img src="https://asset.kompas.com/crops/XqxnReSYcqJDlKgFvptTLNwYrSU=/11x12:838x563/750x500/data/photo/2018/09/09/4168352272.jpg" alt="" class=" img-cat" style="border-radius: 20px;">
					<div class="caption">
						<b> Madu </b>
					</div>
				</div>
				<div class="thumbnail">
					<img src="https://i2.wp.com/gdm.id/wp-content/uploads/2019/11/cara-budidaya-jamur-tiram-1152x675.jpg" alt="" class=" img-cat" style="border-radius: 20px;">
					<div class="caption">
						<b> Jamur </b>
					</div>
				</div>
				<div class="thumbnail">
					<img src="https://cdn-brilio-net.akamaized.net/community/2019/11/28/23327/image_1574830643_5dde023328ca5.jpg" alt="" class=" img-cat" style="border-radius: 20px;">
					<div class="caption">
						<b> Hutan lindung </b>
					</div>
				</div>
			</div>
		</div>

		<div class="container mt-4 p-4 mb-2">
			<div class="d-flex">
				<h4 class="font-weight-bold">
					<b>Sambutan kepala dinas perhutani</b>
				</h4>
			</div>
			<div class="d-flex justify-content-center">
				<div class="row">
					<div class="col-sm-9">
						<div class="card border-0 shadow-sm">
							<div class="card-body">
								<p>Assalammu'alaikum Warrahmatullahi Wabarakatuh</p>
								<i>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.
								</i>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<p class="cen">
							<img src="https://www.tempias.com/wp-content/uploads/2021/02/Endung-Trihartaka-direktur-perhutani-pilihan-erick-thohir.png" class="img-fluid rounded shadow-sm mt-2" style="height: 128px;">
						</p>
					</div>
				</div>
			</div>

			<div class="container mt-2">
				<b> Lorem Ipsum </b>
				<p style="color:gray;">
					Kepala Dinas Kebudayaan dan Pariwisata Kabupaten Barat
				</p>
			</div>

			<div class="d-flex justify-content-center mt-5">
				<h2 class="font-weight-bold">
					<b style="color:#1E0973;">
						Objek Wisata Hutan Jawa Barat
					</b>
				</h2>
			</div>

		</div>

	<div class="container" >
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