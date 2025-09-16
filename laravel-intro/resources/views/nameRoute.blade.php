@vite(['resources/css/app.scss',  'resources/js/app.js'])
<h2>This is calling from name Route</h2>

<button class="btn btn-danger"><a href="{{route('callrouteRupesh')}}">This name Route</a></button><br><br>

<a href="{{route('about-us')}}" class="btn btn-primary">About page after name change</a><br><br>