<nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('Admin/beranda') }}"> Mazer </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                 @if(Auth::check()) 
                {{request()->user()->username}}
                @elseif( Auth::guard('admin')->check())
                        <strong> {{ Auth::guard('admin')->user()->nama }}</strong>
                        As Admin
                    @elseif( Auth::guard('pengguna')->check())
                        <strong> {{ Auth::guard('pengguna')->user()->nama }}</strong>
                        As pengguna
              @else
                Silahkan Login
              @endif
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil Admin </a>
                        </li>
                        <li><a href="{{ url('setting') }}"><i class="fa fa-gear fa-fw"></i> Pengaturan </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('login') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>