@extends('cargo.home')
@section('heading','Edit Pricing')
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
            <form method="post" action="{{ route('update.prices',$price->id) }}">
                @csrf

                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Good Name</strong> </label>
                    <div class="form-group mb-4">
                        <select class="form-control  basic" name="good">
                            <option value=""></option>
                            @foreach ($goods as $good)
                            @foreach ($price->goods as $pgood)
                            <option value="{{$good->id}}" @if ($good->id==$pgood->id)
                                selected
                                @endif>{{$good->name}}</option>
                            @endforeach

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Price</strong>
                        <small>/km</small> </label>
                    <input id="t-text" type="text" name="price" placeholder="price" class="form-control"
                        value="{{$price->price}}" required>
                    <input type="submit" name="txt" class="mt-4 btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection