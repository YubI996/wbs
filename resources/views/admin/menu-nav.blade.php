    <li class="nav-item">
        <a class="nav-link {{ Request::is('home*') ? 'active bg-primary rounded' : '' }}" href={{url('/home')}}>Home </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('statistik*') ? 'active bg-primary rounded' : '' }}" href={{url('/statistik')}}>Statistik</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('aduans*') ? 'active bg-primary rounded' : '' }}" href={{url('/aduans')}}>Aduan</a>
    </li>
    <li class="nav-item">
        <div class="dropdown">
            <button class="btn  dropdown-toggle nav-link {{ (Request::is('roles*')||Request::is('users*')||Request::is('jenisAduans*')) ? 'active bg-primary rounded' : '' }}" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cogs"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('roles.index') }}">Roles</a>
                <a class="dropdown-item" href="{{ route('users.index') }}">User</a>
                <a class="dropdown-item" href="{{ route('jenisAduans.index') }}">Jenis Aduan</a>
            </div>
        </div>
    </li>
    