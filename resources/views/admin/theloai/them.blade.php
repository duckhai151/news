@extends('admin.layout.index')
@section('content')
<div class="container-fluid">
	<div class="col-md-12">
		<h2>Thể loại <small>thêm</small></h2>
		<hr>
	</div>
	<div class="col-md-7">
		<form action="{{url('admin/theloai/danhsach')}}" method="post">
			@csrf
			<div class="form-group">
				<label>Tên thể loại</label>
				<input class="form-control" type="text" name="Ten" placeholder="Nhập tên thể loại"> 
			</div>
			<button class="btn btn-primary" type="submit">Thêm</button>
			<button class="btn btn-primary" type="reset">Reset</button>
		</form>
	</div>
</div>
@endsection