@extends('layouts.masterlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Profile</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="https://picsum.photos/200" alt="" class="img-thumbnail">
            </div>
            <div class="col-8">
                {{-- <p>Profile content</p> --}}
                 <h3>Name...........</h3>
                 <h3>Email.........</h3>
                 <h3>Phone..........</h3>
            </div>
        </div>
    </div>

@endsection
{{-- @section('title')
    Profile
@endsection --}}