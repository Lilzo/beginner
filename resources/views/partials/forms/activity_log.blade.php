<div class="form-group">
    {!! Form::label('area', 'Area') !!}
    <div class="form-controls">
        {!! Form::select('area', [
            'software' => 'Sowtware',
            'hardware' => 'Hardware',
            'web' => 'Web site'], null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('applicant', 'Applicant') !!}
    <div class="form-controls">
        {!! Form::text('applicant', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('problem', 'Problem') !!}
    <div class="form-controls">
        {!! Form::text('problem', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('activity', 'Activity') !!}
    <div class="form-controls">
        {!! Form::text('activity', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    <div class="form-controls">
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('is_solved', 'Solved') !!}
    <div class="form-controls">
        {!! Form::checkbox('is_solved', '1') !!}
    </div>
</div>
{!! Form::submit('Submit', ['class' => 'btn btn-primary', "id" => "submit-log"]) !!}

