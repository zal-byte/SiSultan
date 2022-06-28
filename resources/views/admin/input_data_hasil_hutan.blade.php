@extends('../dashboard')

@section('body_dashboard')

	@php 
	use App\Models\KotaModel;
	$kota = KotaModel::all();
	@endphp

	<div class="container mt-2">
		<div class="card border-0 shadow">
			<div class="card-body">
				<form method="post" action="{{route('postInput_data_hasil_hutan')}}" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm">
							<label>Longtitude</label>
							<input type="text" name="longtitude" class="form-control" placeholder="Longtitude">
						</div>
						<div class="col-sm">
							<label>Latitude</label>
							<input type="text" name="latitude" class="form-control" placeholder="Latituded">
						</div>
					</div>
					<div class="form-group">
						<label>
							Nama perusahaan
						</label>
						<input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama perusahaan" required>
					</div>
					<div class="form-group">
						<label>
							Alamat
						</label>
						<textarea class="form-control" rows="5" name="alamat" placeholder="Alamat"></textarea>
					</div>
					<div class="form-group">
						<label> No Telp. / Fax.</label>
						<input type="text" name="telp_fax" class="form-control" placeholder="No Telp. Fax" required>
					</div>	
					<div class="form-group">
						<label>
							Produk
						</label>
						<input type="text" name="produk" class="form-control" placeholder="Produk" >	
					</div>
					<div class="form-group">
						<label>
							Kapasitas
						</label>
						<input type="number" class="form-control" name="kapasitas" placeholder="Kapasitas">
					</div>
					<div class="form-group">
						<label>
							Nama penerbit FAKO
						</label>
						<input type="text" name="nama_penerbit" class="form-control" placeholder="Nama penerbit FAKO">
					</div>
					<div class="form-group">
						<label>
							NO. REG
						</label>
						<input type="text" name="no_reg" class="form-control" placeholder="No REG" required>
					</div>
					<div class="form-group">
						<label>
							Masa berlaku
						</label>
						<input type="date" class="form-control" name="masa_berlaku" placeholder="Masa berlaku" required>
					</div>
					<div class="form-group">
						<label>
							Pemilik
						</label>
						<input type="text" name="pemilik" class="form-control" placeholder="Pemilik">
					</div>

					<div class="form-group">
						<label>
							Wilayah
						</label>
						<select class="form-select" name="wilayah">
							@if(isset($kota))
								@foreach($kota as $data)
								<option value="{{$data->id}}"> {{$data->nama}}
								</option>
								@endforeach
							@endif
						</select>
					</div>


					@if(session()->has('success'))
						<div class="mt-2 mb-2 bg-success p-2 rounded text-white">
							{{session()->get('success')}}
						</div>
					@elseif(session()->has('error'))
						<div class="mt-2 mb-2 bg-danger p-2 rounded text-white">
							{{ session()->get('error')}}
						</div>
					@endif



					<div class="d-flex justify-content-center mt-2">
						<button type="submit" class="btn btn-primary text-white" style="margin-right:10px;"> Simpan </button>
						<a href="{{route('dashboard')}}"><button type="button" class="btn btn-secondary"> Kembali </button></a>
					</div>
				</form>

			</div>
		</div>
	</div>

@endsection

