<div class="navbar">
    <div class="navbar-inner">
        <div class="sidebar-pusher">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="logo-box">
            <a href="{{ route('admin.dashboard') }}" class="logo-text"
                style="font-size: 17px"><span>{{ config('app.name') }}</span></a>
        </div><!-- Logo Box -->
        <div class="search-button">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i
                    class="fa fa-search"></i></a>
        </div>
        <div class="topmenu-outer">
            <div class="top-menu">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i
                                class="fa fa-bars"></i></a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                            data-toggle="dropdown">
                            <span class="user-name">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></span>
                            <img class="img-circle avatar"
                                src="{{ str_contains(Auth::user()->gender, 'female') ? asset('images/default-user-female.png') : asset('images/default-user-male.png') }}"
                                width="40" height="40" alt="">
                        </a>

                        <ul class="dropdown-menu dropdown-list" role="menu">
                            <li role="presentation">
                                <a href="#">
                                    <form method="POST" action="{{ route('admin.logout') }}">
                                        @csrf
                                        <span onclick="event.preventDefault();
                                            this.closest('form').submit();"><i class="fa fa-sign-out m-r-xs"></i>Log
                                            out</span>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="log-out waves-effect waves-button waves-classic" style="padding: 0px 0px">
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
