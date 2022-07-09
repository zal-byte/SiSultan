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
</head>
<body>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
@if( count($data) <= 0 )

	<div class="d-flex flex-column min-vh-100 ">
      <div class="d-flex flex-grow-1 justify-content-center align-items-center">
      	<div>
      		<p class="text-center">
      			<span class="fa-solid fa-face-frown fa-7x sad"></span>
      		</p>
      		<h4 class="text-center">
      			Area or Data not available
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

	<nav class="navbar shadow sticky-top p-2" style="background-color: #1E0973;">
		<a href="/area" class="text-decoration-none">
			<button class="btn btn-primary text-white" style="min-width: 100px;"> <span class="fa-solid fa-arrow-left"></span> Back </button>
		</a>
	</nav>

	<div class="container-fluid bg-dark text-white">
		<img src="{{asset('img/garut.png')}}" class="img-fluid">

		<ul class="list-group list-group-horizontal p-1">
			<li class="list-group-item bg-primary og">
				<a class="nav-link text-white">
					Potensi Hutan
				</a>
			</li>
			<li class="list-group-item bg-primary">
				<a class="nav-link text-white">
					Luas wilayah
				</a>
			</li>
			<li class="list-group-item bg-primary">
				<a class="nav-link text-white">
					Lorem
				</a>
			</li>
		</ul>
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

		<div class="container mt-5 mb-2 w-100">
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
				<table class="table" style="height:400px;">
					<thead>
						<tr>
							<td>
								Nama Perusahaan
							</td>
							<td>
								Produk
							</td>
							<td>
								Alamat
							</td>
							<td>
								Koordinat
							</td>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $d)
						<tr>
							<td>
								{{$d->nama_perusahaan}}
							</td>
							<td>
								@if(strlen($d->produk)>0)
									{{$d->produk}}
								@else
									<i><u> Tidak ada keterangan </u></i>
								@endif
							</td>
							<td>
								@if(strlen($d->alamat)>0)
									{{$d->alamat}}
								@else
									<i> <u>Tidak ada alamat</u> </i>
								@endif
							</td>
							<td>
								@if(strlen($d->koordinat)>0)
									<a href="{{$d->koordinat}}" target="_blank">
										<button class="btn btn-primary text-white"> <span class="fa fa-solid fa-map"></span> Buka </button>
									</a>
								@else
									<button class="btn btn-danger text-white disabled"> Tidak ada koordinat </button>
								@endif
							</td>	
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="d-flex justify-content-center">
					{{ $data->links() }}
				</div>
			</div>

			<div class="d-flex justify-content-center mt-5">
				<h2 class="font-weight-bold">
					<b style="color:#1E0973;">
						Objek Wisata Hutan Jawa Barat
					</b>
				</h2>
			</div>
			<div class="container mt-5">
				<div class="row justify-content-center">
					<div class="col-sm">
						<div class="embed-responsive embed-responsive-1by1">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/ES8vJcUqE7s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="embed-responsive-item"></iframe>				
						</div>
					</div>
					<div class="col-sm">
						<blockquote class="twitter-tweet"><p lang="in" dir="ltr">Bahagia rasanya di hari Senin ini memulai kegiatan dengan meresmikan Sumedang Creative Center. Gedung ini merupakan investasi jangka panjang untuk mewadahi kreativitas. Insyaallah hasilnya bisa dipanen di masa yg akan datang. <a href="https://twitter.com/hashtag/JabarJuara?src=hash&amp;ref_src=twsrc%5Etfw">#JabarJuara</a> <a href="https://twitter.com/hashtag/IndonesiaJuara?src=hash&amp;ref_src=twsrc%5Etfw">#IndonesiaJuara</a> -admin- <a href="https://t.co/EZIGtOn2lP">pic.twitter.com/EZIGtOn2lP</a></p>&mdash; Ridwan Kamil (@ridwankamil) <a href="https://twitter.com/ridwankamil/status/1538840796539105281?ref_src=twsrc%5Etfw">June 20, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</div>
		</div>

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

@endif

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>