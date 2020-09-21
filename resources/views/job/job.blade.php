@extends("layouts.app")

@section('styles')

       <link rel="stylesheet" type="text/css" href="/css/job_hire.css">
       <link rel="stylesheet" type="text/css" href="/css/job_apply.css">
       
@endsection



@section('content')

    @include('job.job_banner')

    @include('job.job_hire')
    
    @include('job.job_apply')

@endsection

@section('scripts')

   <script src="js/job/job_apply.js"></script>
       
@endsection