@extends('baby::layouts.default')

@section('content')

	@include('baby::components.payment.failure', ['payment' => $payment])
	
@endsection
