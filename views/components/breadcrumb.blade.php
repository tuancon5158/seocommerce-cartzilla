{{-- <nav class="py-5">
	<div class="container">

		<!-- Breadcrumb -->
		<div class="row justify-content-center justify-content-md-start mb-0 font-size-xs text-gray-400">
			<div class="col-auto breadcrumb-item pr-1 pl-1">
				<a class="text-gray-400 align-top" href="/">Home</a>
			</div>
			
			@if($links)
				@foreach($links as $link)
					@if($link['text'])
						<div class="col-auto breadcrumb-item active px-1">
							<a class="text-gray-400 align-top" href="{{ array_key_exists('link', $link) ? $link['link'] : '#' }}">
								{{ $link['text'] }}
							</a>
						</div>
					@endif
				@endforeach
			@endif
		</div>

	</div>
</nav> --}}
