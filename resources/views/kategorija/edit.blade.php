@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Измени категорија #{{ $kategorija->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/kategorii') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($kategorija, [
                            'method' => 'PATCH',
                            'url' => ['/kategorii', $kategorija->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('kategorija.form', ['submitButtonText' => 'Ажурирај'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
