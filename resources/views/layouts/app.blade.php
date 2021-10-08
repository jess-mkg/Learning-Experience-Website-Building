<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: #F5F4EB;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="js/my.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="tab icon" href="/svg/favicon-32x32.png">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div id="app">
        <nav class="navbar navbar-custom navbar-expand-md navbar-dark shadow-sm bg-cr-n">
            <div class="container">

                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <!--<div><img src="/svg/logo12.png" style="height: 50px;" class="pr-2"></div>-->
                    <div class="nav-title">Gifted & Talented Checklist</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="pt-3 collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 110%">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <ul class="navbar-nav pt-2">
                            <li class="nav-item">
                                <a href="/" class="mynav">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/start-checklist" class="mynav">Checklist</a>
                            </li>
                            <li class="nav-item">
                                <a href="/profile" class="mynav">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contacts" class="mynav">Contacts</a>
                            </li>


                        </ul>
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item n-cr">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="n-cr nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item n-cr dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="/results">
                                    {{ __('Results') }}
                                </a>
                                <a class="dropdown-item" href="/settings">
                                    {{ __('Settings') }}
                                </a>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-cr-b" style="background-color: #F5F4EB;">
            @yield('content')
        </main>
    </div>
    <br><br><br>
    <footer class="footer py-sm-1 pb-sm-2">
        <div class="container text-center py-sm-2">
            <a href="https://www.facebook.com/growingreadersandwriters" target="_blank">
                <img class="icon-socials" src="/svg/5305153_fb_facebook_facebook logo_icon.svg">
            </a>
            <a href="https://www.youtube.com/channel/UCS-TeAAF2lJzHxDkvjRgAmw/videos" target="_blank" style="padding-right: 1px;">
                <img class="icon-socials" src="/svg/5305164_play_video_youtube_youtube logo_icon.svg">
            </a>
            <a href="https://twitter.com/drmneumann">
                <img class="icon-socials" src="/svg/5305170_bird_social media_social network_tweet_twitter_icon.svg" target="_blank">
            </a>
        </div>
        <div>
            <a class="mytext" href="/privacy-policy"> Privacy Policy </a>
        </div>
    </footer>
</body>
<!--<div class="ml-4 text-center text-gray-500 sm:ml-0 valign-bottom">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})

</div>-->
<!--<div stype="margin:30px"> </div>
<div class="footer" style="background-color: #4b4a45;">
  <p>Footer</p>
</div>-->

</html>
