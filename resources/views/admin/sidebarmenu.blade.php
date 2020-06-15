      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/adminzone/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="{{ route('adminzone.user.index') }}" class="nav-link">
              <i class="nav-icon fas fa-user-secret"></i>
              <p>Module User</p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="{{ route('adminzone.pemilih.index') }}" class="nav-link">
              <i class="nav-icon fas fa-user-check"></i>
              <p>Data Pemilih Tetap</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('adminzone.paslon.index') }}" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>Data Paslon</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('adminzone.petugas.index') }}" class="nav-link">
              <i class="nav-icon far fa-id-badge"></i>
              <p>Data Petugas</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('adminzone.tps.index') }}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Data TPS</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('adminzone.pemilu.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Data Pemilu</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('adminzone.jadwal_pemilihan.index') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>Setting Jadwal</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('adminzone.hasil.index') }}" class="nav-link">
              <i class="nav-icon fas fa-hourglass-half"></i>
              <p> Hasil </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('adminzone.logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->