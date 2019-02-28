//let postId = 0;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//delete post
// $('#delPost').on('click', function(e){
// 	e.preventDefault();
// 	$('#deleteModal').modal('show');
// 	var id = $(this).find('button').attr("data-id");
// 	//console.log(id);
// 	var _token = $("meta[name='csrf-token']").attr('content');
// 	$.ajax({
// 			type:'DELETE',
// 			url:'/deletePost/'+id,
// 			data:{_token:_token,id:id},
// 			success: function(response){
// 				alert(response);
// 				location.reload();	
// 			}
// 		});
	
// });

//edit post, not yet working
// $('#editPost').on('click', function(e){
// 	e.preventDefault();
// 	$('#editModal').modal('show');
// 	var id = $(this).find('button').attr("data-id");
// 	//console.log(id);
// 	var _token = $("meta[name='csrf-token']").attr('content');
// 	$.ajax({
// 		type:'PUT',
// 		url:'/editPost/'+id,
// 		data:{_token:_token,id:id},
		
// 	})
// })

//update user details


//archive user

// $(document).on('click', '#delPost', function(e){
// var id = $(this).find('card-link').data('id');
// alert(id);
// })

// $(document).on('click', '#deleteModalBtn', function(){
// 	$('#deleteModal').modal('show');
// 	let id = $(this).data('id');

// 	//console.log(id);
// 	$("#deletePost").attr("action", "/deletePost/"+id);
// });

// $('#unfollow').on('click',function(e){
// 		e.preventDefault();
// 		var id = $(this).find('button').attr("data-id");
// 		var _token = $("meta[name='csrf-token']").attr('content');

// 		$.ajax({
// 			type:'DELETE',
// 			url:'/profile/unfollow/'+id,
// 			data:{_token:_token,id:id},
// 			success: function(response){
// 				alert(response);
// 				location.reload();	
// 			}
// 		});
// 	});

//sample unfollow ajax
// $('#unfollow').on('click',function(e){
// 		e.preventDefault();
// 		var id = $(this).find('button').attr("data-id");
// 		var _token = $("meta[name='csrf-token']").attr('content');

// 		$.ajax({
// 			type:'DELETE',
// 			url:'/profile/unfollow/'+id,
// 			data:{_token:_token,id:id},
// 			success: function(response){
// 				alert(response);
// 				location.reload();	
// 			}
// 		});
// 	});

// user crud

//edit modal
// $('#editPost').click(function() {
// 	let postBody = $("#postbody").val();
// 	postId = $("#postbody").val();
// 	$('#edit-modal').modal();
// });

	//console.log('It works!');
	//postId = dataset['postid'];
	
	//
	//$('#fid').val($(this).data('id'));
    //$('#n').val($(this).data('name'));

//initial edit post
//$("#savePost").on('click', function(){
	//let postBody = $("#post-body").val();
	//$.ajax({
		//'url' : '/editpost',
		//'type' : 'POST',
		//'data' : {
			//_token : '{{ csrf_token() }}',
			//'post-body' : postBody
			//'post_id' : ,
			//'' :
		//},
		//'success':function(data){
			//alert("Your post was successfully edited!");
			//console.log("Your post was successfully edited!");
		//} 
	//})
//});

//for testing - edit post

// $("#savePost").click(function(){
	
// 	$.ajax({
// 		'type': 'POST',
// 		'url': '/editpost',
// 		'data': {
// 			'postbody': $('#postbody').val(),
// 			'postId' : postId
// 		},
// 		'success' : function(data){
// 			console.log(JSON.stringify(msg));
// 		}
// 	})
// });

// $.ajax({
// method: 'POST',
// url:url,
// data:
// {
// post-body: $('#post-body').val(), 
// post_id: '', 
// _token: token
// }
// })
// .done(function (msg) {
// console.log(msg['message']);
// }); 

// admin crud

//add new user
// $("#add").click(function() {
// $.ajax({
//         type: 'post',
//         url: '/addItem',
//         data: {
//             '_token': $('input[name=_token]').val(),
//             'name': $('input[name=name]').val()
//         },
//         success: function(data) {
//             if ((data.errors)) {
//                 $('.error').removeClass('hidden');
//                 $('.error').text(data.errors.name);
//             } else {
//                 $('.error').remove();
//                 $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
//             }
//         },
//     });
//     $('#name').val('');
// });
//let postBody = $("#postbody").val();
	//let postId = 0;
//_token : '{{ csrf_token() }}',
			//_token: token
			//'post_id' : ,
			//'' :
			//
			 //'_token': $('input[name=_token]').val(),
                //'id': $("#fid").val(),
                //'name': $('#n').val()