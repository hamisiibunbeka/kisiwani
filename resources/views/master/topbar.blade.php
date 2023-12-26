<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">
            
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    {{-- <img src="{{ (!empty($profileData->photo) ? url('uploads/user_img/'.$profileData->photo)
                    : url('uploads/user_img/default.png')) }}" alt="user-image" class="rounded-circle"> --}}
                    <span class="pro-user-name ms-1">
                        KHALID <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <a href="{{ route('edit.profile') }}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>
        </ul>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <span class="">
                    <a href="{{ route('dashboard') }}" class="btn btn-danger text-light mt-2">
                        Dashboard
                    </a>
                </span>

                <span class="">
                    <a href="{{ route('logout') }}" class="btn btn-secondary btn-sm text-light mt-2">
                        logout
                    </a>
                </span>
            </li>

            <center>
                <li class="">
                    <span class="shortcuts">
                        <a href="{{ route('pos.create') }}" class="btn btn-success btn-sm text-light mt-2">
                            POS
                        </a>
                    </span>

                    <span class="shortcuts">
                        <a href="{{ route('pos') }}" class="btn btn-primary btn-sm text-light mt-2">
                            Sales Report
                        </a>
                    </span>

                    
                </li>
            </center>
        </ul>   
    </div>
</div>

<style>
    .quick-btn{
        display: inline-block;
        text-decoration: none;
    }

    .shortcuts{
        margin-left: 20px;
    }
</style>