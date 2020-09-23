@extends('cargo.home')
@section('heading','Edit Goods')
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
            <form method="post" action="{{ route('update.goods',$good->id) }}">
                @csrf
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Goods Name</strong> </label>
                    <input id="t-text" type="text" name="name" placeholder="name" class="form-control"
                        value="{{$good->name}}" required>
                </div>
                <div class="form-group">
                    <label style="color:black;" for="exampleFormControlInput1"> <strong>Goods Type</strong> </label>
                    <div class="form-group mb-4">
                        <select class="form-control" id="exampleFormControlSelect1" name="type">
                            <option></option>
                            <option @if ($good->type == 'Solid')
                                selected
                                @endif>Solid</option>
                            <option @if ($good->type == 'Liquid')
                                selected
                                @endif>Liquid</option>
                            <option @if ($good->type == 'Gas')
                                selected
                                @endif>Gas</option>
                        </select>
                    </div>
                    <input type="submit" name="txt" class="mt-4 btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection