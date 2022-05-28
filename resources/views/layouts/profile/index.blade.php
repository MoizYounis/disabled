@extends('admin.layout.app')
@section('title')
    Home
@endsection


{{-- /* primary : #00796B */ --}}
 {{-- /* secondary : #5D4037 */ --}}
<style>
    .form-control:focus {
    box-shadow: none;
    border-color: #00796B
}

.profile-button {
    background: #044d44;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #00796B
}

.profile-button:focus {
    background: #00796B;
    box-shadow: none
}

.profile-button:active {
    background: #00796B;
    box-shadow: none
}

.back:hover {
    color: #00796B;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #00796B;
    color: #fff;
    cursor: pointer;
    border: solid 1px #00796B
}
</style>

@section('content')
<div class="container rounded bg-white mt-10 mb-5" style="margin-top: 110px;">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" style="color: #5D4037">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="{{ $user->name }}"></div>
                    <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" value="{{ $user->email }}" placeholder="email"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="{{ $user->phone }}"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address line 1" value="{{ $user->address }}"></div>
                    <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{ $user->city }}"></div>
                    {{--  <div class="col-md-12"><label class="labels">Category</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{ $user->categories->name }}"></div>  --}}
                    <div class="col-md-12"><label class="labels">Province</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{ $user->provinces->name }}"></div>
                    {{--  <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>  --}}
                </div>
                {{--  <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>  --}}
                {{--  <div class="mt-5 text-center"><button class="app-button" type="button">Save Profile</button></div>  --}}
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
@endsection
