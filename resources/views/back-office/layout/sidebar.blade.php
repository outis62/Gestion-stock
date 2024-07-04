<div class="container-fluid">

    <div id="two-column-menu">
    </div>
    <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
        <li class="nav-item">
            <a class="nav-link menu-link" href="{{route('admins.dashboard')}}" role="button">
                <span data-key="t-dashboards">Dashboard</span>
            </a>
        </li>
        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Metiers</span></li>

        <li>
            <a href="javascript:void(0)" class="nav-link" data-key="t-crm">
                <i class="ri-apps-2-line"></i><span>Produits</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="nav-link" data-key="t-crm">
                <i class="ri-apps-2-line"></i><span>Achats</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="nav-link" data-key="t-crm">
                <i class="ri-apps-2-line"></i><span>Ventes</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="nav-link" data-key="t-crm">
                <i class="ri-apps-2-line"></i><span>Point de vente</span>
            </a>
        </li>

        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="tk-pages">Comptable</span></li>

        <li>
            <a href="javascript:void(0)" class="nav-link" data-key="t-crm">
                <i class="ri-apps-2-line"></i><span>Trésorie</span>
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
        <li>
            <a href="javascript:void(0)" class="nav-link" data-key="t-crm">
                <i class="ri-apps-2-line"></i><span>Formation video</span>
            </a>
        </li>
    </ul>
</div>
<div class="sidebar-background"></div>
