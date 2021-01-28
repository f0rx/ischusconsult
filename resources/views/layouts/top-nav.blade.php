<div class="navbar">
    <div class="navbar-inner">
        <div class="sidebar-pusher">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="logo-box">
            <a href="{{ route('admin.dashboard') }}" class="logo-text" style="font-size: 17px"><span>{{ config('app.name') }}</span></a>
        </div><!-- Logo Box -->
        <div class="search-button">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
        </div>
        <div class="topmenu-outer">
            <div class="top-menu">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                        <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                            <li><p class="drop-title">You have 4 new  messages !</p></li>
                            <li class="dropdown-menu-list slimscroll messages">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <div class="msg-img"><div class="online on"></div><img class="img-circle" src="{{ asset('images/avatar2.png') }}" alt=""></div>
                                            <p class="msg-name">Sandra Smith</p>
                                            <p class="msg-text">Hey ! I'm working on your project</p>
                                            <p class="msg-time">3 minutes ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img"><div class="online off"></div><img class="img-circle" src="{{ asset('images/avatar4.png') }}" alt=""></div>
                                            <p class="msg-name">Amily Lee</p>
                                            <p class="msg-text">Hi David !</p>
                                            <p class="msg-time">8 minutes ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img"><div class="online off"></div><img class="img-circle" src="{{ asset('images/avatar3.png') }}" alt=""></div>
                                            <p class="msg-name">Christopher Palmer</p>
                                            <p class="msg-text">See you soon !</p>
                                            <p class="msg-time">56 minutes ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img"><div class="online on"></div><img class="img-circle" src="{{ asset('images/avatar5.png') }}" alt=""></div>
                                            <p class="msg-name">Nick Doe</p>
                                            <p class="msg-text">Nice to meet you</p>
                                            <p class="msg-time">2 hours ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img"><div class="online on"></div><img class="img-circle" src="{{ asset('images/avatar2.png') }}" alt=""></div>
                                            <p class="msg-name">Sandra Smith</p>
                                            <p class="msg-text">Hey ! I'm working on your project</p>
                                            <p class="msg-time">5 hours ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img"><div class="online off"></div><img class="img-circle" src="{{ asset('images/avatar4.png') }}" alt=""></div>
                                            <p class="msg-name">Amily Lee</p>
                                            <p class="msg-text">Hi David !</p>
                                            <p class="msg-time">9 hours ago</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                            <span class="user-name">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></span>
                            <img class="img-circle avatar"
                                src="{{ str_contains(Auth::user()->gender, 'female')
                                    ? asset('images/default-user-female.png')
                                    : asset('images/default-user-male.png') }}" width="40" height="40" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-list" role="menu">
                            <li role="presentation"><a href="{{ route('admin.show', ['user' => Auth::user()]) }}"><i class="fa fa-user"></i>Profile</a></li>
                            <li role="presentation"><a href="#"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                            <li role="presentation" class="divider"></li>
                            {{-- <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li> --}}
                            <li role="presentation">
                                <a href="#">
                                    <form method="POST" action="{{ route('admin.logout') }}">
                                        @csrf
                                        <span onclick="event.preventDefault();
                                            this.closest('form').submit();"><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"
                            class="log-out waves-effect waves-button waves-classic" style="padding: 0px 0px">
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <span onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                            style="display: flex;padding: 20px 18px;margin: auto">
                                        <i class="fa fa-sign-out m-r-xs m-t-xxs"></i>
                                        Log out
                                </span>
                            </form>
                        </a>
                    </li>
                </ul><!-- Nav -->
            </div><!-- Top Menu -->
        </div>
    </div>
</div><!-- Navbar -->
