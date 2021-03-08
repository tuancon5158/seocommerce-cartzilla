  <article><a class="blog-entry-thumb mb-3" href="#"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i> {{ $post->created_at->format('d M Y') }}</span><img src="{{ \App\Helpers\Image::resizeMedia(400, $post->thumbnail) }}" alt="{{ $post->title }}"></a>
      <div class="d-flex justify-content-between mb-2 pt-1">
          <h2 class="h5 blog-entry-title mb-0"><a href="{{ route('post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
      </div>
      <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="{{ route('post', ['slug' => $post->slug]) }}">

              <div class="fs-sm text-muted"> <a href="{{ route('post', ['slug' => $post->slug]) }}" class='blog-entry-meta-link'>{{ $post->description }}</a></div>

      </div>
      <div>
          <a href="{{ route('post', ['slug' => $post->slug]) }}" class='blog-entry-meta-link' class='blog-entry-meta-link fw-medium'>[Read more]</a>
      </div>
  </article>
