<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">Sr#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $key => $service)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <th scope="row">{{ $service->name }}</th>
                <th scope="row">{{ $service->description }}</th>
                <td>
                    {{--  <a href="{{ route('service.show', $service->id) }}" class="action-btn">
                        <i class="fas fa-eye"></i>
                    </a>  --}}
                    <a href="{{ route('service.edit', $service->id) }}" class="action-btn">
                        <i class="fas fa-edit"></i>
                    </a>
                    @php($service_id = 'delete-form' . $service->id)
                    <a
                        onclick="event.preventDefault();
                     document.getElementById('{{ $service_id }}').submit();">
                        <span style="cursor: pointer"><i class="fa fa-trash"></i></span>
                    </a>
                    <form id="{{ $service_id }}" action="{{ route('service.destroy', $service->id) }}" method="POST"
                        class="d-none delete-form">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
