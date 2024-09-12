@php
  $submenu_user_active = Request::is('admin/users*') || Request::is('admin/admins*');
@endphp
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item {{ $submenu_user_active ? 'active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic"
        aria-expanded="{{ $submenu_user_active ? 'true' : 'false' }}" aria-controls="ui-basic">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">User</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ Request::is('admin/users*') || Request::is('admin/admin*') ? 'show' : '' }}"
        id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ Request::is('admin/users*') ? 'sub-active' : '' }}">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
              <i class="icon-record menu-icon"></i>User</a>
          </li>
          <li class="nav-item {{ Request::is('admin/admins*') ? 'sub-active' : '' }}">
            <a class="nav-link" href="{{ route('admin.admins.index') }}">
              <i class="icon-record menu-icon"></i>Admin</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/tables/order.html">
        <i class="fas fa-list menu-icon"></i>
        <span class="menu-title">Order</span>
        <i class="menu-arrow"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">Charts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ Request::is('admin/products*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.products.index') }}">
        <i class="icon-bag menu-icon"></i>
        <span class="menu-title">Produk</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/tables/">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">News</span>
        <i class="menu-arrow"></i>
      </a>

    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/tables/chat.html">
        <i class="fas fa-comments menu-icon"></i>
        <span class="menu-title">Chat</span>
        <i class="menu-arrow"></i>
      </a>

    </li>
  </ul>
</nav>
