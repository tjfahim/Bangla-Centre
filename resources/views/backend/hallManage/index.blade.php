@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
      <div class="col-lg-12 col-mb-4" style="font-size: 20px; margin-bottom:10px;font-weight: 600;width:60vw;;">  Hall Lists</div>

    <div class="container" style="
    margin-top: 4%;        
">
        <div class="card">
            <div class="card-header d-flex">
                
                <a class="btn btn-sm btn-outline-primary " href="{{ route('hallmanage.create') }}">Add New Hall</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Hall Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Capacity</th>
                            <th scope="col">Charity Discount</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sl=1;
                        @endphp
                        @foreach ($halls as $hall)
                        <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td>{{ $hall->hall_name ?? '' }}</td>
                            <td>{!! $hall->hall_description ?? '' !!}</td>
                            <td>{{ $hall->capacity ?? '' }}</td>
                            <td>{{ $hall->charity_discount ?? '' }}</td>
                            <td>{{ $hall->price ?? '' }}</td>
                            <td>
                                @if ($hall->image)
                                    <img style="height: 50px;width:50px;" src="{{ asset('uploads/images/' . $hall->image) }}"  alt="">
                                @else
                                    There is no image
                                    <!-- <img src="{{ asset('img/default.png') }}"> -->
                                @endif
                                
                            </td>
                            <td>{{ $hall->status ?? '' }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('hallmanage.edit',$hall->id) }}">Edit</a>
                                <form action="{{ route('hallmanage.destroy',$hall->id) }}" method="post" onsubmit="return confirmDelete()">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
