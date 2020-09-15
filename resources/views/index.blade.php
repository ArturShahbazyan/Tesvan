@extends("layouts.app")


@section('content')

    @include('banner')

    @include('qa')

    @include('co-workers')

    @include('partners')

    @include('customers')

    @include('team')

    @include('testiomanials')

    @include('contact_us')

@endsection

@section('scripts')
    
<script src="js/map.js"></script>

@endsection

