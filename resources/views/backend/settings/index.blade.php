@extends('backend.layouts2.master')


@section('main_content')


<h3 class="col-lg-12 col-mb-6 col-sm-6" style="width: 80%">Update Stripe and Paypal Keys</h3>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" class="col-lg-12 col-mb-12" action="{{ route('admin.settings.update') }}">
        @csrf
        <div class="form-group">
            <label for="stripe_key">Stripe Key</label>
            <input type="text" class="form-control mb-3" name="stripe_key" value="{{$settings->stripe_key }}" required>
        </div>
        <div class="form-group">
            <label for="stripe_secret">Stripe Secret</label>
            <input type="text" class="form-control mb-3" name="stripe_secret" value="{{ $settings->stripe_secret }}" required>
        </div>
        <div class="form-group">
            <label for="paypal_client_id">PayPal Client ID</label>
            <input type="text" class="form-control mb-3" name="paypal_client_id" value="{{ $settings->paypal_client_id }}" required>
        </div>
        <div class="form-group">
            <label for="paypal_client_secret">PayPal Client Secret</label>
            <input type="text" class="form-control mb-3" name="paypal_client_secret" value="{{ $settings->paypal_client_secret }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Keys</button>
    </form>

@endsection
