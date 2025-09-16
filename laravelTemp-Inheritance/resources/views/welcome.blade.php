@extends('layouts.masterlayout')
<h2>Hello{{$Name}}</h2>
{{-- @section('content')
    <h2>Home Page </h2> 
    <p>
        This is a simple web application built on the Laravel web framework.
        The application is just a simple demonstration of how to use Laravel's
        features to build a simple CRUD application.
    </p>
    @endsection --}}
{{-- here is comming default content --}}

@section('title')
    Home
@endsection

@section('sidebar')
@parent
<p>
    This is a simple web application built on the Laravel web framework.
    The application is just a simple demonstration of how to use Laravel's
   @endsection
 @push('style')
<link rel="stylesheet" href="/css/style2.css">
 @endpush

