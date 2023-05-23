<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Master data</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">

            <li class="nav-item"> <a class="nav-link" href="slides">Data Slider</a></li>
            <li class="nav-item"> <a class="nav-link" href="categories">Kategori</a></li>
            {{-- <li class="nav-item"> <a class="nav-link" href="tags">Tags</a></li> --}}
            <li class="nav-item"> <a class="nav-link" href="products">Data Produk</a></li>
            {{-- <li class="nav-item"> <a class="nav-link" href="reviews">Data Reviews</a></li> --}}
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Data Member</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="users">Users</a></li>
        </ul>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Penjualan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="orders">Pesanan</a></li>
          </ul>
        </div>
      </li>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="shipments">Penjualan</a></li>
        </ul>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">Laporan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="reports/revenue">Laporan Penjualan</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
