@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
      <div class="col-lg-12 col-mb-4" style="font-size: 20px; margin-bottom:10px;font-weight: 600;width:60vw;;"> Customer Details Lists</div>

    <div class="container"  style="
    margin-top: 4%;        
">
        <div class="card">
          
            <div class="card-body">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th scope="col">Ser No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sl=1;
                        @endphp
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td>{{ $user->name ?? '' }}</td>
                            <td>{{ $user->email ?? '' }}</td>
                            <td>{{ $user->phone ?? '' }}</td>
                            <td>{{ $user->address ?? '' }}</td>
                            <td>{{ $user->date_of_birth ?? '' }}</td>
                            <td style="color: {{ $user->role === 'admin' ? 'green' : 'black' }}">{{ $user->role ?? '' }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('person.edit',$user->id) }}">Edit</a>

                                <form action="{{ route('person.destroy', $user->id) }}" method="POST" style="display: inline">
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
