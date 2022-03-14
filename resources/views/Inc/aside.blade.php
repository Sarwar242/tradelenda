<aside class="sidebar-wrapper bg-primary">
    <nav class="navbar flex-column align-items-start">
        <a href="javascript:void(0)" class="closebtn d-lg-none" onclick="closeNav()">&times;</a>
        <div class="brand text-center w-100">
            <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865876/icons/Group_11434_ax0aen.png" class="img-fluid" alt="Tradelenda Logo">
        </div>
        <hr>
        <ul class="navbar-nav w-100">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/home')}}">
                    <i class="fa fa-pie-chart pr-1"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/loans')}}"><i class="fa fa-signal pr-1"></i> Loans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/guarantor')}}">
                    <i class="fa fa-users pr-1"></i> Guarantors
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/notification')}}">
                    <i class="fa fa-bell pr-1"></i> Notifications <span class="badge badge-light">{{count(auth()->user()->unreadNotifications)}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/integration')}}">
                    <i class="fa fa-cog pr-1"></i> Integrations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/account')}}"><i class="fa fa-user pr-1"></i> Account</a>
            </li>

            <hr>
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pr-1"></i> {{ __('Logout') }}</a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
        <div class="user-profile d-flex flex-wrap px-3 align-items-center">
            <img src="{{auth()->user()->user_image}}" class="user-profile-img rounded-circle vertical-align-middle" height="34" width="34" alt="user-image">
            <p class="user-profile-name h6 pl-3 mb-0">{{ Auth::user()->name }}</p>

        </div>
    </nav>
</aside>
