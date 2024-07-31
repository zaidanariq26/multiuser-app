@extends('layouts.main')
@section('content')
	<div class="container py-5">
		<div class="w-50 border rounded p-3 mx-auto">
			<h1>Login</h1>
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form action="/login" method="post">
				@csrf
				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="email" name="email" class="form-control">

					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control">

					<div class="mb-3 d-grid">
						<button class="btn btn-primary" name="submit" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection
