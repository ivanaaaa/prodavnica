<div class="form-group {{ $errors->has('ime') ? 'has-error' : ''}}">
    {!! Form::label('ime', 'Име', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ime', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ime', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Додај', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
