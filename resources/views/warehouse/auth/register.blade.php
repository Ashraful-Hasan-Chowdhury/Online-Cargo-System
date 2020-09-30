@extends('warehouse.home')

@section('content')
<section class="sec-padding">
    <div class="thm-container">
        <div class="sec-title">
            <h2><span>Register Warehouse</span></h2>

        </div>
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 pull-left">
                <form method="POST" action="{{ route('warehouse.register') }}">
                    @csrf

                    <p><input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" required autofocus placeholder="Manager Name">

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif</p>
                    <p><input id="email" type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" required placeholder="Manager Email">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif</p>

                    <p><input id="password" type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required placeholder="Password">

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif</p>
                    <p>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required placeholder="Confirm Password">
                    </p>

                    <button type="submit" class="thm-btn">Register Now <i class="fa fa-arrow-right"></i></button>
                </form>
            </div>
            <div class="col-md-5 hidden-sm text-right pull-right">
                <img src="{{asset('public/user/images/request-qoute-man.jpg')}}" alt="Awesome Image" />
            </div>
        </div>
    </div>
</section>

@endsection