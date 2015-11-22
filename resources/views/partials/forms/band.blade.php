<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    <div class="form-controls">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
{!! Form::submit('Save band', ['class' => 'btn btn-primary']) !!}