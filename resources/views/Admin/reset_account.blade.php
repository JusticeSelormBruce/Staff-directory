@extends('layouts.Admin')
@section('render')
    <style>

        @media only screen and (min-width: 768px) {
            .card {
                height: 50vh !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card {
                height: auto !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card {
                height: 50vh !important;
            }
        }
    </style>
    <section>
        <div class="row">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        Reset User Account
                    </div>
                    <div class="mx-auto w-50">
                        <div class="card-body">
                            <form action="/account-reset" method="post" class="mt-lg-5 mt-md-3 mt-sm-0">
                                <div class="form-group">
                                    <select name="user_id" class="form-control" required>
                                        <option value="">Select User To Reset Account</option>
                                        @foreach($AllUsers as $Users)
                                            <option value="{{$Users->id}}">{{$Users->name}} <span class="mx-2">({{$Users->email}})</span></option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <button class="btn btn-secondary btn-sm w-25 mx-auto" type="submit">Reset Password</button>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
