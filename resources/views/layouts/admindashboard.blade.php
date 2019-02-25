@extends('layouts.template')

@section('title', 'Admin Dashboard')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col">
			<!-- <h1>Hi, admin!<h1> -->
			<br>
			<h6 class="text-center mt-5 mb-5">Welcome to your Dashboard</h6>	
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

	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<table class="table">
				<thead>
					<tr>
						<td>User's Name</td>
						<td>Email address</td>
						<td>Signed up on</td>
						<td>Actions</td>
					</tr>
				</thead>
				<tbody>
				 @foreach($users as $user) 
					<tr>
						<td>{{ $user->firstname }} {{ $user->lastname }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at }}</td>
						<td>
							<button type="button" class="button tuitt-button is-btn-red text-white" onclick="openArchiveModal()" data-toggle="modal">Archive</button>
							<button type="button" class="button tuitt-button is-btn-blue" onclick="openUpdateModal()" data-toggle="modal">Update</button>
						</td>
					</tr>	
				 @endforeach 
				</tbody>
				<!-- <tbody>
					<tr>
						<td>Sample User 1</td>
						<td>5 mins. ago</td>
						<td>
							<button type="button" class="btn btn-danger" onclick="openDeleteModal()" data-toggle="modal">Delete</button>
							<button type="button" class="btn btn-primary" onclick="openEditModal()" data-toggle="modal">Edit</button>
						</td>
					</tr>
					<tr>
						<td>Sample Task 2</td>
						<td>5 mins. ago</td>
						<td>
							<button type="button" class="btn btn-danger" onclick="openDeleteModal()" data-toggle="modal">Delete</button>
							<button type="button" class="btn btn-primary" onclick="openEditModal()" data-toggle="modal">Edit</button>
						</td>
					</tr>
				</tbody> -->
			</table>
		</div>
	</div>

</div>

{{-- Edit Modal --}}
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              	<form id="updateUser" method="POST"> 
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                    <label>First Name</label>
                    <input type="text" name="editedfirstname"></input>
                    <br> 
                    <label>Last Name</label>
                    <input type="text" name="editedlastname"></input>
                    <br> 
                    <label>Email</label>
                    <input type="text" name="editedemail"></input>
                    <br> 
                    <button type="submit" class="button tuitt-button is-btn-red text-white">Update</button>
                </form>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="button tuitt-button is-btn-blue" data-dismiss="modal">Close</button>
               {{-- <!-- <button type="button" class="btn btn-primary">Save changes</button> -->--}}
              </div>
            </div>
        </div>    
    </div> 

{{-- Archive Modal --}}
    <div class="modal fade" id="archiveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Archive User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="archiveUser" method="POST" enctype="multipart/form-data"> 
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <span id="Userarchive">Do you want to deactivate this user? This cannot be undone</span>
                    <button type="submit" class="button tuitt-button is-btn-red text-white">Yes</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="button tuitt-button is-btn-blue" data-dismiss="modal">Close</button>
               {{-- <!-- <button type="button" class="btn btn-primary">Save changes</button> --> --}}
              </div>
            </div>
        </div>  
    </div>

<script type="text/javascript">
    
    function openArchiveModal(id){
        $("#archiveUser").attr("action", "/archiveUser/"+id) ;
        $("#Userarchive").html('Do you want to archive this user? This cannot be undone');
        $("#archiveModal").modal("show");
    }

    function openUpdateModal(id, firstname, lastname, email){
       $("#editedfirstname").val(firstname);
       $("#editedlastname").val(lastname);
       $("#editedemail").val(email);
        $("#updateUser").attr("action", "/updateUser/" + id);
        $("#updateModal").modal("show");
    }

</script> 

{{-- <script>
// var token = '{{ Session::token() }}';
//var url = '{{ route('edit') }}';
</script> --}}

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

@endsection