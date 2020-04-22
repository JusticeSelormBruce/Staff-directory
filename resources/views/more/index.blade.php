@extends('layouts.more')
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

        .img {
            width: 200px;
            height: 200px;
        }
    </style>

    <div class="row">
        <div class=" col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-sm-3"
        >
            <div class="container">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <img src="{{asset('storage/'.$thisUser->avatar)}}" alt="avatar" class=" img mr-2 float-left">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <p class="small text-uppercase"><strong class="mr-2">Name:</strong>{{$thisUser->name}}</p>
                        <p class="small text-uppercase"><strong class="mr-2">Position:</strong>{{$userBio->position}}
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  py-2">
                        <div class="row">

                        </div>

                        <p class="small"><strong class="mr-2">Email:</strong>{{$thisUser->email}}</p>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="card card2">
        <div class="card-header">
            Auto Biography
        </div>
        <div class="card-body">
            {!!  $userBio->description !!}
        </div>
    </div>
@endsection
