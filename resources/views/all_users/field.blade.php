<div class="mb-1 col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-1 col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
</div>

<div class="mb-1 col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-1 col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<?php $provices = \App\Models\Province::all()->pluck('name', 'id'); ?>

<div class="form-group mb-1 col-sm-6">
    {!! Form::label('province_id', 'Province:') !!}
    {!! Form::select('province_id', $provices, null, ['class' => 'form-control']) !!}
</div>

<div class="mb-1 col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

@if (Route::currentRouteName() == 'all_users.create')
    <div class="mb-1 col-sm-6">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>
@endif

<?php $roles = \App\Models\Role::all(); ?>

<div class="form-group mb-1 col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    @php($rol = [])
    @php($rol[] = 'Select role')
    @foreach($roles as $role)
        @php($rol[$role->id] = $role->name)
    @endforeach
    {!! Form::select('role', $rol, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="mb-1 col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('all_users.index') }}" class="btn btn-light">Cancel</a>
</div>
