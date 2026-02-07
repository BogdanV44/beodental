<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav id="top-header-line" class="navbar-expand-lg">
            <div class="container">
                <ul class="d-flex gap-3">
                    @if(!Auth::check())
                        <li>
                            <a href="{{route('login')}}">Login</a>
                        </li>
                    @else
                        @if(auth()->user()->fk_role_id < 3)
                            <li>
                                <a href="{{url(\App\Filament\Resources\Appointments\AppointmentResource::getUrl('index'))}}">Admin</a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('appointments.index')}}">Appointments</a>
                            </li>
                        @endif

                        <li>
                            <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                @csrf
                                <a  href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="..">
                    <img src="{{asset('images/logo.svg')}}" width="200px" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            @foreach($menu as $page)
                                @if(!$page->has_submenu)
                                    <li class="nav-item"><a class="nav-link" href="{{route($page->route)}}">{{$page->name}}</a></li>
                                    @continue;
                                @endif

                                <li class="nav-item submenu">
                                    <a class="nav-link" href="{{route($page->route)}}">{{$page->name}}</a>
                                    <ul>
                                        @foreach($page->children as $childPage)
                                            <li class="nav-item"><a class="nav-link" href="{{route($childPage->route)}}">{{$childPage->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach

                            <li class="nav-item highlighted-menu"><a class="nav-link" href="{{route('appointment')}}">book appointment</a></li>
                        </ul>
                    </div>
                    <!-- Let’s Start Button Start -->
                    <div class="header-btn d-inline-flex">
                        <a href="{{route('appointment')}}" class="btn-default">book appointment</a>
                    </div>
                    <!-- Let’s Start Button End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
