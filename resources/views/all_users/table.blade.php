<table class="table table-striped" id="myTable">
    <thead>
      <tr>
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
            <th scope="row">{{ $user->name }}</th>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->is_approved == 0 ? 'PENDING' : 'APPROVED' }}</td>
            <td>
                @if ($user->is_approved == 0)
                    <a href="{{ route('approved.user', $user->id) }}" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                        <i class="fas fa-check"></i>
                    </a> &nbsp;
                @endif
                @if ($user->is_approved == 0)
                    <a href="{{ route('reject.user', $user->id) }}" class="action-btn" style="color: red" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject">
                        <i class="fas fa-close"></i>
                    </a>
                @endif
                <a href="{{ route('all_users.show', $user->id) }}" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="View Detail">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('all_users.edit', $user->id) }}" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{ route('all_users.destroy', $user->id) }}" class="action-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                    <i class="fas fa-trash"></i>
                </a>
                {{--  <a href="{{route('blogs.show', $blog->id)}}" class="action-btn">
                    <i class="fas fa-eye"></i>
                </a>  --}}
                {{-- <a href="{{route('blogs.edit', $blog->id)}}" class="action-btn">
                    <i class="fas fa-edit"></i>
                </a>
                @php($blog_id = 'delete-form' . $blog->id)
                <a  onclick="event.preventDefault();
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
