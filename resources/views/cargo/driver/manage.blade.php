@extends('cargo.home')
@section('heading','Driver Approval')
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
                <label style="color:black;" for="exampleFormControlInput1"> <strong>Drivers Photo</strong> </label>
                <img src="{{asset($driver->photo)}}" alt="" style="width: 450px;height:280px;">

            </div>

            <div class="form-group">
                <label style="color:black;" for="exampleFormControlInput1"> <strong>Driving Licence</strong>
                </label>
                <img src="{{asset($driver->driving_licence)}}" alt="" style="width: 450px;height:280px;">
            </div>
            <div class="form-group">
                <label style="color:black;" for="exampleFormControlInput1"> <strong>National ID Card (NID)</strong>
                </label>
                <img src="{{asset($driver->nid)}}" alt="" style="width: 450px;height:280px;">
            </div>
            <form method="post" action="{{ route('drivers.change.truck',$driver->id) }}">
                @csrf
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Assign Truck</strong> </label>
                    <div class="form-group mb-4">
                        <select class="form-control  basic" name="truck">
                            <option value="{{$driver->trucks[0]->id}}">{{$driver->trucks[0]->truck_no}}</option>
                            @foreach ($trucks as $truck)
                            @if ($truck->drivers()->count()==0)
                            <option value="{{$truck->id}}">{{$truck->truck_no}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="submit" value="Change Truck" class="mt-4 btn btn-success">
                @if ($driver->block == null)
                <a href="{{ route('block.driver',$driver->id) }}" class="mt-4 btn btn-danger">block</a>
                @endif
                @if ($driver->block != null)
                <a href="{{ route('unblock.driver',$driver->id) }}" class="mt-4 btn btn-info">unblock</a>
                @endif
            </form>

        </div>
    </div>
</div>
@endsection