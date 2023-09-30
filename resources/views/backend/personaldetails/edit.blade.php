@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')

    <div class="container">
        <div class="card">
            <h4 class="card-header">Edit Personal Details</h4>
            <div class="card-body">
                <form action="{{ route('person.update', $user->id) }}" method="POST" style="padding: 2% 25% 2% 25%">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                @error('name')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                @error('email')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label">Phone</label>
                                <input type="tel" name="phone" class="form-control" value="{{ $user->phone }}">
                                @error('phone')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                                @error('address')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label for="Role" class="form-label">Role</label>
                                <select class="form-select" id="role" name="role">
                                    <option checked>Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                                @error('role')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md mt-3">
                            <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="bi bi-check"></i>
                                Save</button>
                            <a href="{{ route('person.index') }}" class="btn btn-sm btn-danger mt-3"><i
                                    class="bi bi-x"></i>
                                Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
@endsection
