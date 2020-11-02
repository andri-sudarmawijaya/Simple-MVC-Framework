        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          <div class="topbar-divider d-none d-sm-block"></div>
          
           <?php if( $this->session->isLoggedIn() ): ?>
           <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              {{ $this->session->user->username }}
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/auth/logout"><span class="glyphicon glyphicon-log-out padding-r10"></span>Logout</a>
              <a class="dropdown-item" href="/admin/user/{{ $this->session->user->id }}"><span class="glyphicon glyphicon-user padding-r10"></span>Profile</a>
            </div>
           </div>
            <?php if( $this->session->user->admin ): ?>
            <li>
              <a href="/admin">
                <span class="glyphicon glyphicon-cog padding-r5"></span>
                Admin
              </a>
            </li>
            <?php endif; ?>

            <?php else: ?>
              <li>
                <a href="/auth/login">
                  <span class="glyphicon glyphicon-log-in padding-r5"></span>
                  Login
                </a>
              </li>
            <?php endif; ?>
            
          </ul>

        </nav>
        <!-- End of Topbar -->