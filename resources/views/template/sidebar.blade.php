<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{session('nama')}}
                            <span class="user-level">{{session('username')}}</span>

                        </span>
                    </a>

                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{  Request::segment(1) == 'dashboard' ? 'active' : ''}}">
                    <a href="{{ url('/dashboard')}}" class="collapsed" >
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>

                </li>
                <li class="nav-section {{ Request::segment(1) == 'admin' || Request::segment(1) == 'petani' ? 'active' : '' }}">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>

                    <li class="nav-item {{ Request::segment(1) == 'user' ? 'active' : '' }} submenu">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-user-alt"></i>
                            <p>Penguna</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ Request::segment(1) == 'user' || Request::segment(1) == 'user' || Request::segment(1) == 'tentor' ? 'show' : '' }}" id="base">
                            <ul class="nav nav-collapse">
                                <li class="{{ Request::segment(1) == 'user' ? 'active' : '' }}">
                                    <a href="{{ url('/user')}}">
                                        <span class="sub-item ">Data Pengguna</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

            </ul>
        </div>
    </div>
</div>
