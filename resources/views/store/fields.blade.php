<!-- Name Field -->
<div class="mb-1 col-sm-6">
    {!! Form::label('name', 'Product Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="mb-1 col-sm-6">
    {!! Form::label('image', 'Product Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>
<div class="mb-1 col-sm-12">
    {!! Form::label('description', 'Product Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('store.index') }}" class="btn btn-light">Cancel</a>
</div>
