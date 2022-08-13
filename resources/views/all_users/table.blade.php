<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">ID#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <th scope="row">{{ $user->name }}</th>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->address }}</td>
            <td>
                @if ($user->is_approved == 1)
                APPROVED
                @elseif($user->is_approved == 2)
                REJECTED
                @else
                PENDING
                @endif
            </td>
            <td>
                @if ($user->is_approved == 0)
                <a href="{{ route('approved.user', $user->id) }}" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                    <i class="fas fa-check"></i>
                </a> &nbsp;
                @endif
                @if ($user->is_approved == 0)
                @php($user_id = 'reject-form' . $user->id)
                <a onclick="event.preventDefault();
                     document.getElementById('{{ $user_id }}').submit();" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject">
                    <span style="cursor: pointer; color:red"><i class="fas fa-close"></i></span>
                </a>
                <form id="{{ $user_id }}" action="{{ route('reject.user',$user->id) }}" method="POST" class="d-none reject-form">
                    {{-- @method('PATCH')  --}}
                    @csrf
                </form>
                @endif
                <a href="{{ route('all_users.show', $user->id) }}" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="View Detail">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('all_users.edit', $user->id) }}" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>

                @php($user_id = 'delete-form' . $user->id)
                <a onclick="event.preventDefault();
                     document.getElementById('{{ $user_id }}').submit();" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                    <span style="cursor: pointer;"><i class="fas fa-trash"></i></span>
                </a>
                <form id="{{ $user_id }}" action="{{ route('all_users.destroy',$user->id) }}" method="POST" class="d-none delete-form">
                    @method('DELETE')
                    @csrf
                </form>
                {{-- <a href="{{route('blogs.show', $blog->id)}}" class="action-btn">
                <i class="fas fa-eye"></i>
                </a> --}}
                {{-- <a href="{{route('blogs.edit', $blog->id)}}" class="action-btn">
                <i class="fas fa-edit"></i>
                </a>
                @php($blog_id = 'delete-form' . $blog->id)
                <a onclick="event.preventDefault();
                     document.getElementById('{{ $blog_id }}').submit();">
                    <span style="cursor: pointer"><i class="fa fa-trash"></i></span>
                </a>
                <form id="{{ $blog_id }}" action="{{ route('blogs.destroy',$blog->id) }}" method="POST" class="d-none delete-form">
                    @method('DELETE')
                    @csrf
                </form> --}}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
