@extends('backend.layouts.master')

@section('main_content')

@include('backend.layouts2.includes.message')


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <div class="container" style="margin-top: 70px;margin-bottom: 90px; padding-left: 20%; padding-right: 20%">

        <h3 class="text-center mb-3" style="text-decoration: underline;">Add Personal Details</h3>
        <div class="card">
            <div class="card-header d-flex">
                Personal Details
            </div>
            <div class="card-body">
                <form action="{{ route('person.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                                @error('name')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
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
                                <input type="tel" name="phone" class="form-control">
                                @error('phone')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control">
                                @error('address')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label">Message</label>
                                <textarea type="text" name="comment" class="form-control"></textarea>
                                @error('comment')
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection
