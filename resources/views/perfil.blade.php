@extends('layouts.app')

@section('content')
    <h2 class="text-center">Perfil</h2>    <hr>
<div class="container">
    <div class=" justify-content-center text-center">
        <form name="formUser" id="formUser" method="post" action="{{url('users')}}">
            @csrf
            <input name="name" id="name" type="text" class="form-control" required="" value="{{ Auth::user()->name }}"><br>
            <input name="email" id="email" type="email" class="form-control" required="" value="{{ Auth::user()->email }}"><br>
            <input name="password" id="password" type="password" class="form-control" placeholder="Senha" required=""><br>
            <button type="submit" class="btn btn-success">Atualizar</button>
        </form>
        <br>
        <button type="submit" class="btn btn-danger">Deletar</button>
        <a href="{{url('posts')}}">
            <button type="button" class="btn btn-primary">Cancelar</button>
        </a>
    </div>
</div>
@endsection
