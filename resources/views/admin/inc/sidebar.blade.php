<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('public/admin/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Onedash</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('adminDashboard')}}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-cog"></i>
                </div>
                <div class="menu-title">
                    Settings
                </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('theme')}}"><i class="bi bi-circle"></i>
                        Theme Settings
                    </a>
                </li>
                <li>
                    <a href="{{route('setting')}}"><i class="bi bi-circle"></i>
                        Site Settings
                    </a>
                </li>
                <li>
                    <a href="{{route('social')}}"><i class="bi bi-circle"></i>
                        Social Settings
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
