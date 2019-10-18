@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Продукти</div>
                    <div class="panel-body">
                        <a href="{{ url('/produkti/create') }}" class="btn btn-success btn-sm" title="Додај нов продукт">
                            <i class="fa fa-plus" aria-hidden="true"></i> Додај нов
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/produkti', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Пребарај...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Име</th><th>Опис</th><th>Цена</th><th>Категорија</th><th>Акција</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($produkti as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->ime }}</td><td>{{ $item->opis }}</td><td>{{ $item->cena }}</td><td>{{ $item->kategorija->ime }}</td>
                                        <td>
                                            <a href="{{ url('/produkti/' . $item->id) }}" title="Прегледај продукт"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Преглед</button></a>
                                            <a href="{{ url('/produkti/' . $item->id . '/edit') }}" title="Измени продукти"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Измени</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/produkti', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Избриши', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Избриши продукт',
                                                        'onclick'=>'return confirm("Сигурно?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $produkti->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
