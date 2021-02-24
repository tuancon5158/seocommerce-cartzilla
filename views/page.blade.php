@extends('cartzilla::layouts.default')

@section('content')

<?php

	    $breadcrumb = array(
			[
				"text" => $page->title ?: 'Page'
			]
		);

	?>
Page
<!-- BREADCRUMB -->
{{-- @include('cartzilla::components.breadcrumb', ['links' => $breadcrumb]) --}}

<!-- CONTENT -->


@stop
