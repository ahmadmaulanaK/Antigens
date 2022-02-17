<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>
        <li class="nav-title">----------------------------------- </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('antigens.index') }}">
                <i class="nav-icon icon-cursor"></i> Hasil Antigen
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('jabodetabek.index') }}">
                <i class="nav-icon icon-cursor"></i>JABODETABEK
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('branch.index') }}">
                <i class="nav-icon icon-cursor"></i>Antigen Jaswita
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('pengeluaran.index')}}">
                <i class="nav-icon icon-cursor"></i>Pengeluaran
            </a>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-settings"></i> Report
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="/antigens/report">
                        <i class="nav-icon icon-puzzle"></i> Data Pasien
                    </a>
                </li>
               
               
             
            </ul>
        </li>
        <li class="nav-title">MANAJEMEN </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="nav-icon icon-layers"></i> Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="nav-icon icon-user-following"></i> Admin Hasil
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('swabbers.index') }}">
                <i class="nav-icon icon-eyeglass"></i> Swabber
            </a>
        </li>
      
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-settings"></i> Pengaturan
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}">
                        <i class="nav-icon icon-puzzle"></i> Profile Perusahaan 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('setting.index') }}">
                        <i class="nav-icon icon-puzzle"></i> Setting 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="nav-icon icon-logout  "></i>  Logout 
                    </a>
                </li>
             
            </ul>
        </li>
    </ul>
</nav>
