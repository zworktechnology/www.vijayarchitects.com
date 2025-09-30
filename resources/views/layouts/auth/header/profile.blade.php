
<div class="dropdown ms-sm-3 header-item topbar-user">
    <button type="button" class="btn" id="page-header-user-dropdown"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="d-flex align-items-center">
            <img class="rounded-circle header-profile-user"
                src="{{ asset('assets/backend/images/users/multi-user.webp') }}"
                alt="Auth User">
            <span class="text-start ms-xl-2">
                <span
                    class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                <span
                    class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Administrator</span>
            </span>
        </span>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>
        <a class="dropdown-item" href="javascript:void(0);"><i
                class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                class="align-middle">Profile</span></a>
        <a class="dropdown-item" href="javascript:void(0);"><i
                class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                class="align-middle">Ticket / Help</span></a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                class="align-middle" data-key="t-logout">Logout</span></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST"
            class="d-none">
            @csrf
        </form>
    </div>
</div>
