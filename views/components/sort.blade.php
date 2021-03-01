<?php
	$sortData = array(
		[
			"title" => "Newest",
			"sort" => "created_at",
			"value" => "desc"
		],
		[
			"title" => "Oldest",
			"sort" => "created_at",
			"value" => "asc"
		],
		[
			"title" => "Highest Price",
			"sort" => "price",
			"value" => "desc"
		],
		[
			"title" => "Lowest Price",
			"sort" => "price",
			"value" => "asc"
		],
		[
			"title" => "Title (A-Z)",
			"sort" => "title",
			"value" => "asc"
		],
		[
			"title" => "Title (Z-A)",
			"sort" => "title",
			"value" => "desc"
		]
	);
?>
<div class="d-flex align-items-center flex-nowrap ">
    <label class="text-light fs-sm opacity-75 text-nowrap me-2 d-none d-sm-block" for="sorting">Sort by:</label>
    <select value="price&desc" onchange="sort(1)" id="input-order-type" class="form-select" id="sorting">
        <option value="default">Default</option>
        @foreach($sortData as $sort)
        <option value="{{  $sort['sort'] }}&{{  $sort['value'] }}"> {{ $sort['title'] }}</option>
        @endforeach

    </select>
</div>
{{-- <div class="d-flex pb-3"><a class="nav-link-style nav-link-light me-3" href="#"><i class="ci-arrow-left"></i></a><span class="fs-md text-light">1 / 5</span><a class="nav-link-style nav-link-light ms-3" href="#"><i class="ci-arrow-right"></i></a></div>
        <div class="d-none d-sm-flex pb-3"><a class="btn btn-icon nav-link-style nav-link-light me-2" href="shop-grid-ls.html"><i class="ci-view-grid"></i></a><a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100" href="#"><i class="ci-view-list"></i></a></div> --}}

<script type="text/javascript">
    const urlParams = new URLSearchParams(window.location.search);
    let value = ''
    var entries = urlParams.entries();
    for (item of entries) {
        if (item[0] === 'sort') {
            value = item[1]
        }
        if (item[0] === 'sort_type') {
            value = `${value}&${item[1]}`
        }
    }
    if (value !== '' & value !== '&') {
        document.querySelector('#input-order-type').value = value
    } else {
        document.querySelector('#input-order-type').value = 'default'
    }

    function sort(index) {
        const value = $('#input-order-type').val();
        var href = new URL(window.location.href);
        if (value !== 'default') {
            let valueSplit = value.split('&')
            href.searchParams.set('sort', valueSplit[0]);
            href.searchParams.set('sort_type', valueSplit[1]);
        } else {
            href.searchParams.set('sort', '');
            href.searchParams.set('sort_type', '');
        }

        window.location.href = href.href;

    }

</script>
