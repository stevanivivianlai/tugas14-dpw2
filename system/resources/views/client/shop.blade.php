<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Template</title>

    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/all.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
</head>
   <body>
      <!-- Start Top Nav -->
    @include('client.section.navbar')
  <!-- Close Header -->


       <!-- Start Content -->
    <div class="container">
      <div class="card mt-3 pt-3">
      <div class="row ml-1 mr-2 mb-3">
         <div class="col-md-12">
           
            <h4><b>Filter</b></h4>
         </div>

         <div class="container">
         <div class="card-body">
            <form action="{{url('shop/filter')}}" method="post">
               @csrf
               <div class="form-group">
                  <label for="" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
               </div>
                            <br>
                            <button class="btn btn-primary float-right mb-3"><i class="fa fa-search"></i> Filter </button>
                        </form>


                    </div>
                    
                    
                </div>
            </div>
            <hr>

             <div class="col-12">
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">
                                    <div class="col-12 text-center text-uppercase">
                                        <h2>Featured Products</h2>
                                    </div>
                                </div>
                                <div class="row">

                                      @foreach ($list_produk as $produk)
                                     <div class="col-lg-3 col-sm-3">
                              <div class="box_main">
                                             <img src="{{url("public/$produk->foto")}}" style="width:200px;height:250px;">
                                            <a href="{{ url('/produkshop', $produk->id) }}"
                                            class="h3 text-decoration-none">{{ $produk->nama }}</a>
                                            <hr>
                                            <p><h4>Stok :{{ $produk->stok }}</h4></p>
                                        <p class="text-center mb-0"><h4>Rp.{{number_format($produk->harga)  }}</h4></p>
                                       <button href="{{url('keranjang')}}" type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Masukan <br> Keranjang</button>
                                        </div>
                                       </div>
                                       @endforeach
                                    </div>
                                  </div>
                               <div>
                              <nav>
              {{ $list_produk->links() }}
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>       
            </div>
         </div>
        </div>
    </div>
    <!-- End Content -->


      <!-- Start Footer -->
    @include('client.section.footer')
    <!-- End Footer -->
    
     <!-- Messages -->

    <script type="text/javascript" src="{{url('public')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/script.js"></script>
</body>
</html>