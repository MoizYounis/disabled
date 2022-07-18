<!-- Name Field -->
<div class="mb-1">
    {!! Form::label('name', 'Prduct Name:') !!}
    <h3>{{ $store->name }}</h3>
</div>

<!-- Created At Field -->
<div class="mb-1">
    {!! Form::label('created_at', 'Product Image:') !!}
<img src="{{ asset('storage/'.$store->image) }}" width="50%" height="50%" alt="">
</div>

<!-- Updated At Field -->
<div class="mb-1">
    {!! Form::label('updated_at', 'Product Description:') !!}
    <h5>{{ $store->description }}</h5>
</div>

