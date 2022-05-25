<!-- Id Field -->
<div class="mb-1">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $zone->id }}</p>
</div>

<!-- Name Field -->
<div class="mb-1">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $zone->name }}</p>
</div>

<!-- Created At Field -->
<div class="mb-1">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $zone->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="mb-1">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $zone->updated_at }}</p>
</div>

