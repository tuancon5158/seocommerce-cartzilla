@extends('cartzilla::layouts.default')

@section('content')

<?php

	    $breadcrumb = array(
			[
				"text" => $page->title ?: 'Page'
			]
		);

	?>
ádasd
<!-- BREADCRUMB -->
{{-- @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb]) --}}

<!-- CONTENT -->


@stop
