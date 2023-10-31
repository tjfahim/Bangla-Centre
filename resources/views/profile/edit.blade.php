@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
      <div class="col-lg-12 col-mb-4" style="font-size: 20px; margin-bottom:10px;font-weight: 600;width:60vw;;">Profile Information</div>

    <section style="
          margin-top: 4%;        
      ">
        <div class="container  ">
      
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body p-5">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                        

                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                @method('PUT')
            
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Name:</label>
                                        <input class="form-control mb-3 " type="text" name="name" value="{{ auth()->user()->name }}" required>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Email:</label>
                                        <input class="form-control mb-3 " type="email" name="email" value="{{ auth()->user()->email }}" readonly>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Phone:</label>
                                        <input class="form-control mb-3 " type="number" name="phone" value="{{ auth()->user()->phone }}" required>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Address:</label>
                                        <input class="form-control mb-3 " type="text" name="address" value="{{ auth()->user()->address }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Date of Birth:</label>
                                        <input class="form-control mb-3 " type="date" name="date_of_birth" value="{{ auth()->user()->date_of_birth }}" required>
                                    </div>
                                </div>
            
                                <div class="text-left">
                                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        
                        <div class="card-body p-5">
                            <div style="font-size: 20px; margin-bottom:10px">Change Password</div>
                            
                                @if (session('password_success'))
                                <div class="alert alert-success">
                                    {{ session('password_success') }}
                                </div>
                                @endif

                                @error('old_password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                                <form method="POST" action="{{ route('profile.password') }}">
                                    @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Old Password:</label>
                                        <input class="form-control mb-3 " type="password" name="old_password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="new_password">New Password:</label>
                                        <input class="form-control mb-3" type="password" name="new_password" id="new_password" required>
                                        @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">     
                                        <label for="confirm_password">Confirm Password:</label>
                                        <input class="form-control mb-3" type="password" name="confirm_password" id="confirm_password" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm">Change</button>
            
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        
                        <div class="card-body p-5">
                            <div style="font-size: 20px; margin-bottom:10px">Forgot Password</div>

                            <form method="POST" action="{{ route('profile.password') }}">
                                @csrf            
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Email:</label>
                                        <input class="form-control mb-3 " type="email" name="email" value="{{ auth()->user()->email }}" required>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <button type="submit" class="btn btn-success btn-sm">Sent</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </section>
   
  
    
    
@endsection
