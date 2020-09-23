@extends('cargo.home')
@section('heading','Driver List')
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
                <th>Status</th>
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
                @if ($driver->block == null)
                <td style="color: black">Unblocked</td>
                @else
                <td style="color: black">Blocked</td>
                @endif
                <td>
                    <a href="{{ route('drivers.manage',$driver->id) }}" class="btn btn-sm btn-primary">view
                        more</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection