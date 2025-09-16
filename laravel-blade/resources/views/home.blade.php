{{-- @include('pages.header') --}}
{{-- @include('pages.header',['website_name' => 'rupeshtechnologies.com']) --}}
  {{-- with value --}}

  
@php  $fruits=["apple","banana","orange","Grapes"] ;
$Booean=true;
$unlessValue=false;
 @endphp

{{-- @php  $fruits=[]  @endphp --}}
{{-- @include('pages.header',['fruits'=>$fruits])  --}}{{-- with Array value --}}

{{-- when value true then inlcudeWhen is run --}}
@includeWhen($Booean,"pages.header",['names'=>$fruits])

{{-- if value false then inlcudeUnless is run --}}
{{-- @includeUnless($unlessValue,"pages.header",['names'=>$fruits]) --}}

<h2>Home Page</h2>

@include('pages.footer')

@includeif('pages-content')
{{-- not showing error if files is not exits --}}