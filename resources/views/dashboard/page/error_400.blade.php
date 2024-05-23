@extends('dashboard.layouts.fullwidth')

@section('content')
<div class="col-md-6">
	<div class="error-page">
		<div class="error-inner text-center">
			<div class="dz-error" data-text="400">400</div>
			<h2 class="error-head">We are sorry. But the page you are looking for cannot be found.</h2>
			<a href="{{route('home')}}" class="btn btn-secondary">BACK TO HOMEPAGE</a>
		</div>
	</div>
</div>
@endsection
