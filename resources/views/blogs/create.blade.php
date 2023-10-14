@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Agregar Post</h1>
    <section class="mt-3">
        <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Error message when data is not inputted -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <div class="card p-3">
                <div class="input-group input-group-static mb-3">
                    <label for="title" class="labelpedidos">Título<b class="text-red">*</b></label><br>
                    {!! Form::text('title',null,['id'=>'title','class'=>'form-control','required','placeholder'=>'Ingresa el titulo']) !!}
                </div>
                <div class="input-group input-group-static mb-3">
                    <label for="autor" class="labelpedidos">Autor<b class="text-red">*</b></label><br>
                    {!! Form::text('autor',null,['id'=>'autor','class'=>'form-control','required','placeholder'=>'Ingresa el autor']) !!}
                </div>
                <div class="input-group input-group-static">
                    <label for="contenido" class="labelpedidos">Contenido<b class="text-red">*</b></label><br>
                    {!! Form::textarea('contenido',null,['id'=>'contenido','class'=>'form-control','required','placeholder'=>'Ingresar contenido']) !!}
                </div>
            </div>
            <button class="btn btn-success m-3">Save</button>
        </form>
    </section>
</div>
@endsection