
        <aside class="sidebar-wrapper bg-primary">
            <nav class="navbar flex-column align-items-start">
                <a href="javascript:void(0)" class="closebtn d-lg-none" onclick="closeNav()">&times;</a>
                <div class="brand text-center w-100">
                    <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1625737169/icons/Group_11434_1_kq2afd.png" class="img-fluid" alt="Tradelenda Logo">
                </div>
                <hr>
                <ul class="navbar-nav w-100">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.dashboard')}}">
                            <i class="fa fa-pie-chart pr-1"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.loans')}}"><i class="fa fa-signal pr-1"></i> Loans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.userlist')}}">
                            <i class="fa fa-users pr-1"></i> Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.notifications')}}">
                            <i class="fa fa-bell pr-1"></i>&nbsp;<span>Notifications</span> <span class="badge badge-light">{{count(auth()->guard('admin')->user()->unreadNotifications)}}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.admins')}}"><i class="fa fa-user pr-1"></i> Account</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.payments')}}"><i class="fa fa-money pr-1"></i>Payments</a>
                    </li>

                    <ul class="list-unstyled components">
                       {{--  <li class="nav-item">
                            <a href="#place" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-street-view"></i>&nbsp;<span>Places</span></a>
                            <ul class="collapse list-unstyled" id="place">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.countries')}}"><i class="fa fa-map-marker"></i>&nbsp;Countries</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.states')}}"><i class="fa fa-map-marker"></i>&nbsp;States</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.cities')}}"><i class="fa fa-map-marker"></i>&nbsp;Cities</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li  class="nav-item">
                            <a class="nav-link" href="{{route('admin.settings')}}" ><i class="fa fa-cogs"></i>&nbsp;<span>Settings</span></a>
                        </li>
                    </ul>

                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.logout')}}"><i class="fa fa-sign-out pr-1"></i> Logout</a>
                    </li>
                </ul>
                <div class="user-profile d-flex flex-wrap px-3 align-items-center">
                    <img src="{{ asset('img/User.jpg')}}" class="user-profile-img rounded-circle vertical-align-middle" height="34" width="34" alt="user-image">
                    <p class="user-profile-name h6 pl-3 mb-0">{{Auth::guard('admin')->user()->name}}</p>
                </div>
            </nav>
        </aside>

