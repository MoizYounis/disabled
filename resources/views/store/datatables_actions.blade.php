{!! Form::open(['route' => ['zones.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('zones.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('zones.edit', $id) }}" class='btn btn-default btn-xs'>
        <i data-feather='edit-3'></i>
    </a>
    {!! Form::button('<i data-feather="trash-2"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-default btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
