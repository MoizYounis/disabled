<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">Sr#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $key => $notification)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <th scope="row">{{ $notification->name }}</th>
                <th scope="row">{{ $notification->email }}</th>
                <th scope="row">{{ $notification->phone }}</th>
                <th scope="row">{{ $notification->message }}</th>
            </tr>
        @endforeach

    </tbody>
</table>
