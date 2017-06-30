 

<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">

      <li class="{{ Welcome::collapseActive(array('users*')) }}" >
        <a href="#"><i class="fa  fa-folder "></i> Usuarios<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="{{ route('users.index') }}" class="{{ Welcome::linkActive('users*') }}">Usuarios</a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
      <li>

      <li class="{{ Welcome::collapseActive(array('bancos*','cuentas*')) }}" >
        <a href="#"><i class="fa  fa-folder "></i> Bancos <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li class="{{ Welcome::linkActive('bancos*') }}">
            <a href="{{ route('bancos.index') }}">Bancos</a>
          </li>
          <li>
            <a href="{{ route('cuentas.index') }}"  class="{{ Welcome::linkActive('cuentas*') }}">Cuentas</a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>

      <li class="{{ Welcome::collapseActive(array('negocios*','movimientos*')) }}" >
        <a href="#"><i class="fa  fa-folder "></i> Movimientos <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="{{ route('negocios.index') }}" class="{{ Welcome::linkActive('negocios*') }}">Negocios o socios</a>
          </li>
          <li>
            <a href="{{ route('movimientos.index') }}" class="{{ Welcome::linkActive('movimientos*') }}">Movimientos</a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
    </ul>    
  </div>
  <!-- /.sidebar-collapse -->
</div>