



@extends('backend.layouts.master')


@section('main_content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">




       
<section class="h-100 h-custom"  style="  background-image: url('{{ asset('ui/backend') }}/assets/images/img_17081_3.jpg');
background-size: cover; /* Adjust to your preferred size behavior */
background-repeat: no-repeat; /* Prevent image from repeating */
width: 100%; ;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
       
            <div class="card-body p-4 p-md-5">
  
                <form class="px-md-2" method="POST" action="{{ route('register.submit') }}">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Name</label>
                    <input type="text" name="name" class="form-control" required />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Email</label>
                    <input type="email" name="email" class="form-control" required />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Phone</label>
                    <input type="number" name="phone" class="form-control" required />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Address</label>
                    <input type="text" name="address" class="form-control" required />
                </div>
             
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Password</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div style="display: flex; justify-content: center;">
                    <div>
                        <button type="submit" class="btn btn-success btn-sm mb-1 ml-3">Register</button>
                        <span><a style="color:black" href="{{ route("login")}}">Already Registered? Sign in</a></span>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection
