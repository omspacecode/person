<!--Bootstrap NavBar-->

<!--Bootstrap NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">We Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> 
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="{{ Request::is('/') ? "nav-item active" : "" }}">
            <a class="nav-link" href="/">Home </a>  
          </li> 
          <li class="{{ Request::is('blog') ? "nav-item active" : "" }}">
            <a class="nav-link" href="/blog">Blog </a>   
          </li> 
          <li class="{{ Request::is('about') ? "nav-item active" : "" }}">    
            <a class="nav-link" href="/about">About</a>  
          </li>
          <li class="{{ Request::is('contact') ? "nav-item active" : "" }}">  
            <a class="nav-link" href="/contact">Contact</a>          
          </li>   
      </ul>    
 
      
          <div class="btn-group">    
              <ul class="nav navbar-nav navbar-right">   
                
                @if(Auth::check())     

                <li class="dropdown">      
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{ Auth::user()->name }}! <span class="caret"></span></a> 
                  <ul class="dropdown-menu"> 
                    <li><a href="{{ route('posts.index') }}">Posts</a></li> 
                    <li><a href="{{ route('categories.index') }}">Categories</a></li> 
                  <li><a href="{{ route('tags.index') }}">Tags</a></li>      

                    <li><a href="#">Logout</a></li>  
                  </ul>
                </li>   

                @else 

                <a href="{{ route('login') }}" class="btn btn-outline-primary"> Login </a>  

                @endif

              </ul>
            </div>
      </div>
    </nav>  