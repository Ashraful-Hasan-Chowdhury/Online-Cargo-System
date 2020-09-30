@extends('warehouse.home')
@section('content')
<section class="sec-padding">
    <div class="thm-container">
        <div class="sec-title">
            <h2><span>Change Password</span></h2>

        </div>
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 pull-left">
                <form method="post" action="{{ route('warehouse.update.password') }}">
                    @csrf
                    <div class="form-group">
                        <label style="color:black;" for="exampleFormControlInput1"> <strong>Old Password</strong>
                        </label>
                        <input id="password" type="password" placeholder="Type old password here" class="form-control"
                            name="old_password" required>
                    </div>
                    <div class="form-group">
                        <label style="color:black;" for="exampleFormControlInput1"> <strong>New Password</strong>
                        </label>
                        <input id="password" type="password" placeholder="Type new password here" class="form-control"
                            name="new_password" required>
                    </div>
                    <div class="form-group">
                        <label style="color:black;" for="exampleFormControlInput1"> <strong>Confirm Password</strong>
                        </label>
                        <input id="password" type="password" placeholder="Type new password again here"
                            class="form-control" name="confirm_password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="thm-btn">Change Now <i class="fa fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-md-5 hidden-sm text-right pull-right">
                <img src="{{asset('public/user/images/request-qoute-man.jpg')}}" alt="Awesome Image" />
            </div>
        </div>
    </div>
</section>
@endsection