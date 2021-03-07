<p>{{ $address->first_name }} {{ $address->last_name }}, {{ $address->email }},

@if($address->phone)
{{ $address->phone }},
@endif

{{ $address->address1 }},
@if($address->address2)
    Address2: {{ $address->address2 }},
@endif
    {{ $address->city }}, {{ $address->state }}, {{ $address->zip }}, {{ \App\Helpers\Country::getCountryNameByCode($address->country_code) }}</p>
