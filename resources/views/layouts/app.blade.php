<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'Millennial Storm')}}</title>

    <link rel="shortcut icon" href="/img/favico.ico" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: 'your-app-id',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v8.0'
            });
        };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <div id="app" class="min-vh-100">
        <header role="banner" class="body-color">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <a href="/" class="mb-n3">
                        <img src="/img/4XvRu9.svg" alt="logo" class="img-fluid d-none d-lg-block">
                    </a>
                </div>

            </div>

            <nav class="navbar navbar-expand-lg navbar-dark body-color border-bottom border-primary-opacity">
                <a href="/" class="navbar-brand d-lg-none">
                    <img src="/img/4XvRu9.svg" alt="logo" style="width: 200px; height: auto">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_toggle" aria-controls="navbar_nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                @guest
                <div class="collapse navbar-collapse justify-content-center" id="navbar_toggle">
                    <div class="navbar-nav">
                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.irl')}}">irl</a>
                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.on-the-web')}}">On the web</a>
                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.lifestyle-&-motivation')}}">Lifestyle & Motivation</a>
                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.in-my-backyard')}}">In my backyard</a>
                    </div>
                </div>
                @endguest
                @auth
                <div class="collapse navbar-collapse justify-content-between" id="navbar_toggle">

                    <div class="navbar-nav">

                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.irl')}}">irl</a>
                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.on-the-web')}}">On the web</a>
                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.lifestyle-&-motivation')}}">Lifestyle & Motivation</a>
                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.in-my-backyard')}}">In my backyard</a>

                    </div>
                    <div class="navbar-nav">
                        <a href="{{route('dashboard.index')}}" class="btn btn-primary">Dashboard</a>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </div>
                </div>
                @endauth
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <main>
                        @yield('main')
                    </main>
                </div>
                <div class="col-lg-4">
                    <aside>
                        <div class="container my-4 p-0">
                            <div class="bg-dark py-4 d-flex flex-column rounded">
                                <h5 class="text-uppercase text-primary text-center">Follow Us</h5>
                                <div class="d-flex justify-content-center mx-auto pt-2">
                                    <a href="https://www.facebook.com/MillennialStorm"><i class="fi-snsuxl-facebook text-primary px-2"></i></a>
                                    <a href="https://twitter.com/StormMillennial"><i class="fi-xnsuxl-twitter text-primary px-2 border-left border-right border-primary"></i></a>
                                    <a href="https://www.instagram.com/millennialstorm/"><i class="fi-xnsuxl-instagram text-primary px-2 border-right border-primary"></i></a>
                                    <a href="https://discord.gg/Rqgda3h"><i class="fi-xnsuxl-discord text-primary px-2"></i></a>
                                </div>
                                <a href="#" class="mx-auto pt-4">Contact</a>
                            </div>
                            <!-- Begin Mailchimp Signup Form -->


                            <div id="mc_embed_signup" class="bg-dark rounded mt-4 p-4">
                                <h5 class="text-uppercase text-primary text-center">Subscribe to the newsletter</h5>
                                <form action="https://gmail.us17.list-manage.com/subscribe/post?u=c252042967ebb332a7bee3499&amp;id=57f5708cc0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
                                    <div class="form-group pt-2">
                                        <label for="mce-EMAIL" class="text-muted">Email</label>
                                        <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="email address" required>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c252042967ebb332a7bee3499_57f5708cc0" tabindex="-1" value=""></div>
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">

                                </form>
                            </div>


                        </div>
                    </aside>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @yield('articles')
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid bg-dark mt-4">
            <div class="container d-flex flex-row justify-content-left">
                <ul class="list-group list-group-flush bg-dark">
                    <li class="list-group-item bg-dark text-primary border-0"><strong>About</strong></li>
                    <li class="list-group-item bg-dark text-primary border-0">Millennial Storm</li>
                    <li class="list-group-item bg-dark text-primary border-0">Contributors</li>
                    <li class="list-group-item bg-dark text-primary border-0">Contact</li>
                </ul>
                <ul class="list-group list-group-flush bg-dark mr-2">
                    <li class="list-group-item bg-dark text-primary border-0"><strong>Legal</strong></li>
                    <li class="list-group-item bg-dark text-primary border-0">Privacy Policy</li>
                    <li class="list-group-item bg-dark text-primary border-0">Terms of Service</li>
                    <li class="list-group-item bg-dark text-primary border-0">Code of Conduct</li>
                </ul>


            </div>
            <div class="container py-4 text-muted">
                &copy; 2020 Millennial Storm. All Rights Reserved. Hand-Coded in Aotearoa / New Zealand by Local Talent.
            </div>
        </div>
    </footer>

</body>

</html>