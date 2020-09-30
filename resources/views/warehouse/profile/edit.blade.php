@extends('warehouse.home')
@section('content')
<section class="sec-padding">
    <div class="thm-container">
        <div class="sec-title">
            <h2><span>View Warehouse Info</span></h2>

        </div>
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 pull-left">
                <form method="POST" action="{{ route('update.warehouse.profile') }}" enctype="multipart/form-data">
                    @csrf

                    <p>
                        {{-- <label for="exampleInputEmail1">Manager Image</label> --}}
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <label style="color: black;"> <strong>Manager's Photo</strong> <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear" title="Clear Image"></a></label><br>
                            <img src="{{asset($warehouse->manager_img)}}" alt="" style="width: 450px;height:280px;">
                            <label class="custom-file-container__custom-file">
                                <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                    name="manager_img" accept="image/*">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview">
                            </div>
                        </div>
                    </p>

                    <p>
                        <label for="exampleInputEmail1">Manager Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Manager Name"
                            value="{{$warehouse->name}}" required>
                    </p>

                    <p>
                        <label for="exampleInputEmail1">Manager's Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Manager email"
                            value="{{$warehouse->email}}" required>
                    </p>

                    <p>
                        <label for="exampleInputEmail1">Manager's Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Manager Name"
                            value="{{$warehouse->phone}}" required>
                    </p>

                    <p>
                        <div class="custom-file-container" data-upload-id="mySecondImage">
                            <label style="color: black;"><strong>Manager's National ID Card (NID)</strong> <a
                                    href="javascript:void(0)" class="custom-file-container__image-clear"
                                    title="Clear Image"></a></label><br>
                            <img src="{{asset($warehouse->nid)}}" alt="" style="width: 450px;height:280px;">
                            <label class="custom-file-container__custom-file">
                                <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                    name="nid" accept="image/*">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                    </p>


                    <p>
                        <label for="exampleInputEmail1">Warehouse Name</label>
                        <input type="text" name="warehouse_name" class="form-control" placeholder="Warehouse Name"
                            value="{{$warehouse->warehouse_name}}" required>
                    </p>

                    <p>
                        <div class="custom-file-container" data-upload-id="myThirdImage">
                            <label style="color: black;"> <strong>Warehouse Image</strong> <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear" title="Clear Image"></a></label><br>
                            <img src="{{asset($warehouse->warehouse_img)}}" alt="" style="width: 450px;height:280px;">
                            <label class="custom-file-container__custom-file">
                                <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                    name="warehouse_img" accept="image/*">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview">
                            </div>
                        </div>
                    </p>

                    <p>
                        <label for="exampleInputEmail1">city</label>
                        <input type="text" name="city" class="form-control" placeholder="city"
                            value="{{$warehouse->city}}" list="city" required>

                        <datalist id="city">
                            @foreach ($cities as $city)
                            <option value="{{$city->name}}">
                                @endforeach
                        </datalist>
                    </p>

                    <p>
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address"
                            value="{{$warehouse->address}}" required>
                    </p>

                    <p>
                        <div class="custom-file-container" data-upload-id="myFourthImage">
                            <label style="color: black;"> <strong>Document's Image</strong> <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear" title="Clear Image"></a></label><br>
                            <img src="{{asset($warehouse->document)}}" alt="" style="width: 450px;height:280px;">
                            <label class="custom-file-container__custom-file">
                                <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                    name="document" accept="image/*">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview">
                            </div>
                        </div>
                    </p>

                    {{-- Old images --}}
                    <input type="hidden" name="old_manager_img" value={{$warehouse->manager_img}}>
                    <input type="hidden" name="old_nid" value={{$warehouse->nid}}>
                    <input type="hidden" name="old_warehouse_img" value={{$warehouse->warehouse_img}}>
                    <input type="hidden" name="old_document" value={{$warehouse->document}}>
                    {{-- Old images --}}

                    <button type="submit" class="thm-btn">Update Now <i class="fa fa-arrow-right"></i></button>
                </form>
            </div>
            <div class="col-md-5 hidden-sm text-right pull-right">
                <img src="{{asset('public/user/images/request-qoute-man.jpg')}}" alt="Awesome Image" />
            </div>
        </div>
    </div>
</section>
@endsection