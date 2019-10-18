<div class="form-group {{ $errors->has('ime') ? 'has-error' : ''}}">
    {!! Form::label('ime', 'Име', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ime', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('ime', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('opis') ? 'has-error' : ''}}">
    {!! Form::label('opis', 'Опис', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('opis', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('opis', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cena') ? 'has-error' : ''}}">
    {!! Form::label('cena', 'Цена', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('cena', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('cena', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('slika') ? 'has-error' : ''}}">
    {!! Form::label('slika', 'Слика', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('slika', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('slika', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Додај', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
