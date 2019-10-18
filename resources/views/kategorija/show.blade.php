@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Категорија {{ $kategorija->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/kategorii') }}" title="Назад"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
                        <a href="{{ url('/kategorii/' . $kategorija->id . '/edit') }}" title="Измени категорија"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Измени</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['kategorii', $kategorija->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Избриши', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Избриши категорија',
                                    'onclick'=>'return confirm("Сигурно?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kategorija->id }}</td>
                                    </tr>
                                    <tr><th> Име </th><td> {{ $kategorija->ime }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
