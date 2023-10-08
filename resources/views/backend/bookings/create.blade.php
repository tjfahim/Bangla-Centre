@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')

    <div class="container">
        <div class="card">
            <h4 class="card-header">Create Booking</h4>
            <div class="card-body">
                <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="padding-left: 25%; padding-right: 25%" required>
                        <div class="col-md mt-3">
                            <label for="hall_manage_id" class="form-label">Hall</label>
                            <select name="hall_manage_id" class="form-control">
                                <option value="">Select Hall</option>
                                @foreach($hallManages as $hall)
                                    <option value="{{ $hall->id }}">{{ $hall->hall_name }}</option>
                                @endforeach
                            </select>
                            @error('hall_manage_id')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%" required>
                        <div class="col-md mt-3">
                            <label for="check_in_date" class="form-label">Check-In Date</label>
                            <input type="date" name="check_in_date" class="form-control">
                            @error('check_in_date')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%" required>
                        <div class="col-md mt-3">
                            <label for="check_out_date" class="form-label">Check-Out Date</label>
                            <input type="date" name="check_out_date" class="form-control">
                            @error('check_out_date')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%" required>
                        <div class="col-md mt-3">
                            <label for="start_time" class="form-label">Start Time</label>
                            <input type="time" name="start_time" class="form-control">
                            @error('start_time')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%" required>
                        <div class="col-md mt-3">
                            <label for="end_time" class="form-label">End Time</label>
                            <input type="time" name="end_time" class="form-control">
                            @error('end_time')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label class="form-label">Organization Type:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="organization_type" id="non_charity" value="0" checked>
                                <label class="form-check-label" for="non_charity">
                                    Non Charity
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="organization_type" id="charity" value="1">
                                <label class="form-check-label" for="charity">
                                    Charity
                                </label>
                            </div>
                            @error('organization_type')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                  
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="bi bi-check"></i>
                                Book</button>
                            <a href="{{ route('booking.index') }}" class="btn btn-sm btn-danger mt-3"><i
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
