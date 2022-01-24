<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset ('img/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset ('img/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open {{request ()->is('customer')||request ()->is('customer_add') ? 'active' :'' }}">
            <a href="#" class="nav-link {{request ()->is('test')||request ()->is('customer')||request ()->is('customer_add') ? 'active' :'' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="/test" class="nav-link {{request ()->is('test') ? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Test</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="customer" class="nav-link {{request ()->is('customer') ? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Customer</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="customer_add" class="nav-link {{request ()->is('customer_add') ? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Customer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{request ()->is('barang')||request ()->is('scan_barcode') ? 'active' :'' }} menu-open">
            <a href="#" class="nav-link {{request ()->is('barang')||request ()->is('scan_barcode') ? 'active' :'' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Barang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="barang" class="nav-link {{request ()->is('barang') ? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Barang</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="scan_barcode" class="nav-link {{request ()->is('scan_barcode') ? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Scan Barcode</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{request ()->is('toko')||request ()->is('scan_toko') ? 'active' :'' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Toko
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="/toko" class="nav-link {{request ()->is('toko') ? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Toko</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="scan_toko" class="nav-link {{request ()->is('scan_toko') ? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kunjungan Toko</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{request ()->is('customer_excel') ? 'active' :'' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Excel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="/customer_excel" class="nav-link {{request ()->is('customer_excel') ? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Scoreboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="/scoreboard-view" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Scoreboard </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="/scoreboard-console" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Scoreboard console</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    
    <!-- /.sidebar -->
  </aside>
