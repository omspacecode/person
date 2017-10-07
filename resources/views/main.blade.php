<!DOCTYPE html> 
<html lang="en">
<head>
  @include('partials._head')    
</head> 

<title>Laravel Blog @yield('title')</title>   <!--Change this title for each page--> 
<body> 

  @include('partials._nav') 
 

  <div class="container">     

  	@include('partials._messages')   

    @yield('content')    

    @include('partials._footer') 

  </div> <!--End of container-->   

    @include('partials._javascript')   

    @yield('scripts') 

</body>
</html> 