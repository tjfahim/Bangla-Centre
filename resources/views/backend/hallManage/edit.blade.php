@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
      <div class="col-lg-12 col-mb-4" style="font-size: 20px; margin-bottom:10px;font-weight: 600;width:60vw;;"> Edit Hall</div>

    <div class="container" style="
    margin-top: 4%;        
">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('hallmanage.update', $hall->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="hall_name" class="form-label">Hall Name</label>
                            <input type="text" name="hall_name" class="form-control" value="{{ $hall->hall_name }}">
                            @error('hall_name')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
               
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="Description" class="form-label">Description</label>
                            <textarea name="hall_description" id="ckeditor" class="form-control">{{ $hall->hall_description }}</textarea>
                            @error('description')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="capacity" class="form-label">Capacity</label>
                            <input type="text" name="capacity" class="form-control" value="{{ $hall->capacity }}">
                            @error('capacity')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="charity_discount" class="form-label">Charity Discount</label>
                            <input type="text" name="charity_discount" class="form-control" value="{{ $hall->charity_discount }}">
                            @error('charity_discount')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="Price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" value="{{ $hall->price }}">
                            @error('price')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <label for="image" class="form-label">Image</label><br>
                            <img style="height: 100px;width:100px;" src="{{ asset('uploads/images/' . $hall->image) }}"  alt="">

                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="delete_image" name="delete_image" value="1">
                                <label class="form-check-label" for="delete_image">Delete Existing Image</label>
                            </div>
                            <input type="file" name="image" class="form-control" value="{{ $hall->image }}">
                            @error('image')
                                <div class="text-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding-left: 25%; padding-right: 25%">
                        <div class="col-md mt-3">
                            <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="bi bi-check"></i>
                                Save</button>
                            <a href="{{ route('hall_manage.index') }}" class="btn btn-sm btn-danger mt-3"><i
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
