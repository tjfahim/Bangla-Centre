@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')

    <div class="container">
        <div class="card">
            <h4 class="card-header">Create Shift</h4>
            <div class="card-body">
                <form action="{{ route('shift.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="padding-left: 25%; padding-right: 25%" requried>
                        <div class="col-md mt-3">
                            <label for="name" class="form-label">Shift Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%" requried>
                        <div class="col-md mt-3">
                            <label for="in_time" class="form-label">In Time</label>
                            <input type="time" name="in_time" class="form-control">
                            @error('in_time')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%" requried>
                        <div class="col-md mt-3">
                            <label for="out_time" class="form-label">Out Time</label>
                            <input type="time" name="out_time" class="form-control">
                            @error('out_time')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="bi bi-check"></i>
                                Save</button>
                            <a href="{{ route('shift.index') }}" class="btn btn-sm btn-danger mt-3"><i
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min', today);
        $('#date_picker2').attr('min', today);
    </script>
@endsection
