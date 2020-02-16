<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="{{route('admin.panel')}}">
                <!-- Logo icon image, you can use font-icon also --><b>
                <!--This is dark logo icon--><img src="{{asset('admin/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo"  width="30"/><!--This is light logo icon--><img src="{{asset('admin/plugins/images/admin-logo-dark.png')}}" alt="home" class="light-logo"  width="30"/>
             </b>
                <!-- Logo text image you can use text also --><span class="hidden-xs">
                <!--This is dark logo text--><img src="{{asset('admin/plugins/images/admin-text.png')}}" alt="home" class="dark-logo"  width="150"/><!--This is light logo text--><img src="{{asset('admin/plugins/images/admin-text-dark.png')}}" alt="home" class="light-logo"  width="150"/>
             </span> </a>
        </div>
        <!-- /Logo -->
        <!-- Search input and Toggle icon -->
        <ul class="nav navbar-top-links navbar-left">
            <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a> </form>
            </li>
            <li class="dropdown">
            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{asset('admin/plugins/images/user-dummy.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::user()->name}}</b><span class="caret"></span> </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li>
                        <div class="dw-user-box">
                            <div class="u-img"><img src="{{asset('admin/plugins/images/user-dummy.jpg')}}" alt="user" /></div>
                            <div class="u-text"><h4>{{Auth::user()->name}}</h4><p class="text-muted">{{Auth::user()->email}}</p></div>
                        </div>
                    </li>
                    <li><a href=""><i class="fa fa-home"></i> Visit Home Page</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="waves-effect"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>

            <!-- /.dropdown -->
        </ul>
    </div>
</nav>
