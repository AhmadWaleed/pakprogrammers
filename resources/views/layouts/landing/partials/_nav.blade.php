    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="../">
                    <img src="" alt="PakProgrammers">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
              <span></span>
              <span></span>
            </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    @if(Auth::check())
                        <a class="navbar-item is-active">
                            Blog
                        </a>
                        <a class="navbar-item">
                            Video Tutorials
                        </a>
                        <a class="navbar-item">
                            Forum
                        </a>
                        <a class="button is-white is-outlined is-small" href="{{ route('login') }}">
                          <span class="icon">
                            <i class="fa fa-sign-out"></i>
                          </span>
                          <span>Sign In</span>
                        </a>
                    @endif
                    <span class="navbar-item">
                    @if(!Auth::check())
                    <a class="button is-white is-outlined is-small" href="{{ route('login') }}">
                      <span class="icon">
                        <i class="fa fa-user"></i>
                      </span>
                      <span>Sign In</span>
                    </a>
                    <a style="margin-left: 5px;" class="button is-white is-outlined is-small" href="{{ route('register') }}">
                      <span class="icon">
                        <i class="fa fa-user-plus"></i>
                      </span>
                      <span>Join Us</span>
                    </a>
                    @endif
                    </span>
                </div>
            </div>
        </div>
    </nav>