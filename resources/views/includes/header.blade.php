<div class="header p-r-0 bg-info">
    <div class="header-inner header-md-height">
        <a class="btn-link toggle-sidebar d-lg-none pg pg-menu text-white" data-toggle="horizontal-menu" href="#"></a>
        <div class="">
            <div class="brand inline no-border d-sm-inline-block">
                <!-- <img alt="logo" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" height="22" src="assets/img/logo_white.png" width="78"> -->
                <h4 class="bold text-white">Be Active</h4>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <!-- START User Info-->
            <div class="pull-left p-r-10 fs-14 font-heading d-lg-inline-block d-none text-white">
                <span class="semi-bold">Ashu</span> <span class="">Shelar</span>
            </div>
            <div class="dropdown pull-right">
                <button aria-expanded="false" aria-haspopup="true" class="profile-dropdown-toggle" data-toggle="dropdown" type="button"><span class="thumbnail-wrapper d32 circular inline sm-m-r-5"><img alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" height="32" src="assets/img/profiles/avatar.jpg" width="32"></span></button>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                    <!-- <a class="dropdown-item" href="#"><i class="pg-settings_small"></i> Settings</a> <a class="dropdown-item" href="#"><i class="pg-outdent"></i> Feedback</a> <a class="dropdown-item" href="#"><i class="pg-signals"></i> Help</a> -->
                    <a class="clearfix bg-master-lighter dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="pull-left">Logout</span> <span class="pull-right"><i class="pg-power"></i></span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"></form>
                    @csrf
                </div>
            </div>
            <!-- END User Info-->
        </div>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="menu-bar header-sm-height" data-hide-extra-li="4" data-pages-init='horizontal-menu'>
                <a class="btn-link toggle-sidebar d-lg-none pg pg-close" data-toggle="horizontal-menu" href="#"></a>
                <ul>
                    <li class="{{ (Request::is('dashboard') ? 'active' : '') }}">
                        <a href="{{route('index')}}" class="text-black">Dashboard</a>
                    </li>
                    <li class="{{ (Request::is('add_client') || Request::is('add_client/*') ? 'active' : '') }}">
                        <a href="{{route('add_client')}}" class="text-black"><span class="title">Add Client</span></a>
                    </li>
                    <li class="{{ (Request::is('view_client') || Request::is('view_client/*') ? 'active' : '') }}">
                        <a href="{{route('view_client')}}" class="text-black"><span class="title">View Clients</span></a>
                    </li>
                    <li class="{{ (Request::is('appointments') || Request::is('appointments/*') ? 'active' : '') }}">
                        <a href="{{route('appointments')}}" class="text-black"><span class="title">Appointments</span></a>
                    </li>
                </ul>
                {{--<a class="search-link d-flex justify-content-between align-items-center d-lg-none" data-toggle="search" href="#">Tap here to search <i class="pg-search float-right"></i></a>--}}
            </div>
        </div>
    </div>
</div>