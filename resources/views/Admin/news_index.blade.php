@extends('layouts.Admin')
@section('render')
    <style>

        @media only screen and (min-width: 768px) {
            .card {
                height: auto !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card {
                height: auto !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card {
                height: auto !important;
            }
        }
    </style>
    <section>
        <div class="row">
            <div class="container-fluid">
                <div class="card w-90">
                    <div class="card-header">
                        Posted News
                    </div>
                    <div class="row">
                        <div class="ml-auto">
                            <section class="mr-lg-5 mr-md-5 mr-sm-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                    Write News
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Write News</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @include('Admin.write_news')
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>

                    <div class="form-group">
                        @foreach($AllNews as $News)
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <p>{{$News->title}}</p>
                                    <img src="{{asset('storage/'.$News->image)}}" class="d-block w-100" alt="..."
                                         style="height: 40vh!important">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal{{$News->id}}">
                                        Edit News
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$News->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel{{$News->id}}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    @include('Admin.edit_news')
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
