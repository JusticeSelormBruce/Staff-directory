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
    @if(!$userBio ==null)
        <div class="card card2">
            <div class="card-body">
                <div class="container">
                    <p>View  <a href="{{asset('storage/'.$userBio->cv)}}">CV</a>.</p>
                </div>

            </div>
        </div>
    @else
        <div class="card card2">
            <div class="card-body">
                <p>Sorry, No information Here</p>
            </div>
        </div>
    @endif
@endsection
