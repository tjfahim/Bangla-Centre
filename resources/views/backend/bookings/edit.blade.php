@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
    <div class="container">
        <div class="card">
            <h4 class="card-header">Edit Booking</h4>
            <div class="card-body">
                <form action="{{ route('booking.update', $booking->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="padding-left: 25%; padding-right: 25%" required>
                        <div class="col-md mt-3">
                            <label for="hall_manage_id" class="form-label">Hall</label>
                            <select name="hall_manage_id" class="form-control">
                                <option value="">Select Hall Manage</option>
                                @foreach($hallManages as $hall)
                                    <option value="{{ $hall->id }}" {{ $booking->hall_manage_id == $hall->id ? 'selected' : '' }}>
                                        {{ $hall->hall_name }}
                                    </option>
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
                            <input type="date" name="check_in_date" class="form-control" 
                                   @if(isset($booking->check_in_date)) value="{{ $booking->check_in_date }}" @endif>
                            @error('check_in_date')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row" style="padding-left: 25%; padding-right: 25%" required>
                        <div class="col-md mt-3">
                            <label for="check_out_date" class="form-label">Check-Out Date</label>
                            <input type="date" name="check_out_date" class="form-control" 
                                   @if(isset($booking->check_out_date)) value="{{ $booking->check_out_date }}" @endif>
                            @error('check_out_date')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                 
                    
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="bi bi-check"></i>
                                Save</button>
                            <a href="" class="btn btn-sm btn-danger mt-3"><i
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
