@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Додај нов продукт</div>
                    <div class="panel-body">
                        <a href="{{ url('/produkti') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/produkti', 'class' => 'form-horizontal', 'files' => true]) !!}

                            <div class="form-group">
                                <label for="id_kategorija" class="col-md-4 control-label">Категорија</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="id_kategorija" name="id_kategorija">
                                        @foreach ($kategorii as $kategorija)
                                        <option value="{{$kategorija->id}}">{{$kategorija->ime}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        @include ('produkti.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
