@extends('layouts.masterlayout')
@section('content')
<h2>Js inheri Home Page</h2>
<p>The quick brown fox jumps over the lazy dog</p>


<h1 class="text-center">testing page</h1>
<p class="text-center">This is a simple blog built with Laravel and Bootstrap.</p>
@endsection
@section('title')
    Js-inheri-Home
@endsection
@push('scripts')
    <script src="/example.js"></script>  
    <script src="/bootstrap.js"></script>  
    <script src="/jquery.js"></script>  

@endpush
{{-- use multiple push   --}}
@push('scripts')
    <script src="/vue.js"></script>  
    <script src="/axios.js"></script>
@endpush


