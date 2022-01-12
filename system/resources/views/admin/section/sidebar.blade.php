@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}
@endphp

<nav class="navbar-default navbar-side" role="navigation">
    
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="{{ url('admin/beranda') }}"></a>
                    </li>
                    <br>

                    <li class="{{checkRouteActive('admin/beranda')}}">
                        <a href="{{ url('admin/beranda') }}"><i class="fa fa-dashboard"></i> Beranda </a>
                    </li>

                     <li class="{{checkRouteActive('admin/produk')}}">
                        <a href="{{ url('admin/produk') }}"><i class="fa fa-edit"></i> Produk </a>
                    </li>

                    <li class="{{checkRouteActive('admin/kategori')}}">
                        <a href="{{ url('admin/kategori') }}"><i class="fa fa-edit"></i> Kategori </a>
                    </li>

                     <li class="{{checkRouteActive('admin/user')}}">
                        <a href="{{ url('admin/user') }}"><i class="fa fa-edit"></i> User </a>
                    </li>

                     <li class="{{checkRouteActive('shop')}}">
                        <a href="{{ url('shop') }}"><i class="fa fa-edit"></i> Halaman Utama </a>
                    </li>

                </ul>

            </div>
</nav>