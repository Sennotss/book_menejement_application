<ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{Auth()->user()->name}}</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            @if(Auth()->user()->level === 'Admin')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-user menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/user"> Data User </a>
                  </li>
                </ul>
              </div>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#authTwo" aria-expanded="false" aria-controls="authTwo">
                <span class="menu-title">Product Pages</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-book menu-icon"></i>
              </a>
              <div class="collapse" id="authTwo">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/book"> Books Data </a>
                    @if(Auth()->user()->level === 'Admin')
                      <a class="nav-link" href="/category"> Categories Data </a>
                      <a class="nav-link" href="/genre"> Genres Data </a>
                      <a class="nav-link" href="/publisher"> Publisher Data </a>
                    @endif
                  </li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#authThree" aria-expanded="false" aria-controls="authThree">
                <span class="menu-title">Transaction Pages</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-shopping-cart menu-icon"></i>
              </a>
              <div class="collapse" id="authThree">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    @if(Auth()->user()->level === 'Admin')
                      <a class="nav-link" href="/payment"> Payment Data </a>
                    @else
                      <a class="nav-link" href="/transaction"> Transaction Data </a>
                    @endif
                  </li>
                  
                </ul>
              </div>
            </li>
            @if(Auth()->user()->level === 'Admin')
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#authSix" aria-expanded="false" aria-controls="authSix">
                <span class="menu-title">Stock Pages</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-truck menu-icon"></i>
              </a>
              <div class="collapse" id="authSix">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/supplier"> Supplier Data </a>
                    <a class="nav-link" href="/stokIn"> Add Stok Data </a>
                  </li>
                  
                </ul>
              </div>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#authSeven" aria-expanded="false" aria-controls="authSeven">
                <span class="menu-title">Logout</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-sign-out menu-icon"></i>
              </a>
              <div class="collapse" id="authSeven">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout </a>
                  </li>
                  
                </ul>
              </div>
            </li>
          </ul>