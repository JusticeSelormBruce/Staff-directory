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
    </style>
    @if($articles == null)
        <div class="section">
            <div class="container-fluid">
                <div class="card card2">
                    <div class="card-header">
                        Sorry, You have no Articles/Blog Records  Yet
                    </div>
                           <div>
                               @include('staff.Articles.create')
                           </div>
                </div>
            </div>
        </div>
    @else
        <section>
            <div class="card card2">
                <div class="card-header">My Articles/Blog Records</div>
                <div class="container">
                    <div>
                        @include('staff.Articles.edit')
                    </div>
                </div>
            </div>

        </section>
    @endif
@endsection
