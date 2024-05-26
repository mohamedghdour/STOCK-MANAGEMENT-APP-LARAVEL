<aside style="height: 100%" class="main-sidebar fixed sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link ">
      <span class="brand-text font-weight-bold">Gestion supermarche</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
  
      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route("dashboard.show")}}" class="nav-link 
                    @if(request()->segment(1)=="dashboard")
                        {{"active"}}
                    @endif
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route("stock.show")}}" class="nav-link 
                    @if(request()->segment(1)=="stock")
                        {{"active"}}
                    @endif
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route("supplier.index")}}" class="nav-link 
                    @if(request()->segment(1)=="fournisseurs")
                        {{"active"}}
                    @endif
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fournisseurs</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route("commande.index")}}" class="nav-link 
                    @if(request()->segment(1)=="commandes")
                        {{"active"}}
                    @endif
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Commandes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route("user.show")}}" class="nav-link 
                    @if(request()->segment(1)=="user")
                        {{"active"}}
                    @endif
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User: {{auth()->user()->name}}</p>
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