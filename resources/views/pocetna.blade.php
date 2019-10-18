@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Продукти</div>

                    <div class="panel-body">
                        @if($produkti->count() == 0)
                            Нема внесено продукти.
                        @else

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#Цена</th>
                                        <th>Слика</th>
                                        <th>Име</th>
                                        <th>Опис</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($produkti as $produkt)
                                    <tr>
                                        <th scope="row">{{ $produkt->cena }} MKD</th>
                                        <td><img src="{{$produkt->slika}}" alt="" height="50" width="50"></td>
                                        <td>{{ $produkt->ime }}</td>
                                        <td><a href="/produkt/{{$produkt->id}}">{{ str_limit($produkt->opis, 30) }}</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    @if($kategorii->count() == 0)
                        <a href="" class="list-group-item">Нема внесено категории.</a>
                    @else
                    @foreach ($kategorii as $kategorija)
                    <a href="/kategorija/{{$kategorija->id}}" class="list-group-item">{{ $kategorija->ime }} ({{count($kategorija->produkti)}})</a>
                    @endforeach
                    @endif
                </div>
            </div><!--/.sidebar-offcanvas-->
        </div>
    </div>
@endsection
