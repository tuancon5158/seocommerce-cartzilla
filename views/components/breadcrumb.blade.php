<nav aria-label="breadcrumb">
    <ol class="breadcrumb flex-lg-nowrap">
        <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="ci-home"></i>Home</a></li>

        @if($links)
        @foreach($links as $link)
        @if($link['text'])
        <li class="breadcrumb-item text-nowrap active {{ isset($color) ? 'text-light': ''}}" aria-current="page">
            <a href="{{ array_key_exists('link', $link) ? $link['link'] : '#' }}">
                {{ $link['text'] }}</a></li>
        {{-- <div class="col-auto breadcrumb-item active px-1">
            <a class="text-gray-400 align-top" href="{{ array_key_exists('link', $link) ? $link['link'] : '#' }}">
        {{ $link['text'] }}
        </a>
        </div> --}}
        @endif
        @endforeach
        @endif
        {{-- <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
        </li>
        <li class="breadcrumb-item text-nowrap active" aria-current="page">Addresses</li> --}}
    </ol>
</nav>
