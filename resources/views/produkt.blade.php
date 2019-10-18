@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Продукт {{ $produkti->id }}</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>ID</th><td>{{ $produkti->id }}</td>
                                </tr>
                                <tr><th> Име </th><td> {{ $produkti->ime }} </td></tr><tr><th> Опис </th><td> {{ $produkti->opis }} </td></tr>
                                <tr><th> Цена </th><td> {{ $produkti->cena }} MKD</td></tr>
                                <tr><th> Слика </th><td> <img src="{{$produkti->slika}}" alt="" width="600"> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    @if($kategorii->count() == 0)
                        <a href="" class="list-group-item">Нема внесено категории.</a>
                    @else
                        @foreach ($kategorii as $kategorija)
                            <a href="/kategorija/{{$kategorija->id}}" class="list-group-item">{{ $kategorija->ime }}</a>
                        @endforeach
                    @endif
                </div>
            </div><!--/.sidebar-offcanvas-->
        </div>
    </div>
@endsection
