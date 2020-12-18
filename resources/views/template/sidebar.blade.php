<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/img/profile.png" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ session('nama') }}
                            <span class="user-level">{{ session('username') }}</span>

                        </span>
                    </a>

                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}" class="collapsed">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>

                </li>
                <li
                    class="nav-section {{ Request::segment(1) == 'admin' || Request::segment(1) == 'petani' ? 'active' : '' }}">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>


                <li class="nav-item {{ Request::segment(1) == 'user' ? 'active' : '' }}">
                    <a href="{{ url('/user') }}" class="collapsed">
                        <i class="fas fa-user-alt"></i>
                        <p>Pengguna</p>
                    </a>

                </li>

                <li class="nav-item {{ Request::segment(1) == 'lahan' ? 'active' : '' }}">
                    <a href="{{ url('/lahan') }}" class="collapsed">
                        <i class="fas fa-th-large"></i>
                        <p>Data Lahan</p>
                    </a>

                </li>

                <li class="nav-item {{ Request::segment(1) == 'pupuk' ? 'active' : '' }}">
                    <a href="{{ url('/pupuk') }}" class="collapsed">
                        <i class="fas fa-leaf"></i>
                        <p>Pupuk dan Pestisida</p>
                    </a>

                </li>
                <li
                    class="nav-item {{ Request::segment(1) == 'penyakit' || Request::segment(1) == 'gejala' ? 'active' : '' }} submenu">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-bug"></i>
                        <p>Penyakit dan Hama</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::segment(1) == 'penyakit' || Request::segment(1) == 'gejala' || Request::segment(1) == 'rekomendasi'? 'show' : '' }}"
                        id="tables">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::segment(1) == 'penyakit' ? 'active' : '' }}">
                                <a href="{{ url('/penyakit') }}">
                                    <span class="sub-item ">Data Penyakit</span>
                                </a>
                            </li>
                            <li class="{{ Request::segment(1) == 'gejala' ? 'active' : '' }}">
                                <a href="{{ url('/gejala') }}">
                                    <span class="sub-item ">Data Gejala</span>
                                </a>
                            </li>
                            <li class="{{ Request::segment(1) == 'rekomendasi' ? 'active' : '' }}">
                                <a href="{{ url('/rekomendasi') }}">
                                    <span class="sub-item ">Rekomendasi Pupuk</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ Request::segment(1) == 'cabai' ? 'active' : '' }}">
                    <a href="{{ url('/cabai') }}" class="collapsed">
                        <i class="fas fa-air-freshener"></i>
                        <p>Jenis Cabai</p>
                    </a>

                </li>

                <li class="nav-item {{ Request::segment(1) == 'artikel' ? 'active' : '' }}">
                    <a href="{{ url('/artikel') }}" class="collapsed">
                        <i class="fas fa-book"></i>
                        <p>Artikel</p>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>
