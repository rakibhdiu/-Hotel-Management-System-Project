<header>
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('room')}}">Our room</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('blog')}}">Blog</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                         </li>
                         @if(Auth::check())
                         <li>
                             <a style="font-size:16px;color: rgb(1, 1, 1);text-transform: uppercase; padding-right:5px;" href="{{ route('logout') }}" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                             <a style="font-size:16px;color: rgb(1, 1, 1);text-transform: uppercase;"
                             href="{{ auth()->check() && auth()->user()->utype === 'ADM' ? route('admin.dashboard')
                         : route('dashboard') }}">Dashboard</a>
                         </li>
                     @else
                         <li><a style="font-size:16px;color: rgb(1, 1, 1);text-transform: uppercase; padding-right:5px;" href="{{ route('login') }}">Login</a></li>
                         <li><a style="font-size:16px;color: rgb(1, 1, 1);text-transform: uppercase;" href="{{ route('register') }}">Sign up</a></li>
                     @endif
                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>
 <!-- end header inner -->