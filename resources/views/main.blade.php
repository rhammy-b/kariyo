<!DOCTYPE html>
<html lang="zxx">
    
    <head>
        @include('partials._head')
    </head>

    <body>
        @include('partials._nav') 
      
        @yield('content')

        @include('partials._instagram')
     
        @include('partials._footer')

        @include('partials._search')
        
        @include('partials._javascript')

    </body>

</html>