<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">Sr#</th>
            <th scope="col">Name</th>
            <th scope="col">Service Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $key => $service)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <th scope="row">{{ $service->user->name }}</th>
                <th scope="row">{{ $service->service->name }}</th>
                <th scope="row">{{ $service->user->email }}</th>
                <th scope="row">{{ $service->user->phone }}</th>
                <th scope="row">{{ $service->message }}</th>
            </tr>
        @endforeach

    </tbody>
</table>
