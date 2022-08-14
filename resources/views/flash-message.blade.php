@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

    {{--  <button type="button" class="close" data-dismiss="alert">×</button>  --}}

    <strong>{{ $message }}</strong>

</div>

@endif



@if ($message = Session::get('error'))

<div class="alert alert-danger alert-block" style="color: red;">

    {{--  <button type="button" class="close" data-dismiss="alert">×</button>  --}}

    <strong>{{ $message }}</strong>

</div>

@endif



@if ($message = Session::get('warning'))

<div class="alert alert-warning alert-block">

    {{--  <button type="button" class="close" data-dismiss="alert">×</button>  --}}

    <strong>{{ $message }}</strong>

</div>

@endif



@if ($message = Session::get('info'))

<div class="alert alert-info alert-block">

    {{--  <button type="button" class="close" data-dismiss="alert">×</button>  --}}

    <strong>{{ $message }}</strong>

</div>

@endif



{{--  @if ($errors->any())

<div class="alert alert-danger">

    <button type="button" class="close" data-dismiss="alert">×</button>

    Please check the form below for errors

</div>

@endif  --}}

@push('scripts')
    <script>
        $(document).ready(function() {
            toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-full-width",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 9000,
                "extendedTimeOut": 1000
              }
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
@endpush

