<header id="myHeader">
    <div class="container-fullwidth clearfix">
        <nav class="navbar navbar-expand-lg float-right">
             
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
 
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <div class="header-pos">
                     <ul class="navbar-nav mr-auto">
 
                         @guest
 
                         <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                         @else
                         <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 Logged in as: {{ Auth::user()->email }} <span class="caret"></span>
                             </a>
 
                             <div class="dropdown-menu dropdown-menu-right kp--bg" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                         document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
 
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                             </div>
                         </li>
                         @endguest
                     </ul>
                 </div>
             </div>
         </nav>
     </div>
 </header>
 <div class="container-fullwidth clearfix">
     @if ($message = Session::get('success'))
         <div class="alert alert-success" style="margin-bottom: 0">
             {{$message}}
         </div>
     @endif
     @if ($message = Session::get('failure'))
         <div class="alert alert-danger" style="margin-bottom: 0">
             {{$message}}
         </div>
     @endif
 </div>
 