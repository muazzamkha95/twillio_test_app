<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
            <div class="user-profile">
                <div class="dropdown user-pro-body">
                <div><img src="{{asset('admin/plugins/images/user-dummy.jpg')}}" alt="user-img" class="img-circle"></div>
                  <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                      <ul class="dropdown-menu animated flipInY">
                        <li><a href=""><i class="fa fa-home fa-lg"></i> Visit Home Page</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="waves-effect"><i class="fa fa-power-off"></i> Logout</a></li>
                      </ul>
                </div>
            </div>

            <ul class="nav" id="side-menu">
                <li><a href="{{route('admin.panel')}}" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"></i> <span class="hide-menu">Dashboard</span></a></li>
            </ul>
        {{-- <ul class="nav" id="side-menu">
            <li><a href="{{route('admin.panel')}}" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"></i> <span class="hide-menu">Dashboard</span></a></li>
            <li> <a href="{{route('admin.companies')}}" class="waves-effect"><i class="mdi mdi-account-circle fa-fw" data-icon="v"></i> <span class="hide-menu"> Manage<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">

                    <li> <a href="{{route('admin.companies')}}"><i class="mdi mdi-plus fa-fw"></i><span class="hide-menu"> Companies</span></a> </li>
                    <li> <a href="{{route('admin.jobs')}}"><i class="mdi mdi-plus fa-fw"></i><span class="hide-menu"> Job</span></a> </li>
                    <li> <a href="{{route('admin.blog')}}"><i class="mdi mdi-plus fa-fw"></i><span class="hide-menu"> blog</span></a> </li>

                </ul>
            </li>
            <li class="devider"></li>
            <li><a href="{{route('admin.adduser')}}" class="waves-effect"><i class="mdi mdi-plus fa-fw"></i> <span class="hide-menu">Add Users</span></a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>



        </ul> --}}
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
