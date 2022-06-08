<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/show.css')}}">
	<title></title>
	<style type="text/css">
		@font-face{
			font-family: 'eudoxus';
			src: url("{{asset('font/eudoxus/Variable/EudoxusSansGX.ttf')}}") format('truetype');
		}
		body{
			font-family: 'eudoxus';
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

@if( !$data )

	<div class="d-flex flex-column min-vh-100 ">
      <div class="d-flex flex-grow-1 justify-content-center align-items-center">
      	<div>
      		<p class="text-center">
      			<span class="fa-solid fa-face-frown fa-7x sad"></span>
      		</p>
      		<h4 class="text-center">
      			Area Not Found
      		</h4>
      		<p class="text-center">
	      		<a href="/area" class="text-decoration-none">
	      			<button class="btn btn-primary text-white">
	      				Back
	      			</button>
	      		</a>
      		</p>
      	</div>
      </div>
    </div>

@else

	<nav class="navbar bg-dark shadow sticky-top p-2">
		<a href="/area" class="text-decoration-none">
			<button class="btn btn-primary text-white" style="min-width: 100px;"> <span class="fa-solid fa-arrow-left"></span> Back </button>
		</a>
	</nav>

<div class="container-fluid bg-dark pl-2 pr-2 pt-3 pb-2">
	<p class="text-center">
		<img src="{{asset('img/city_img/' . $data->kota_gambar)}}" class="img-fluid b-image rounded">
		<h3 class="text-white text-center">
			{{ $data->kota_nama }}
		</h3>
		<p class="text-white text-center">
			{{ $data->kota_tentang }}
		</p>
	</p>
</div>

<div class="container mt-2 pb-4">
	<div class="d-flex justify-content-center">
		<div class="row">
			<div class="col-sm">
				<div class="card border-0 shadow" style="width:15rem;">
					<div class="card-body bg-white p-0">
						<img src="{{asset('img/tree.png')}}" class="card-img-top bg-success" >
						<p class="m-2 text-center">
								Potensi Hutan
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card border-0 shadow" style="width:15rem;">
					<div class="card-body bg-white p-0">
						<img src="{{asset('img/fruit.png')}}" class="card-img-top img-fluid p-3 bg-success" >
						<p class="m-2 text-center">
								Potensi Buah
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>