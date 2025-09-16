<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  {{-- <title>MasterLayout - @yield('title')</title> --}}
  <title>MasterLayout - @yield('title', 'Default Title')</title>
 
 {{-- <link rel="stylesheet" href="/css/style.css"> --}}
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">

@stack('style')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
</head>
<body>
  <header>
    <h1>My Website</h1>
    <nav>
      <a href="/">Home</a>
      <a href="/about">About</a>
      <a href="/contact">Contact</a>
      <a href="/post">Posts</a>
    </nav>
  </header>

  <div class="container">
    <aside>
      {{-- <ul>
        <li><a href="/home">Dashboard</a></li>
        <li><a href="/profile">Profile</a></li>
        <li><a href="#">You data</a></li>
        <li><a href="#">Settings</a></li>
      </ul> 
      dynmic content --}}

      @section('sidebar')
        <ul>
        <li><a href="/home">Dashboard</a></li>
        <li><a href="/profile">Profile</a></li>
        <li><a href="#">You data</a></li>
        <li><a href="#">Settings</a></li>
      </ul> 

       @show
    </aside>

    <main>
     <article>
        {{-- @yield('content') --}}
        {{-- @yield('content',"<h2>Default content</h2>")     --}}
        {{-- show default content with tage so use hasSection --}}
        @hasSection('content')
 @yield('content')
 @else <h2> No Content Found.</h2> @endif

      </article>

    </main>
  </div>

  <footer>
    <p>&copy; 2025 My Website. All rights reserved.</p>
  </footer>
  {{-- area define for js --}}
  @stack('scripts')
</body>
</html>
