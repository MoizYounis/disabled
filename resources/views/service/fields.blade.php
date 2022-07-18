<!-- Name Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('name', 'Service Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="mb-1 col-sm-12">
    {!! Form::label('description', 'Service Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('service.index') }}" class="btn btn-light">Cancel</a>
</div>
