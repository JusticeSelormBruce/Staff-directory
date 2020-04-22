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
    @if($professions == null)
        <div class="section">
            <div class="container-fluid">
                <div class="card card1">
                    <div class="card-header">
                        Sorry, You have no Profession/Teaching Experience  Records  Yet
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-lg-5 mr-md-5 mr-sm-5">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#exampleModal">
                        Add Profession/Teaching Experience  Records
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <p>My Profession/Teaching Experience  Records</p>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @include('staff.Profession.create')
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
                <div class="card-header">My Profession/Teaching Experience  Records</div>
                <div class="container">
                    <p>{!!  $professions->description !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-lg-5 mr-md-5 mr-sm-5">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#exampleModal">
                        Update Profession/Teaching Experience  Records
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <y>My Profession/Teaching Experience  Records</y>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @include('staff.Profession.edit')
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
@endsection
