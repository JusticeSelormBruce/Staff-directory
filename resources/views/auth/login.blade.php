@extends('layouts.staff_details')

@section('content')
<div class="container">
    <div class="row  justify-content-center  "  >
        <div class="col-md-8 " >
            <div class="card" style="height:50vh!important; background-color: #F2F4F4">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body align-items-center" style="background-color: #F2F4F4 !important;">
                    <form method="POST" action="/User-Login">


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input  type="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input  type="password" class="form-control" name="password" required >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn  bg-dark mx-auto m-2 text-light">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
