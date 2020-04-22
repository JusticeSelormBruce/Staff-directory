@extends('layouts.staff')
@section('render')
    <style>

        @media only screen and (min-width: 768px) {
            .card1 {
                height: 50vh !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card1 {
                height: auto !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card1 {
                height: 50vh !important;
            }
        }

        @media only screen and (min-width: 768px) {
            .card2 {
                height: 70vh !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card2 {
                height: auto !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card2 {
                height: 70vh !important;
            }
        }

        .img1 {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
    </style>



    <div>

        <div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card1 text-black">
                        <div class="card-header">
                            <small class="font-weight-bold ">{{  $user->name}}`s Profile </small>
                        </div>

                        <div class="card-body">
                            <div>
                                <div class="col">
                                    <img src="{{asset('storage/'.$user->avatar)}}" alt="avatar"
                                         class=" img1 mr-2 float-left">
                                </div>
                                <p class="justify-content-center ">  {{  $user->name}}</p>
                                <p class="justify-content-center "> Update Profile</p>

                                <form action="/profile" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')

                                    <div class="pt-3">
                                        <input type="file" name="avatar" class="">
                                    </div>
                                    <div>
                                        <button class="btn-sm btn-primary float-right " type="submit">Update</button>
                                    </div>

                                    @csrf
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
