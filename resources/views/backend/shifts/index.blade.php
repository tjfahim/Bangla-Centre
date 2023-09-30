@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
               Shift
                <a class="btn btn-sm btn-outline-primary ms-5" href="{{ route('shift.create') }}">Add New Shift</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">In Time</th>
                            <th scope="col">Out Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sl=1;
                        @endphp
                        @foreach ($shifts as $shift)
                        <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td>{{ $shift->name ?? '' }}</td>
                            <td>{!! $shift->in_time ? date('h:i A', strtotime($shift->in_time)) : '' !!}</td>
                            <td>{{ $shift->out_time ? date('h:i A', strtotime($shift->out_time)) : '' }}</td>
                            
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('shift.edit',$shift->id) }}">Edit</a>
                                <form action="{{ route('shift.destroy',$shift->id) }}" method="post" onsubmit="return confirmDelete()">
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
