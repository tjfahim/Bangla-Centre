@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')

    <div class="container">
        <div class="card">
            <h4 class="card-header">Create Hall</h4>
            <div class="card-body">
                <form action="{{ route('searchpage.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="booked_date" class="form-label">Booked Date</label>
                            <input name="booked_date" id="date_picker" type="date" class="form-control">
                            @error('booked_date')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="Hall" class="form-label">Hall</label>
                            <select class="form-select" id="hall" name="hall">
                                <option value="Hall 1">Hall 1</option>
                                <option value="Hall 2">Hall 2</option>
                                <option value="Hall 3">Hall 3</option>
                                <option value="Hall 4">Hall 4</option>
                                <option value="Hall 5">Hall 5</option>
                            </select>
                            @error('hall')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>                       
                    </div>
                    
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <div for="Type" class="form-label">Booking Type</div>
                            <input type="radio" id="Charity" name="booking_type" value="Charity">
                            <label for="Charity"> Charity</label>
                            <input type="radio" id="Non Charity" name="booking_type" value="Non Charity">
                            <label for="Non Charity"> Non Charity</label>
                            @error('booking_type')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md mt-3">
                            <label for="Price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control">
                            @error('price')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="Description" class="form-label">Description</label>
                            <textarea type="text" name="description" class="form-control" id="ckeditor"></textarea>
                            @error('description')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="Discount" class="form-label">Discount</label>
                            <input type="number" name="discount" class="form-control">
                            @error('discount')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="bi bi-check"></i>
                                Save</button>
                            <a href="{{ route('searchpage.index') }}" class="btn btn-sm btn-danger mt-3"><i
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
