<table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th scope="col">Sr#</th>
        <th scope="col">Writen By</th>
        <th scope="col">Blogs</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $key => $blog)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <th scope="row">{{$blog->user->name}}</th>
            <td>{{ $blog->blog }}</td>
            <td>
                {{--  <a href="{{route('blogs.show', $blog->id)}}" class="action-btn">
                    <i class="fas fa-eye"></i>
                </a>  --}}
                <a href="{{route('blogs.edit', $blog->id)}}" class="action-btn">
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
                </form>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>
