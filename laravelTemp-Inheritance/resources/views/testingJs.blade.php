@extends('layouts.masterlayout')
@section('title')
   Js-In-Blade
@endsection
@section('content')

<h1 class="text-center">Welcome to Js-Blade Page</h1>
<p class="text-center">This is a simple blog built with Laravel and Bootstrap.</p>
@endsection




{{-- ** JAVASCRIPT PRINT IN BLADE TEMPLATE --}}
@php 
$user="RUPESH TEHCHNOLOGY";
$fruits =["Apple","Banana","Grapes","Orange"] ;
@endphp
<script>
// ** PHP VARIABLE IN JAVASCRIPT PRINT
//var data ={{ $user}}   //here is showing error
//console.log(data);
//output:Uncaught SyntaxError: Unexpected identifier 'TEHCHNOLOGY

//var data =@json( $user) //this is right way 
//console.log(data);
//output:RUPESH TEHCHNOLOGY

var Adata =@json($fruits);
//console.log(Adata);

// ** This is Print in Browser Views using js foreach loop
Adata.forEach(function(entry){
   //console.log(entry);
});

//--*** Blade WAY PRINT ***  -
var Bdata ={{ Js::from($fruits) }};
console.log(Bdata);


</script>






