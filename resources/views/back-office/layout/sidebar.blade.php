<div class="container-fluid">

    <div id="two-column-menu">
    </div>
    <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
        <li class="nav-item">
            <a class="nav-link menu-link" href="#sidebarDashboards" role="button">
                <span data-key="t-dashboards">Dashboard</span>
            </a>
        </li>
        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Metiers</span></li>

        <li class="nav-item">
            <a class="nav-link menu-link" href="{{ route('operation-paysane.index') }}" role="button">
                <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Operation paysane</span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link menu-link" href="{{ route('unite-mesure.index') }}">
                <i class="ri-honour-line"></i> <span data-key="t-widgets">Unite de mesure</span>
            </a>
        </li> --}}
        <li>
            <a href="{{ route('speculation.index') }}" class="nav-link" data-key="t-crm">
                <i class="ri-apps-2-line"></i><span>Speculation</span>
            </a>
        </li>
        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Paramètres</span>
        </li>
        <li class="nav-item">
            <a class="nav-link menu-link {{ request()->is('/admins/users') || request()->is('/admins/users/*') ? 'active' : '' }}"
                href="{{ route('admins.users.index') }}">
                <i class="ri-admin-line"></i> <span data-key="t-widgets">Utilisateurs</span>
            </a>
        </li>
    </ul>
</div>
<div class="sidebar-background"></div>
