@extends('layouts.template')

@section('title', 'Admin Dashboard')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h1>Hi, admin!<h1>
			<br>
			<h6>This is your dashboard</h6>	
			<!-- <form method="POST" action="/addItem" enctype="multipart/form-data">
				<div class="form-group row add">
				    <div class="col-md-8">
				        <input type="text" class="form-control" id="name" name="name"
				            placeholder="Enter some name" required>
				        <p class="error text-center alert alert-danger hidden"></p>
				    </div>
				    <div class="col-md-4">
				        <button class="btn btn-primary" type="submit" id="add">
				            <span class="glyphicon glyphicon-plus"></span> ADD
				        </button>
				    </div>
				</div>
			</form> -->
		</div>
	</div>
</div>

@endsection