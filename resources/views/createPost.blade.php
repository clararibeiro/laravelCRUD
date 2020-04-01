@extends('layouts.app')

@section('content')
    <h1 class="text-center">@if(isset($posts))Editar @else Cadastrar @endif</h1>    <hr>
    <div class="col-8 m-auto">
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($posts))
            <form name="formEdit" id="formEdit" method="post" action="{{url("posts/$posts->id")}}">
                @method('PUT')
                @else
                    <form name="formCad" id="formCad" method="post" action="{{url('posts')}}">
                        @endif
                        @csrf
                        <input class="form-control" type="text" name="title" id="title" placeholder="Titulo" required="" maxlength="191" value="{{$posts->title ?? ''}}"><br>
                        <input class="form-control" type="text" name="description" id="description" placeholder="Descricao" required="" maxlength="191" value="{{$posts->description ?? ''}}"><br>
                        @if(isset($posts))
                            <input class="btn btn-warning" type="submit" value="Editar">
                        @else
                            <input class="btn btn-success" type="submit" value="Cadastrar">
                        @endif
                        <a href="{{url('posts')}}">
                            <button type="button" class="btn btn-primary">Cancelar</button>
                        </a>
                    </form>
            </form>
    </div>
@endsection
