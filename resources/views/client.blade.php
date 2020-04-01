@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form name = "formClient" id = "formClient" action ="{{url('oauth/clients')}}" method="post">
            @csrf
            <input name="name" id="name" type="text" class="form-control" placeholder="name" required=""><br>
            <input name="redirect" id="redirect" type="text" class="form-control" placeholder="redirect" required=""><br>
            <button name = "send" id="name" type="submit" class="btn btn-success btn-block">Enviar</button>
            <hr />
        </form>
    </div>
    <br>
    <div class="text-center">
        <h4>Clients </h4>
    </div>
    <br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name </th>
            <th scope="col">Redirect</th>
            <th scope="col">Secret</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->name}}</td>
                <td>{{$client->redirect}}</td>
                <td>{{$client->secret}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
