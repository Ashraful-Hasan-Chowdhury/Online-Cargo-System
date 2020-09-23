@extends('cargo.home')
@section('heading','Driver Request List')
@section('content')
{{-- <div class="card component-card_1 mt-4" style="width: 1000px;">
    <div class="card-body">
        
    </div>
</div> --}}

<div class="table-responsive mb-4 mt-4">
    <table id="html5-extension" class="table table-hover non-hover" style="width:100%;">
        <thead>
            <tr>
                <th>SL</th>
                <th>Driver Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)

            <tr>
                <td style="color: black">{{$loop->index+1}}</td>
                <td style="color: black">{{$driver->name}}</td>
                <td style="color: black">{{$driver->email}}</td>
                <td style="color: black">{{$driver->phone}}</td>
                <td style="color: black">{{$driver->address}}</td>

                <td>
                    {{-- <div class="btn-group">
                        <button type="button" class="btn btn-dark btn-sm">
                            Open
                        </button>
                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" data-reference="parent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                            <a class="dropdown-item" href="" style="color: black">Edit</a>
                            <a class="dropdown-item" id="delete" href="" style="color: black">Delete</a>
                        </div>
                    </div> --}}
                    <a href="{{ route('driver.request.details',$driver->id) }}" class="btn btn-sm btn-primary">view
                        more</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection