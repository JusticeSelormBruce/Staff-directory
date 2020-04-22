@extends('layouts.Admin')
@section('render')
    <style>

        @media only screen and (min-width: 768px) {
            .card {
                height: 80vh !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card {
                height: auto !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card {
                height: 80vh !important;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3> Add/Edit staff Details</h3>
            </div>
            <form action="/staff-details" method="post">
                <div class="card-body">
                    <div class="row py-5">
                        <div class="mx-auto w-50 input-group-sm">
                            <select name="id" id="" class="form-control" required>
                                <option value="">Select User</option>
                                @foreach($AllUsers as $user)
                                    <option value="{{$user->id}}">{{$user->name}} <span class="mx-2">({{$user->email}})</span></option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <button class=" w-25 input-group-sm btn btn-primary btn-sm mx-auto" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
                @csrf
            </form>

        </div>
    </div>
@endsection
