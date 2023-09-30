


@extends('backend.layouts.master')


@section('main_content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <style>
        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('{{ asset('ui/searchpage') }}/img/background.jpg');
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>


    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Welcome back!</h3>

                                <!-- Sign In Form -->

                                <form action="{{ route('user.login') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="hall" value="{{ $hall }}">
                                    <input type="hidden" name="checkin" value="{{ $checkin }}">
                                    <input type="hidden" name="checkout" value="{{ $checkout }}">
                                    <input type="hidden" name="shift" value="{{ $shift }}">
                                    <input type="hidden" name="charity" value="{{ $charity }}">

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                        
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                        
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            type="submit">Sign in</button>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('password.request')}}">Forgot password?</a>
                                            <div><a class="small" href="{{ route('register')}}">Sign Up</a></div>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection
