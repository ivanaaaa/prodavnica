@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Администраторски панел</div>

                <div class="panel-body">
                    Успешно се најавивте!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Продукти на кои им е променета цената</div>

                <div class="panel-body">
                    @if($notifikacii->count() == 0)
                        Нема нотификации за продукти.
                    @else

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Име на продукт</th>
                                <th>Цена</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($notifikacii as $notifikacija)
                                <tr>
                                    <th scope="row">{{ $notifikacija->id }}</th>
                                    <th scope="row"><a href="/produkti/{{$notifikacija->produkt->id}}/edit">{{ $notifikacija->produkt->ime }}</a></th>
                                    <th scope="row">{{ $notifikacija->produkt->cena }}</th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
