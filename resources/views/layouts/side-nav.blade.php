<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="{{ str_contains(Auth::user()->gender, 'female') ? asset('images/default-user-female.png') : asset('images/default-user-male.png') }}"
                            class="img-circle img-responsive" alt="{{ Auth::user()->name }}'s Photo">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>{{ Auth::user()->name }}<br>
                            <small>{{ \Str::title(join(' ', explode('-', Auth::user()->roles->first()->name))) }}</small>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">

            <li><a href="{{ route('admin.dashboard') }}" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-home"></span>
                    <p>Dashboard</p>
                </a></li>

            {{-- <li><a href="{{ route('admin.show', ['user' => Auth::user()]) }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Profile</p></a></li> --}}

            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-briefcase"></span>
                    <p>Jobs</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('admin.application.index') }}">Applications</a></li>
                </ul>
            </li>

            <li>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <a href="{{ route('admin.logout') }}" class="waves-effect waves-button" onclick="event.preventDefault();
                                this.closest('form').submit();">
                        <span class="menu-icon glyphicon glyphicon-log-out"></span>
                        <p>Logout</p>
                    </a>
                </form>
            </li>
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->
