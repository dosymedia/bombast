@include('partials.header')

      @if(Session::has('message'))
        <p class="alert"> {{Session::get('message')}} </p>
      @endif
     
     @yield('content')
    
@include('partials.footer')
