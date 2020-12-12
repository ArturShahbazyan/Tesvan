@extends("layouts.app")

@section('styles')

<link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="/css/slick.css">
<link rel="stylesheet" type="text/css" href="/css/qa.css">
<link rel="stylesheet" type="text/css" href="/css/co-workers.css">
<link rel="stylesheet" type="text/css" href="/css/customers.css">
<link rel="stylesheet" type="text/css" href="/css/team.css">
<link rel="stylesheet" type="text/css" href="/css/testiomanials.css">
<link rel="stylesheet" type="text/css" href="/css/partners.css">
<link rel="stylesheet" type="text/css" href="/css/contact_us.css">


@endsection


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

<script src="js/blockRotate.js"></script>
<script src="js/slick.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/map.js"></script>
<script src="js/customSlick.js"></script>
<script src="js/home_validation.js"></script>

@endsection
