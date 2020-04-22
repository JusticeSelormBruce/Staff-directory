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
    @if($achievements == null)
        <div class="section">
            <div class="container-fluid">
                <div class="card card1">
                    <div class="card-header">
                        Sorry, You have no Achievements Yet
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-lg-5 mr-md-5 mr-sm-5">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#exampleModal">
                        Add Achievements
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <y>My Achievements</y>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @include('staff.achievements.create')
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @else
        <section>
            <div class="card card2">
                <div class="card-header">My Achievements</div>
                <div class="container">
                    <p>{!!  $achievements->description !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-lg-5 mr-md-5 mr-sm-5">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#exampleModal">
                        Update Achievements
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <y>My Achievements</y>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @include('staff.achievements.edit')
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
@endsection
