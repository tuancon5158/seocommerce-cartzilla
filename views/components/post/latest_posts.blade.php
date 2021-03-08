@if($posts and (($posts->count() == 1 and $posts[0]->id !== $post->id) or $posts->count() > 1))
<section class="py-5">
	<div class="container">
		<div class="row align-items-center mb-10">
			<div class="col-12">

				<!-- Heading -->
				<h2 class="mb-4 mb-sm-0 text-center">
					Latest in
					<a href="{{ route('blog') }}">Blog</a>
				</h2>

			</div>
		</div>
		<div class="row">

			@foreach($posts as $latesPost)
				@if($latesPost->id !== $post->id)
				<div class="col-12 col-md-4">

					@include('cartzilla::components.post_box_1', ['post' => $latesPost])

				</div>
				@endif
			@endforeach

		</div>
	</div>
</section>
@endif
