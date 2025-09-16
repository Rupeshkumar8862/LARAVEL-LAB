{{-- @include('pages.header') --}}
 {{-- <p> {{$website_name}} </p> --}}
<h2>Home : First Page</h2>
<h4>Larvel : Calculator :{{ 5+ 2}}</h4> 
<h4>Larvel : Statment print: {{ "Hello World" }}</h4> 
{{"Or directly print this"}}  <br>
{{"<h1>With tag and value print</h1>"}}<br>
{!!"<h1> tag value print</h1>"!!}
{{ "<script>alert('With tag print js')</script>" }} <br>
{{-- {!! "<script>alert('With tag value print js')</script>" !!} --}}
{{-- comment --}}

@php 
$name = "Rakib variable print";
$names = ["Rakib","Rakib2","Rakib3"];
@endphp

{{$name}}    {{---- variable print before intialize value --}}<br>
@{{$name}}   {{---- same deto print --}}<br>

{{---- loop print ----}}
<ul>
    @foreach ($names as $n)
        <li>{{$n}}</li>
    @endforeach
</ul>

{{-- **Blade loop variable for @foreach*** --}}
@php $array=["Rakib","Rakib2","Rakib3","Hello","World"];
     $arry2=['apple','banana','orange'];
     $arry3=["january","february","march"];
     $array4=["blue","green","red","yellow","white"];
     $number=[1,2,3,4,5,6,7,8,9,10];
@endphp
<ul>
    @foreach ($array as $a)
       | <li>{{$loop->index}} - {{$a}}</li>
    @endforeach
</ul>
<ul>
    @foreach ($arry2 as $a)
       | <li>{{$loop->iteration}} - {{$a}}</li>
    @endforeach
</ul>

<ul>
    @foreach ($arry3 as $a)
       | <li>{{$loop->count}} - {{$a}}</li>
    @endforeach
</ul>

{{-- loop with condition --}}
<ul>
    @foreach ($array4 as $a)
    @if($loop->first)
       | <li style="color:red">- {{$a}}</li>
       @elseif($loop->last)
       | <li style="color:green">- {{$a}}</li>
       @else
       | <li style="color:blue">{{$a}}</li>
       @endif
    @endforeach
</ul>

{{-- loop with condition even odd --}}
<ul>
    @foreach ($number as $a)
    @if($loop->even)
       | <li style="color:red">- {{$a}}</li>
       @elseif($loop->odd)
       | <li style="color:green">- {{$a}}</li>
       @else
       | <li style="color:blue">{{$a}}</li>
       @endif
    @endforeach
</ul>
  
  @include('pages.footer')

  @includeif('page-content')
  {{-- not showing error if files is not exits --}}
