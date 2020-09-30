@extends('warehouse.home')

@section('content')
<section class="sec-padding">
    <div class="thm-container">
        <div class="sec-title">
            <h2><span>Login to the system</span></h2>

        </div>
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 pull-left">
                <form method="POST" action="{{ route('warehouse.login') }}">
                    @csrf

                    <p><input id="email" type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" placeholder="Email" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif</p>
                    <p><input id="password" type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            placeholder="Password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif</p>

                    <button type="submit" class="thm-btn">Login Now <i class="fa fa-arrow-right"></i></button> or
                    <a href="{{ route('warehouse.register') }}">Register Now</a>
                </form>
            </div>
            <div class="col-md-5 hidden-sm text-right pull-right">
                <img src="{{asset('public/user/images/request-qoute-man.jpg')}}" alt="Awesome Image" />
            </div>
        </div>
    </div>
</section>

@endsection