@extends('../login')

@section('auth_body')

		<div class="d-flex justify-content-center align-items-center h-100">
			<div class="card border-0 shadow-sm">

				<div class="card-body">
					<h3 class="text-center font-weight-bold">
						Masuk sebagai Admin
					</h3>
					<hr>
					<form method="post" action="{{route('login_post')}}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label> Email </label>
							<input type="text" name="email" class="form-control @error('email') is-invalid @enderror 
							">
							@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror

							<label> Password </label>
							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
							@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
							

							@if($errors->first('log_err'))
							<div class="bg-danger p-2 mt-2 rounded text-white text-center">
								{{ $errors->first('log_err') }}
							</div>
							@endif

							<button type="submit" class="mt-2 btn w-100 btn-primary text-white"> Masuk </button>
						</div>
					</form>
				</div>
			</div>
		</div>



@endsection