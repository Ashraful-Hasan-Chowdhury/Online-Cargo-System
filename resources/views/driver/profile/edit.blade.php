@extends('driver.home')
@section('heading','Edit Profile')
@if (auth('driver')->user()->approval == 'pending')
@section('warning','Wait for admin\'s approval!')
@endif
@if (auth('driver')->user()->approval != 'pending' && auth('driver')->user()->approval == 'rejected' ||
auth('driver')->user()->approval == null)
@section('warning','Please update your profile to get all the features enabled!')
@endif
@if (auth('driver')->user()->block !=null)
@section('warning','Your account has been blocked, Please contact admin!')
@endif
@section('content')
<div class="card component-card_1 mt-4" style="width: 1000px;">
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-lg-6 col-12 mx-auto">
            <form method="post" action="{{ route('update.profile') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Driver Name</strong> </label>
                    <input id="t-text" type="text" name="name" placeholder="Driver Name" class="form-control"
                        value="{{$driver->name}}" required>
                </div>
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Phone</strong> </label>
                    <input id="t-text" type="text" name="phone" placeholder="Phone Number" class="form-control"
                        value="{{$driver->phone}}" required>
                </div>
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Email</strong> </label>
                    <input id="t-text" type="text" name="email" placeholder="Email" class="form-control"
                        value="{{$driver->email}}" required>
                </div>
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Address</strong> </label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1"
                        rows="3">{{$driver->address}}</textarea>
                </div>
                <div class="form-group">
                    <div class="custom-file-container" data-upload-id="myThirdImage">
                        <label style="color: black;"> <strong>My Photo</strong> <a href="javascript:void(0)"
                                class="custom-file-container__image-clear" title="Clear Image"></a></label>
                        <img src="{{asset($driver->photo)}}" alt="" style="width: 450px;height:280px;">
                        <label class="custom-file-container__custom-file">
                            <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                name="photo" accept="image/*">
                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                        </label>
                        <div class="custom-file-container__image-preview">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-file-container" data-upload-id="myFirstImage">
                        <label style="color: black;"> <strong>Driving Licence</strong> <a href="javascript:void(0)"
                                class="custom-file-container__image-clear" title="Clear Image"></a></label>
                        <img src="{{asset($driver->driving_licence)}}" alt="" style="width: 450px;height:280px;">
                        <label class="custom-file-container__custom-file">
                            <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                name="driving_licence" accept="image/*">
                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                        </label>
                        <div class="custom-file-container__image-preview">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-file-container" data-upload-id="mySecondImage">
                        <label style="color: black;"><strong>National ID Card (NID)</strong> <a
                                href="javascript:void(0)" class="custom-file-container__image-clear"
                                title="Clear Image"></a></label>
                        <img src="{{asset($driver->nid)}}" alt="" style="width: 450px;height:280px;">
                        <label class="custom-file-container__custom-file">
                            <input type="file" class="custom-file-container__custom-file__custom-file-input" name="nid"
                                accept="image/*">
                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                        </label>
                        <div class="custom-file-container__image-preview"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Truck Number</strong> </label>
                    <input id="t-text" type="text" name="truck_no" placeholder="Truck No." class="form-control"
                        disabled>
                </div>
                {{-- Old images --}}
                <input type="hidden" name="old_driving_licence" value={{$driver->driving_licence}}>
                <input type="hidden" name="old_nid" value={{$driver->nid}}>
                <input type="hidden" name="old_photo" value={{$driver->photo}}>
                {{-- Old images --}}
                <input type="submit" name="txt" class="mt-4 btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection