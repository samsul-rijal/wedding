<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Undangan Nikah</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">UN</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ (request()->is('admin*')) ? 'active' : '' }}"><a class="nav-link" href="/admin"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        <li class="menu-header">Starter</li>
        <li class="nav-item dropdown {{ (request()->is('mempelai-pria*')) ? 'active' : '' }} {{ (request()->is('mempelai-wanita*')) ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-friends"></i> <span>Data Mempelai</span></a>
          <ul class="dropdown-menu">
            <li class="{{ (request()->is('mempelai-pria*')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('mempelai-pria.index') }}"> Mempelai Pria</a></li>
            <li class="{{ (request()->is('mempelai-wanita*')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('mempelai-wanita.index') }}">Mempelai Wanita</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown {{ (request()->is('akad-nikah*')) ? 'active' : '' }} {{ (request()->is('resepsi*')) ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-calendar-alt"></i> <span>Informasi Acara</span></a>
          <ul class="dropdown-menu">
            <li class="{{ (request()->is('akad-nikah*')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('akad-nikah.index') }}">Akad Nikah</a></li>
            <li class="{{ (request()->is('resepsi*')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('resepsi.index') }}">Resepsi</a></li>
          </ul>
        </li>
        
        <li class="{{ (request()->is('galeri-foto*')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('galeri-foto.index') }}"><i class="fas fa-camera"></i> <span>Galeri Foto</span></a></li>
        <li class="{{ (request()->is('background-foto*')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('background-foto.index') }}"><i class="fas fa-image"></i> <span>Background Gambar</span></a></li>
        <li><a class="nav-link" href="{{ route('background-foto.index') }}"><i class="fas fa-map-marker-alt"></i> <span>Maps</span></a></li>
        <li class="{{ (request()->is('musik*')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('musik.index') }}"><i class="fas fa-music"></i> <span>Musik</span></a></li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-video"></i> <span>Video</span></a></li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-cogs"></i> <span>Pengaturan Umum</span></a></li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-user"></i> <span>User</span></a></li>
        <li><a class="nav-link" href="{{ route('undangan') }}" target="_blank"><i class="fas fa-eye"></i> <span>Lihat Website</span></a></li>

  </aside>
</div>