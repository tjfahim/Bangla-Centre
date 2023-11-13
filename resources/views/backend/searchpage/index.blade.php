@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
                Hall Lists
                <a class="btn btn-sm btn-outline-primary ms-5" href="{{ route('searchpage.create') }}">Add New Hall</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th scope="col">Ser No.</th>
                            <th scope="col">Booked Date</th>
                            <th scope="col">Hall</th>
                            <th scope="col">Booking Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sl=1;
                        @endphp
                        @foreach ($searchpages as $searchpage)
                        <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td>{{ $searchpage->booked_date ?? '' }}</td>
                            <td>{{ $searchpage->hall ?? '' }}</td>
                            <td>{{ $searchpage->period ?? '' }}</td>
                            <td>{{ $searchpage->booking_type ?? '' }}</td>
                            <td>{{ $searchpage->price ?? '' }}</td>
                            <td>{!! $searchpage->description ?? '' !!}</td>
                            <td>{{ $searchpage->discount ?? '' }}</td>
                            <td>
                                @if (file_exists(storage_path() . '/app/public/searchpage/' . $searchpage->image))
                                    <img src="{{ asset('storage/searchpage/' . $searchpage->image) }}"
                                        height="100">
                                @else
                                    iamge nai
                                    <!-- <img src="{{ asset('img/default.png') }}"> -->
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('searchpage.edit',$searchpage->id) }}">Edit</a>

                                <form action="{{ route('searchpage.destroy', $searchpage->id) }}" method="POST" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
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
