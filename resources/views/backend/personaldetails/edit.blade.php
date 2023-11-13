@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
      <div class="col-lg-12 col-mb-4" style="font-size: 20px; margin-bottom:10px;font-weight: 600;width:60vw;;"> Edit Personal Details</div>

    <div class="container" style="
    margin-top: 4%;        
">
        <div class="card">
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
                            <div >
                                <label class="form-label">Post Code</label>
                                <input type="text" name="post_code" class="form-control" id="postCode" value="{{ $user->post_code }}">
                                @error('post_code')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                                <span id="post_code_error" style="color: red;"></span>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $user->address }}">
                                @error('address')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline mb-2 col-md-4 col-sm-4 mt-2" style="padding-left:0">
                                <label class="form-label" for=""></label>
                                <span class="btn mt- btn-primary btn-sm" onclick="getAddress()" id="post_code_button">Get Address</span>
                            </div>
                        </div>
                 
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control" value="{{ $user->date_of_birth }}">
                                @error('date_of_birth')
                                    <div class="text-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="Role" class="form-label">Role</label>
                                <select class="form-select" id="role" name="role">
                                    <option value="admin" <?php if ($user->role === 'admin') echo 'selected'; ?>>Admin</option>
                                    <option value="user" <?php if ($user->role === 'user') echo 'selected'; ?>>User</option>
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
            function getAddress(){
                let zipCode = document.getElementById("postCode").value;
                let url = '/well-known/zip-code-to-map-address/' + zipCode;
                let addressElement =  document.getElementById("address");
                let postCodeErrorElement =  document.getElementById("post_code_error");
                if (zipCode.trim() === '') {
                        postCodeErrorElement.innerText = "Please Enter Post code.";
                        return;
                    }
                fetch(url)
                .then(data=>{return data.json()})
                .then(res=>{
                    if(res.full_address){
                        addressElement.value = res.full_address;
                        postCodeErrorElement.innerText = "";
                    } else {
                        postCodeErrorElement.innerText = res.error;
                    }
                })
            }
        </script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
@endsection
