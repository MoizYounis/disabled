<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="nav-item">
        <a class="d-flex align-items-center {{ Route::is('admin*') ? 'active' : '' }}" href="{{ route('admin') }}">
            <i data-feather="home"></i>
            <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard
            </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex align-items-center {{ Route::is('blogs*') ? 'active' : '' }}"
            href="{{ route('blogs.index') }}">
            <i data-feather="bold"></i>
            <span class="menu-title text-truncate" data-i18n="Blogs">Blogs
            </span>
        </a>
    </li>
    @if (auth()->user()->role == \App\Helpers\Constant::ADMIN || auth()->user()->role == \App\Helpers\Constant::STORE)
        <li class="nav-item">
            <a class="d-flex align-items-center {{ Route::is('store*') ? 'active' : '' }}"
                href="{{ route('store.index') }}">
                <i data-feather="package"></i>
                <span class="menu-title text-truncate" data-i18n="Store">Store
                </span>
            </a>
        </li>
    @endif

    @if (auth()->user()->role != \App\Helpers\Constant::STORE)
        <li class="nav-item">
            <a class="d-flex align-items-center {{ Route::is('service*') ? 'active' : '' }}"
                href="{{ route('service.index') }}">
                <i data-feather="book-open"></i>
                <span class="menu-title text-truncate" data-i18n="Services">Services
                </span>
            </a>
        </li>
    @endif

    {{-- @can('role-view')
    <li class=" nav-item"><a class="d-flex align-items-center {{ Route::is('roles*') ? 'active' : '' }}" href="{{ route('roles.index') }}"><i
        data-feather="shield"></i><span class="menu-title text-truncate"
        data-i18n="Roles">Roles</span></a>
    </li>
    @endcan --}}
    @can('users-view')
        <li class=" nav-item">
            <a class="d-flex align-items-center {{ Route::is('all_users.index*') ? 'active' : '' }}"
                href="{{ route('all_users.index') }}">
                <i data-feather="user"></i>
                <span class="menu-title text-truncate" data-i18n="Users">Users</span>
            </a>
        </li>
    @endcan

    @if (auth()->user()->role == \App\Helpers\Constant::ADMIN)
        <li class=" nav-item">
            <a class="d-flex align-items-center {{ Route::is('notifications.index*') ? 'active' : '' }}"
                href="{{ route('notifications.index') }}">
                <i data-feather="bell"></i>
                <span class="menu-title text-truncate" data-i18n="Notifications">Notifications</span>
            </a>
        </li>
    @endif

    @if (auth()->user()->role == \App\Utils\Constant::STORE)
        <li class=" nav-item">
            <a class="d-flex align-items-center {{ Route::is('all_products_request*') ? 'active' : '' }}"
                href="{{ route('all_products_request') }}">
                <i data-feather="bell"></i>
                <span class="menu-title text-truncate" data-i18n="Product Requets">Product Requets</span>
            </a>
        </li>
    @endif

    @if (auth()->user()->role == \App\Utils\Constant::SCHOOL || auth()->user()->role == \App\Utils\Constant::NGO || auth()->user()->role == \App\Utils\Constant::HOSPITAL)
        <li class=" nav-item">
            <a class="d-flex align-items-center {{ Route::is('all_services_request*') ? 'active' : '' }}"
                href="{{ route('all_services_request') }}">
                <i data-feather="bell"></i>
                <span class="menu-title text-truncate" data-i18n="Service Requets">Service Requets</span>
            </a>
        </li>
    @endif
</ul>
