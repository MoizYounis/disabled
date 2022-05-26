<div class="mb-1 col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', $user->name, ['class' => 'form-control', 'readonly']) !!}
</div>

<div class="mb-1 col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', $user->email, ['class' => 'form-control', 'id' => 'email', 'readonly']) !!}
</div>

<div class="mb-1 col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', $user->phone, ['class' => 'form-control', 'readonly']) !!}
</div>

<div class="mb-1 col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', $user->address, ['class' => 'form-control', 'readonly']) !!}
</div>

<?php $provices = \App\Models\Province::all()->pluck('name', 'id'); ?>

<div class="mb-1 col-sm-6">
    {!! Form::label('provices', 'Province:') !!}
    {!! Form::text('provices', $user->provinces->name, ['class' => 'form-control', 'readonly']) !!}
</div>

<div class="mb-1 col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', $user->city, ['class' => 'form-control', 'readonly']) !!}
</div>

<div class="mb-1 col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::text('role', $user->role, ['class' => 'form-control', 'readonly']) !!}
</div>

