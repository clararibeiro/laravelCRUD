@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 m-auto">
            @csrf
            <div class="text-center">
                <a href="{{url('posts/create')}}">
                    <button class="btn btn-success mt-3 mb-4">Cadastrar</button>
                </a>
            </div>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Data </th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $noticias)
                    <tr>
                        <th scope="row">{{$noticias->title}}</th>
                        <td>{{$noticias->updated_at}}</td>
                        <td>
                            <a href="{{url("posts/$noticias->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("posts/$noticias->id/edit")}}">
                                <button class="btn btn-warning">Editar</button>
                            </a>
                            <a href="{{url("posts/$noticias->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
