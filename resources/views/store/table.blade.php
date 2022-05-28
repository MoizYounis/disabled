<table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th scope="col">Sr#</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($stores as $key => $store)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{ $store->name }}</td>
            <td><img src="{{ asset('storage/'.$store->image) }}" width="20%" class="img-fluid" alt="{{$store->name}} Image"></td>
            <td>{{ $store->description }}</td>
            <td>
                <a href="{{route('store.show', $store->id)}}" class="action-btn">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="{{route('store.edit', $store->id)}}" class="action-btn">
                    <i class="fas fa-edit"></i>
                </a>
                @php($store_id = 'delete-form' . $store->id)
                <a  onclick="event.preventDefault();
                     document.getElementById('{{ $store_id }}').submit();">
                    <span style="cursor: pointer"><i class="fa fa-trash"></i></span>
                </a>
                <form id="{{ $store_id }}" action="{{ route('store.destroy',$store->id) }}" method="POST" class="d-none delete-form">
                    @method('DELETE')
                    @csrf
                </form>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>
