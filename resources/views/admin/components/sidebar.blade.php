<div class="sidebar">
			
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{url('theme-padang/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="{{route('dashboard')}}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                @if (Auth::user()->role == 'admin')
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Master Data</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{route('karyawan.index')}}">
                                        <span class="sub-item">Karyawan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/buttons.html">
                                        <span class="sub-item">Departemen</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('gaji.index')}}">
                                        <span class="sub-item">Gaji</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('user.index')}}">
                                        <span class="sub-item">User</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a href="widgets.html">
                            <i class="fas fa-desktop"></i>
                            <p>Inventaris</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{route('gaji.index')}}">
                            <i class="fas fa-desktop"></i>
                            <p>Gaji Saya</p>
                        </a>
                    </li>
                @endif
                
            </ul>
        </div>
    </div>
</div>