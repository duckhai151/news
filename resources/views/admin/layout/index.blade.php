<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Layout</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	@include('admin.layout.header')
	
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				@include('admin.layout.menu')
			</div>
			<div class="col-md-9">
				@yield('content')
			</div>
			<!-- content -->
			
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>