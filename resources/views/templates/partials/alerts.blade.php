@if(Session::has('info'))
	<div class="alert alert-info" role="">
		{{ Session::get('info') }}
	</div>
@endif