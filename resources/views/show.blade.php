@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 m-auto text-center">
            <div class="card text-center">
                <div class="card-header">
                    {{$posts->title}}
                </div>
                <div class="card-body">
                    <p class="card-text">{{$posts->description}}</p>
                    <a href="{{url('posts')}}">
                        <button type="button" class="btn btn-primary">Voltar</button>
                    </a>
                </div>
                <div class="card-footer text-muted">
                    {{$posts->updated_at}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
