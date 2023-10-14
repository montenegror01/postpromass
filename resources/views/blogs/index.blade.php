@extends('layouts.app')
@section('content')
<div class="container">
  	<div class="titlebar">
    	<a role="button" class="btn btn-success float-end mt-3" href="{{ route('create') }}">Add Post</a>
    	<h1>Posts</h1>

  	</div>
    
  	<hr>
    @if (count($post) > 0)
		@foreach ($post as $pst)
          	<div class="row">
	            <div class="col-10">
	              <h4>{{$pst->title}}</h4>
	            </div>
            	<div class="col-10">
	              <i>{{$pst->autor}} </i> <i class="fecha_post">{{$pst->created_at}}</i>
              	</div>
          	</div>

          	<p>{{substr($pst->contenido, 0, 70)}}...<a type="button" onclick="openModalGeneral({{$pst->id}})"><i class="text-blue">leer mas</i></a></p>
          	<hr>
		@endforeach
	@else
		<p>No hay posts</p>
	@endif
</div>
@include('blogs.view')
@push('js')
<script>
	var app = @json($post);
	localStorage.setItem("posts", JSON.stringify(app));
    function openModalGeneral(id){
    	var localST=[];
    	var htmlView="";
    	(localStorage.getItem("posts") !== null && localStorage.getItem("posts") !== 'undefined') ?
    		localST = JSON.parse(localStorage.getItem("posts")).find((post) => post.id === id) 
    		: '';
    		console.log(localST);
    	$('#tbodyVentas').html('');
    		htmlView= '<div class="row">'
	            +'<div class="col-10">'
	              +'<h4>'+localST.title+'</h4>'
	            +'</div>'
            	+'<div class="col-10">'
	              +'<i>'+localST.autor+' </i> <i class="fecha_post">'+localST.created_at+'</i>'
              	+'</div>'
          	+'</div>'

          	+'<p>'+localST.contenido+'</p>'
          	+'<hr>';


    	
    	$("#modalBody").html(htmlView);
    	$('#viewPostModal').modal('show');
    }

    // var localST=[];
	
     // (localStorage.getItem("posts") !== null && localStorage.getItem("posts") !== 'undefined') ? 
    // 	 localST = JSON.parse(localStorage.getItem("posts")).filter((post) => post.title.includes(cadena) || post.autor.includes(cadena) || post.contenido.includes(cadena)) : '';
</script> 
@endpush
@endsection