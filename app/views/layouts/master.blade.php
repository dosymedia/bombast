<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> </title>

</head>

  <body>
    <header>
      <nav class="navigation">
        <ul>
          @section('navigation')
          <li> <a href="/">Home</a>           </li>
          <li> <a href="/about">About</a>     </li>
          <li><a href="user/register">Register</a></li>
          <li><a href="user/login">Login</a>  </li>
          @show
        </ul>
      </nav>
    </header>

    <div class="container">
      @if(Session::has('message'))
        <p class="alert"> {{Session::get('message')}} </p>
      @endif
     
     @yield('content')
    
     
      <div class="sidebar">
         @yield('sidebar')
      </div>

      
      <footer>
        <p>&copy; Terri Morgan, 2013-2014 </p>
      </footer>
    </div>
  </body>
</html>