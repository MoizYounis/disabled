<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="nav-item">
        <a class="d-flex align-items-center {{ Route::is('admin*') ? 'active' : '' }}" href="{{ route('admin') }}">
            <i data-feather="home"></i>
            <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard
            </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex align-items-center {{ Route::is('blogs*') ? 'active' : '' }}" href="{{ route('blogs.index') }}">
            <i data-feather="bold"></i>
            <span class="menu-title text-truncate" data-i18n="Blogs">Blogs
            </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex align-items-center {{ Route::is('store*') ? 'active' : '' }}" href="{{ route('store.index') }}">
            <i data-feather="package"></i>
            <span class="menu-title text-truncate" data-i18n="Store">Store
            </span>
        </a>
    </li>
    @can('role-view')
    <li class=" nav-item"><a class="d-flex align-items-center {{ Route::is('roles*') ? 'active' : '' }}" href="{{ route('roles.index') }}"><i
        data-feather="shield"></i><span class="menu-title text-truncate"
        data-i18n="Roles">Roles</span></a>
    </li>
    @endcan
     @can('users-view')
    <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i
                data-feather="user"></i><span class="menu-title text-truncate"
                data-i18n="Users">Users</span></a>
        <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="#"><i
                        data-feather="circle"></i><span class="menu-item text-truncate"
                        data-i18n="Roles">Roles</span></a>
            </li>
            <li><a class="d-flex align-items-center" href="#"><i
                        data-feather="circle"></i><span class="menu-item text-truncate"
                        data-i18n="Permission">Permission</span></a>
            </li>
        </ul>
    </li>
    @endcan
</ul>
