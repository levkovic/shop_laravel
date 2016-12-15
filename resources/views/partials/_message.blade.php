@if(Session::has('success'))

<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>

@endif

@if(Session::has('ordered'))

<div class="alert alert-info" role="alert">
	{{ Session::get('ordered') }}
</div>

@endif