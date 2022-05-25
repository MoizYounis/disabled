<div class="mb-1 col-sm-12">
    {!! Form::label('heading', 'Heading Text:') !!}
    {!! Form::text('heading', null, ['class' => 'form-control']) !!}
</div>

<!-- Blog Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('blog', 'Write Your Blog:') !!}
    {!! Form::textarea('blog', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('blogs.index') }}" class="btn btn-light">Cancel</a>
</div>
