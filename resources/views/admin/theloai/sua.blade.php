@extends('admin.layout.index')
@section('content')
<div class="container-fluid">
	<div class="col-md-12">
		<h2>Thể loại <small>sửa</small></h2>
		<hr>
	</div>
	<div class="col-md-7">
		@if(session('thongbao'))
			<div class="alert alert-success">
				{{session('thongbao')}}
			</div>
		@endif

		@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
					{{$err}}<br>
				@endforeach
			</div>
		@endif
		<form action="index.php/admin/theloai/sua/{{$theloai->id}}" method="post">
			@csrf
			<div class="form-group">
				<label>Tên thể loại</label>
				<input class="form-control" type="text" name="Ten" placeholder="Nhập tên thể loại" value="{{$theloai->Ten}}">
			</div>
			<button class="btn btn-primary" type="submit">Sửa</button>
			<button class="btn btn-primary" type="reset">Reset</button>
		</form>
	</div>
</div>
@endsection