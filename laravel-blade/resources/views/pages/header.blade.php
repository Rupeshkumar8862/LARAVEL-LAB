<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<header class="container-fluid bg-primary text-white p-3">
    <div class="container">
        <h1>My Website</h1>
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

 {{-- <p> {{$website_name}} </p> --}}
     
    {{-- @foreach ($fruits as $n  )
        <p>  {{$n}} </p>
        
    @endforeach --}}


@forelse ($fruits as $key => $value )
<p> {{ $key}}-{{ $value }}</p>
@empty
<p>No value found.</p>
@endforelse