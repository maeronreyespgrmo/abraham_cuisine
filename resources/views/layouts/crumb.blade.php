@if($page['crumb'])
	@foreach($page['crumb'] as $key => $value)
		@if($key === array_key_last($page['crumb']))
			<li class="breadcrumb-item active">{{ $key }}</li>
        @else
			<li><a href="{{ $value }}">{{ $key }}</a></li>
		@endif
	@endforeach
@endif