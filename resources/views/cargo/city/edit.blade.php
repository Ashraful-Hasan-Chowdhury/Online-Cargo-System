@extends('cargo.home')
@section('heading','Edit City')
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
            <form method="post" action="{{ route('update.cities',$city->id) }}">
                @csrf
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>City Name</strong> </label>
                    <input id="t-text" type="text" name="name" placeholder="City Name." value="{{$city->name}}"
                        class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="txt" class="mt-4 btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection