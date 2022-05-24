<h5>Role: {{ $role->name }}</h5>


<p>Select the list of permissions that you want to assign to this role.</p>
{!! Form::open(['route' => 'roles.assignPermissions']) !!}

<div class="col-sm-12">
    @foreach($modules as $module)
        <p><b>{{ $module->name }}</b></p>
        <div style="margin-left: 50px;">
        @foreach($module->permissions as $permission)
            <label>
                <input type="checkbox" name="permission[]" @if(in_array($permission->id, $user_permissions)) checked @endif value="{{ $permission->id }}" id="permission_{{ $permission->id }}"> {{ $permission->display_name }}
            </label> &nbsp;&nbsp;&nbsp;
        @endforeach
        </div>
        <br>
    @endforeach
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12" style="margin-top: 50px;">
    {!! Form::hidden('role_id', $role->id) !!}
    {!! Form::submit('Save', ['class' => 'btn btn-primary submitBtn']) !!}
    <a href="{{ route('items.index') }}" class="btn btn-light">Cancel</a>
</div>

{!! Form::close() !!}