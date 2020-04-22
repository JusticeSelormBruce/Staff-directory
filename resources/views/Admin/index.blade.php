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

        .img1 {
            width: 40px;
            height: 40px;

        }
    </style>
    <div class="card">
        <div class="card-header">
            Users Details
        </div>
        <div class="row">
            <div class="mx-auto w-75 pt-5">
                @foreach($AllUsers as $user)
                    <div class="row">
                        <div class="col-4"><img src="{{asset('storage/'.$user->avatar)}}" alt="avatar"
                                                class=" img1 mr-2 float-left"></div>
                        <div class="col-4"> {{$user->name}} <span class="mx-2">({{$user->email}})</span></div>

                        <div class="col-4">
                            view details for <a href="{{route('user.view',['id'=>$user->id])}}">{{$user->name}}</a>
                        </div>

                    </div>

                    <hr>
                @endforeach
            </div>

        </div>
        <div class="row pt-5">
            <div class="mx-auto">{{ $AllUsers->links() }}</div>
        </div>

    </div>

@endsection
