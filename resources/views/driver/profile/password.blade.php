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
            <form method="post" action="{{ route('driver.update.password') }}">
                @csrf
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Old Password</strong> </label>
                    <input id="password" type="password" placeholder="Type old password here" class="form-control"
                        name="old_password" required>
                </div>
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>New Password</strong> </label>
                    <input id="password" type="password" placeholder="Type new password here" class="form-control"
                        name="new_password" required>
                </div>
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Confirm Password</strong>
                    </label>
                    <input id="password" type="password" placeholder="Type new password again here" class="form-control"
                        name="confirm_password" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="txt" class="mt-4 btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection