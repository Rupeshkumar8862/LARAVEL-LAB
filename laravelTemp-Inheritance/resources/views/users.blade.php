<h1>User Page</h1>

{{-- <h2>Hello  {{$name}}</h2> --}}

{{-- <h2>AGE : {{$age}}</h2> --}}

{{-- <h2>CITY:  {{$city}}</h2>  error found for js call --}}
{{-- <h2>CITY:js call  {!!$city!!}</h2> --}}

{{-- condition for default value --}}

{{-- <h2>CITY: {{ !empty($city) ? $city : 'No City'}}</h2> --}}

{{-- for multiple value show using loop --}}

{{--
 @foreach ( $alldata as $id =>$u )
<h2>{{$id}}. {{$u['name']}} | {{$u['age']}} | {{$u['city']}}</h2>
    
@endforeach 
--}}

{{-- multiple value show using loop with anchor tag --}}
@foreach ( $alldata as $id =>$u )
<h2>{{$id}}. {{$u['name']}} | {{$u['age']}} | {{$u['city']}} <a href="{{route ('view.alldata',$id)}}">show</a></h2>
    
@endforeach

