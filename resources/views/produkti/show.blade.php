@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Продукт {{ $produkti->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/produkti') }}" title="Назад"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
                        <a href="{{ url('/produkti/' . $produkti->id . '/edit') }}" title="Измени продукт"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Измени</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['produkti', $produkti->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Избриши', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Produkti',
                                    'onclick'=>'return confirm("Сигурно?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $produkti->id }}</td>
                                    </tr>
                                    <tr><th> Име </th><td> {{ $produkti->ime }} </td></tr>
                                    <tr><th> Опис </th><td> {{ $produkti->opis }} </td></tr>
                                    <tr><th> Категорија </th><td> {{ $produkti->kategorija->ime }} </td></tr>
                                    <tr><th> Цена </th><td> {{ $produkti->cena }} MKD</td></tr>
                                    <tr><th> Слика </th><td> {{ HTML::image($produkti->slika) }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
