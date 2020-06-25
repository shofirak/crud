@extends('product.mainProduct')

@section('kontent')

<!-- alert simpan & update -->
@if(session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}	
	</div>
@endif

<!-- alert delete -->
@if(session('delete'))
	<div class="alert alert-danger" role="alert">
		{{session('delete')}}	
	</div>
@endif

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#inputProduct">
  <i class="fa fa-plus-circle" aria-hidden="true"></i> New product
</button>

<!-- Modal -->
<div class="modal fade" id="inputProduct" tabindex="-1" role="dialog" aria-labelledby="inputProductLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
    		<div class="modal-header">
    		<h5 class="modal-title" id="inputProductLabel">Input Product</h5>
	    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	    			<span aria-hidden="true">&times;</span>
	    		</button>
    		</div>

    		<div class="modal-body">
    			<form  method="post" action="/product/add">
					@csrf

					<!-- nama product -->
					<div class="form-group">
						<label>Nama Product :</label>
						<input type="text" name="nama_product" class="form-control">
					</div>

					<!-- keterangan -->
					<div class="form-group">
						<label>Keterangan :</label>
						<input type="text" name="ket" class="form-control">
					</div>

                    <!-- Harga -->
					<div class="form-group">
						<label>Harga :</label>
						<input type="text" name="harga" class="form-control">
					</div>

					<!-- jumlah -->
					<div class="form-group">
						<label>Jumlah :</label>
						<input type="number" name="jumlah" class="form-control">
					</div>

					
    		</div>
    		<div class="modal-footer">
    			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    			<button type="submit" class="btn btn-primary">Save</button>
    		</div>
    		</form>
    	</div>
    </div>
</div>


<br><br>
<!-- table product -->
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama Product</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($product as $s)

		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $s->nama_product }}</td>
			<td>{{ $s->ket}}</td>
			<td>{{ $s->harga }}</td>
			<td>{{ $s->jumlah }}</td>
			<td>
				<a href="/product/edit/{{$s->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
				<a href="/product/delete/{{$s->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		@endforeach

	</tbody>
</table>

{{$product->links()}}

@stop