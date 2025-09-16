<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>using name route</title>
    @vite(['resources/css/app.scss',  'resources/js/app.js'])
</head>
<body>
 
<h1>Home page</h1>
<p>this is home page using here name route using php fn route</p>
{{-- <a href="/about">About page</a> --}}
{{-- after route name change this route not work then call route name--}}
<a href="{{route('about-us')}}" class="btn btn-primary">About page after name change</a><br><br>
<a href="/" class="btn btn-danger">Home page</a><br><br>
<a href="/postpage" class="btn btn-success">postpage</a><br>

<button class="btn btn-danger"><a href="{{route('callrouteRupesh')}}">This name Route</a></button>
</body>
</html>