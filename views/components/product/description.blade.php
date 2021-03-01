    <div class="row">
        <ul class="nav nav-tabs mb-3" role="tablist">
            @if( $product->content )

            <li class="nav-item"><a class="nav-link active" href="#description" data-bs-toggle="tab" role="tab">Description</a></li>
            @endif
            @foreach( $product->attributes as $attribute)
            @if($attribute->guide)

            <li class="nav-item"><a class="nav-link " href="#guide-{{ $loop->index }}" data-bs-toggle="tab" role="tab"> {{ $attribute->name }}</a></li>
            @endif
            @endforeach
        </ul>
        <div class="tab-content text-muted fs-sm">
            @if( $product->content )
            <div class="tab-pane fade show active" id="description" role="tabpanel"> {!! $product->content !!}</div>
            @endif
            @foreach( $product->attributes as $attribute)
            {{-- {{ $loop->index }} --}}
            @if($attribute->guide)
            <div class="tab-pane fade" id="guide-{{ $loop->index }}" role="tabpanel"> {!! $attribute->guide !!}</div>
            @endif
            @endforeach
        </div>
    </div>
