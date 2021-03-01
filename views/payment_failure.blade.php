@extends('cartzilla::layouts.default')

@section('content')

	@include('cartzilla::components.payment.failure', ['payment' => $payment])
	
@endsection
