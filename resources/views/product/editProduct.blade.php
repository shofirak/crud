@extends('product.mainProduct')

@section('kontent')

<form action="/product/update/{{$product->id}}" method="post">
	@csrf

	<div class="col-md-4">

	<!-- nama product -->
	<div class="form-group">
		<label>Nama Product :</label>
		<input type="text" name="nama_product" class="form-control" value="{{ $product->nama_product }}">
	</div>

	<!-- keterangan -->
	<div class="form-group">
		<label>Keteragan :</label>
		<input type="text" name="ket" class="form-control" value="{{ $product->ket }}">
    </div>
    
    <!-- harga -->
	<div class="form-group">
		<label>Harga :</label>
		<input type="text" name="harga" class="form-control" value="{{ $product->harga }}">
	</div>

	<!-- jumlah -->
	<div class="form-group">
		<label>Jumlah :</label>
		<input type="text" name="jumlah" class="form-control" value="{{ $product->jumlah }}">
    </div>
	
	</div>

	<br>

	<div class="form-inline">
		<div class="col-md-2">
			<a href="/product" class="btn btn-danger btn-block">Cancel</a>
		</div>

		<div class="col-md-2">
			<input type="submit" value="Update" class="btn btn-primary btn-block">
		</div>

	</div>
</form>
@stop