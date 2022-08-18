<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">Sr#</th>
            <th scope="col">Name</th>
            <th scope="col">Product Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $key => $product)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <th scope="row">{{ $product->user->name }}</th>
                <th scope="row">{{ $product->product->name }}</th>
                <th scope="row">{{ $product->user->email }}</th>
                <th scope="row">{{ $product->user->phone }}</th>
                <th scope="row">{{ $product->message }}</th>
            </tr>
        @endforeach

    </tbody>
</table>
