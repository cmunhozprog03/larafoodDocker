@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <div class="row">
        <div class="col-md-4">
            <h1>Planos</h1>
        </div>
        <div class="col-md-2">
            <a href="" class="btn btn-dark">ADD</a>
        </div>
        <div class="col-md-6">

        </div>
    </div>

@stop

@section('content')
    <div class="w3-card-4">
        <div class="table-rsponsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>{{ $plan->price }}</td>
                            <td>
                                <button>Ver</button>
                                <button>Editar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
