<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="nav-item active">
        <a class="d-flex align-items-center" href="{{ route('admin') }}">
            <i data-feather="home"></i>
            <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards
            </span>
        </a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                data-feather="user"></i><span class="menu-title text-truncate"
                data-i18n="User">User</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                data-feather="shield"></i><span class="menu-title text-truncate"
                data-i18n="Roles &amp; Permission">Roles &amp; Permission</span></a>
        <ul class="menu-content">
            <li><a class="d-flex align-items-center {{ Request::is('roles*') ? 'active' : '' }}" href="{{ route('roles.index') }}"><i
                        data-feather="circle"></i><span class="menu-item text-truncate"
                        data-i18n="Roles">Roles</span></a>
            </li>
            <li><a class="d-flex align-items-center" href="app-access-permission.html"><i
                        data-feather="circle"></i><span class="menu-item text-truncate"
                        data-i18n="Permission">Permission</span></a>
            </li>
        </ul>
    </li>
</ul>
