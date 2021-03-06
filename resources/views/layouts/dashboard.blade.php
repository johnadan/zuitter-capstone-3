@extends('layouts.template')

@section('title', 'Newsfeed')

@section('content')

<div class="container-fluid">
    <div class="row text-center mt-2">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-10 col-md-10 col-sm-12">
             @include('includes.message-block')
        </div>
    </div>
</div>


<div class="container-fluid">
	<div class="row">
        <div class="col-lg-1 col-md-1"></div>
		<div class="col-lg-10 col-md-10 col-sm-12">
			<br>
			<h6 class="text-center">This is your newsfeed. Follow students and alumnis to get updates from them</h6>	
		</div>
	</div>
</div>


{{-- {{dd(Auth::user())}} --}}
<div class="container-fluid gedf-wrapper">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                {{-- <!-- @foreach($posts as $post) --> --}}
                <div class="card-body">
                    {{-- <!-- <h5>{{ $post->user->username }}</h5> --> --}}
                    <h5>{{ ucfirst(Auth::user()->firstname) }} {{ ucfirst(Auth::user()->lastname) }}</h5>
                    {{-- <!-- <h5>Lorem Ipsum</h5> --> --}}
                    <div class="h7 text-muted">
                        {{-- <!-- {{ $post->user->firstname }}
                                    {{ $post->user->lastname }} --> --}}
                    </div>
                    <div class="h7">404 bio not found
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="h6 text-muted">Followers</div>
                        <div class="h5">0</div>
                    </li>
                    <li class="list-group-item">
                        <div class="h6 text-muted">Following</div>
                        <div class="h5">0</div>
                    </li>
                   <!--  <li class="list-group-item">Student, Batch 16</li> -->
                </ul>
                {{-- <!-- @endforeach --> --}}
            </div>
        </div>

        <div class="col-md-6 gedf-main">
            <div class="card gedf-card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Post something</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Post an Image</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                         <form method="POST" action="/createpost" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="sr-only" for="message">post</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?" name="post"></textarea>
                            </div>
                            <div class="btn-group">
                            <button type="submit" class="button tuitt-button is-btn-blue">Post</button>
                            </div>
                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                         </form>   

                        </div>
                        {{-- <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Upload image</label>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="submit" class="button tuitt-button is-btn-blue">Post</button>
                            </div>
                            <div class="py-4"></div>
                        </div> --}}
                    </div>
                    <div class="btn-toolbar justify-content-between">
                        <div class="btn-group">
                            <!-- <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-globe"></i>
                            </button> -->
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
           @foreach($posts as $post)
            <div class="card gedf-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">
                                   {{-- <!-- comment <output></output> -->
                                     <!-- {{ $post->user->firstname }} 
                                    {{ $post->user->lastname }} --> --}}

                                </div>
                                <div class="h7 text-muted">
                                   {{-- <!-- <p>@</p> -->
                                     <!-- {{ $post->user->username }} --> --}}
                                </div>
                            </div>
                        </div>
                        <!-- <div>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                    <div class="h6 dropdown-header">Configuration</div>
                                    <a class="dropdown-item" href="#">Save</a>
                                    <a class="dropdown-item" href="#">Hide</a>
                                    <a class="dropdown-item" href="#">Report</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Posted by {{ ucfirst($post->user->firstname) }} {{ ucfirst($post->user->lastname) }}
                        at 
                        {{ $post->created_at->format('D, M d, Y') }}
                    </div>
                    <p class="card-text" data-id="{{ $post->id }}" id="postcontent">
                        {{ $post->content }}
                    </p>
                    
                </div>
                <div class="card-footer">
                    <!-- <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                    <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                    <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a> -->
                    
                    {{-- <!-- {{ method_field('DELETE')}} --> --}}
                    @if(Auth::user()->id == $post->user_id) 
                    
                     <span class="ml-3" id="editPost">
                        <a href="#" class="card-link" data-toggle="modal" onclick="openEditModal({{ $post->id }}, '{{ $post->content }}' )"><i class="fa fa-edit"></i> Edit</a>
                        <!-- <i class="fa fa-mail-forward"></i>  -->
                    </span>
                    
                    <span class="ml-3">
                        <a href="#" class="card-link" onclick="openDeleteModal({{ $post->id }}, '{{ $post->content }}')"><i class="fa fa-trash"></i> Delete</a>
                        <!-- <i class="fa fa-mail-forward"></i>  -->
                        {{-- <!-- <a href="{{ route('post.delete', ['post_id' => $post->id]) }}" class="card-link"><i class="fa fa-mail-forward"></i> Delete</a> --> --}}
                    </span>
                    
                    
                   @endif 
                </div>
                   {{-- <!-- @endforeach --> --}}
            </div>
            @endforeach
        </div>
        
        <div class="col-md-3">
            <div class="card gedf-card">
                <div class="card-body" id="follow">
                    {{-- @foreach($users as $user) --}}
                    <h5 class="card-title">Lorem Ipsum{{-- $user->firstname --}} {{-- $user->lastname --}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">@loremipsum{{-- $user->username --}}</h6>
                    <p class="card-text">404 bio not found</p>
                    <!-- @csrf
                    @method('PUT') -->
                    <a href="#" class="card-link">Follow</a>
                    {{--<!-- <a href="#" class="card-link">Another link</a> -->--}}
                   {{-- @endforeach --}}
                </div>
            </div>
        </div>    
    </div>
</div>


{{-- Edit Modal --}}
     <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form id="updatePost" method="POST" action="/editPost/{{$post->id}}"> 
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                    <label>Post</label>
                    <input type="text" name="editedpost"></input> 
                    <button type="submit" class="btn btn-danger" data-id="{{$post->id}}" data-name="{{ $post->content }}">Update</button>
                </form>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
              </div>
            </div>
        </div>    
    </div> 

{{-- Delete Modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="delPost" action="/deletePost/{{$post->id}}" method="POST" enctype="multipart/form-data"> 
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <span id="Postdel">Do you want to delete this post? This cannot be undone</span>
                    <!-- <input type="text" value="{{ $post->content }}"> -->
                    <button type="submit" id="deleteModalBtn" class="btn btn-danger" data-id="{{ $post->id }}">Delete</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
              </div>
            </div>
        </div>  
    </div>

<script type="text/javascript">
    
    function openDeleteModal(id, content){
        $("#delPost").attr("action", "/deletePost/"+id) ;
        $("#Postdel").html('Do you want to delete this post? This cannot be undone');
        $("#deleteModal").modal("show");
    }

    function openEditModal(id, content){
       $("#editedpost").val(content);
        $("#updatePost").attr("action", "/editPost/" + id);
        $("#editModal").modal("show");
    }

</script> 

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

@endsection