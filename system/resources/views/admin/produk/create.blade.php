@extends("admin.base")
@section('content')
<!-- start coding -->

   
   <div class="container">
   	<div class="card mt-3 pt-3">
   	<div class="row ml-1 mr-2 mb-3">
   		<h4>Tambah Data Produk</h4>
   	</div>

   	<div class="container">
   		<div class="card-body">
   			<form action="{{url('admin/produk')}}" method="post" enctype="multipart/form-data">
   				@csrf
   			<div class="form-group">
   				<label class="control-label">Nama</label>
   				<input type="text" class="form-control" name="nama" required="">
   			</div>
   			<div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                     <label class="control-label">Foto</label>
                     <input type="file" class="form-control" name="foto" accept=".png">
                  </div>
               </div>
   				<div class="col-md-3">
   					<div class="form-group">
   						<label class="control-label">Harga</label>
   						<input type="number" class="form-control" name="harga">
   					</div>
   				</div>
   				<div class="col-md-3">
   					<div class="form-group">
   						<label class="control-label">Brand</label>
   						<input type="text" class="form-control" name="brand">
   					</div>
   				</div>
   				<div class="col-md-3">
   					<div class="form-group">
   						<label class="control-label">Stok</label>
   						<input type="number" class="form-control" name="stok">
   					</div>
   				</div>
   			</div>
   			<div class="form-group">
   				<label class="control-label">Deskripsi</label>
   				<textarea  id="deskripsi" class="form-control" style="height: 100px" name="deskripsi"></textarea>
   			</div>
   			<button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
   			</form>
   			</div>	
   		</div>
   		
   	</div>

   	</div>
   </div>

<!-- end coding -->
@endsection

@push('style')
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endpush

<script type="text/javascript">
   $(document).ready(function() {
  $('#deskripsi').summernote();
});
</script>

