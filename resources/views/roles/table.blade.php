<table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th scope="col">Sr#</th>
        <th scope="col">Name</th>
        <th scope="col">Guard Name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($roles as $key => $role)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{ $role->name }}</td>
            <td>{{ $role->guard_name }}</td>
            <td>
                <a href="{{route('roles.show', $role->id)}}" class="action-btn">
                    <i class="fas fa-eye"></i>
                </a>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>
