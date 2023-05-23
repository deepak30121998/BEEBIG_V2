<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{url('admin/assets/images007/Logo/transparent-logo.png')}}" alt="" style="height: 80px;">
            </span>
            <span class="logo-lg">
                <img src="{{url('admin/assets/images007/Logo/transparent-logo.png')}}" alt="" style="height: 80px;">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('home')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{url('admin/assets/images007/Logo/transparent-logo.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{url('admin/assets/images007/Logo/transparent-logo.png')}}" alt="" style="height: 80px;">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('dashboard') }}">
                        <i class="mdi mdi-speedometer"></i> <span data-key="t-layouts">Dashboard</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.roles.index') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-layouts">Role</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.permissions.index') }}">
                        <i class="mdi mdi-head-lightbulb"></i> <span data-key="t-layouts">Permission</span>
                    </a>
                </li>

                @canany('User access','User add','User edit','User delete')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="mdi mdi-account-multiple-outline"></i> <span data-key="t-layouts">User</span>
                    </a>
                </li>
                @endcanany

                @canany('Post access','Post add','Post edit','Post delete')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.posts.index')}}">
                        <i class="mdi mdi-note"></i> <span data-key="t-layouts">Post</span>
                    </a>
                </li>
                @endcanany

                @can('Lead Access')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.leads.index') }}">
                        <i class="mdi mdi-database"></i><span data-key="t-layouts">Leads</span>
                    </a>
                </li>
                @endcanany

                @can('Newsletter Access')
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('admin.newsletter.subscriber.index') }}">
                            <i class="mdi mdi-database"></i><span data-key="t-layouts">Newsletter Subscriber</span>
                        </a>
                    </li>
                @endcan

                @can('Pages')
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('admin.pages.index') }}">
                            <i class="mdi mdi-database"></i><span data-key="t-layouts">Pages</span>
                        </a>
                    </li>
                @endcan

                {{-- @canany('Mail access','Mail edit')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.mail.index')}}">
                        <i class="mdi mdi-spin mdi-cog-outline fs-22"></i> <span data-key="t-layouts">Setting</span>
                    </a>
                </li>
                @endcanany --}}


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
