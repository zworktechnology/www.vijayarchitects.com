<div class="app-menu navbar-menu">

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="bx bxs-dashboard"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed {{ Route::is('page.index', 'meta.index') ? 'active' : '' }}" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false {{ Route::is('page.index', 'meta.index') ? 'true' : '' }}" aria-controls="sidebarPages">
                        <i class="bx bxl-meta"></i> <span data-key="t-dashboards">Page Meta</span>
                    </a>
                    <div class="collapse menu-dropdown {{ Route::is('page.index') ? 'show' : '' }}" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('page.index') }}" class="nav-link {{ Route::is('page.index') ? 'active' : '' }}" data-key="t-starter">Page</a>
                            </li>
                        </ul>
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('meta.index') }}" class="nav-link {{ Route::is('meta.index') ? 'active' : '' }}" data-key="t-starter">Meta & OG</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('tagmanager.index') ? 'active' : '' }}" href="{{ route('tagmanager.index') }}">
                        <i class="bx bx-hash"></i> <span data-key="t-dashboards">Tag Manager</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed {{ Route::is('blogmaster.index', 'blog.index', 'blog.create', 'blog.edit') ? 'active' : '' }}" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false {{ Route::is('blogmaster.index', 'blog.index', 'blog.create', 'blog.edit') ? 'true' : '' }}" aria-controls="sidebarPages">
                        <i class="bx bxl-blogger"></i> <span data-key="t-dashboards">Blogger</span>
                    </a>
                    <div class="collapse menu-dropdown {{ Route::is('blogmaster.index') ? 'show' : '' }}" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('blogmaster.index') }}" class="nav-link {{ Route::is('blogmaster.index') ? 'active' : '' }}" data-key="t-starter">Master</a>
                            </li>
                        </ul>
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('blog.index') }}" class="nav-link {{ Route::is('blog.index', 'blog.create', 'blog.edit') ? 'active' : '' }}" data-key="t-starter">Blog</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
