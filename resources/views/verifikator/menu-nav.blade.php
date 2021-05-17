    <li class="nav-item">
        <a class="nav-link {{ Request::is('home*') ? 'active bg-primary rounded' : '' }}" href={{url('/home')}}>Home </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('aduans*') ? 'active bg-primary rounded' : '' }}" href={{url('/aduans')}}>Aduan</a>
    </li>
    