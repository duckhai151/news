@extends('admin.layout.index')

@section('content')

				<table class="table table-striped table-bordered">
					<thead>
						<tr class="success">
							<th>ID</th>
							<th>Tên</th>
							<th>Edit</a></th>
							<th>Delete</a></th>
						</tr>
					</thead>
					<tbody>
						@foreach($theloai as $tl)
						<tr>
							<th>{{$tl->id}}</th>
							<th>{{$tl->Ten}}</th>
							<th><a href="index.php/admin/theloai/sua/{{$tl->id}}">Sửa <span class="glyphicon glyphicon-cog"></span></a></th>
							<th><a href="">Xóa <span class="glyphicon glyphicon-trash"></span></a></th>
						</tr>
						@endforeach
					</tbody>
				</table>

@endsection