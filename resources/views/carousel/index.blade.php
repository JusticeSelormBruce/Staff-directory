<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                @if($NewsNo >= 1)
                    <div class="row border-0">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 border-0">
                            <img src="{{asset('storage/'.$value[0]->image)}}" class="d-block w-100" alt="..."
                                 style="height: 40vh!important">
                        </div>
                        <div class="col-lg-3 col-md-3col-sm-12 col-xs-12 border-0"
                             style="background-color: #D7DBDD !important">
                            <button type="button" class="btn btn-sm btn-info w-75" data-toggle="modal"
                                    style="margin-top: 50px!important;"
                                    data-target="#exampleModal">
                                Read News
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
                                            <h5 class="small">{{$value[0]->title}}</h5>
                                            <img src="{{asset('storage/'.$value[0]->image)}}" class="d-block w-100"
                                                 alt="..."
                                                 style="height: 40vh!important">
                                            <h6>{!! str_limit($value[0]->message,250)!!}</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                @else
                    <h1>No News Yet</h1>
                @endif


            </div>
            <div class="carousel-item">
                @if($NewsNo >= 2)
                    <div class="row border-0">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 border-0">
                            <img src="{{asset('storage/'.$value[1]->image)}}" class="d-block w-100" alt="..."
                                 style="height: 40vh!important">
                        </div>
                        <div class="col-lg-3 col-md-3col-sm-12 col-xs-12 border-0"
                             style="background-color: #D7DBDD !important">
                            <button type="button" class="btn btn-sm btn-info w-75" data-toggle="modal"
                                    style="margin-top: 50px!important;"
                                    data-target="#exampleModal1">
                                Read News
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel1" aria-hidden="true">
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
                                            <h5 class="small">{{$value[1]->title}}</h5>
                                            <img src="{{asset('storage/'.$value[1]->image)}}" class="d-block w-100"
                                                 alt="..."
                                                 style="height: 40vh!important">
                                            <h6>{!! str_limit($value[1]->message,250)!!}</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                @else
                    <h1>No News Yet</h1>
                @endif

            </div>
            <div class="carousel-item">
                @if($NewsNo >= 3)
                    <div class="row border-0">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 border-0">
                            <img src="{{asset('storage/'.$value[2]->image)}}" class="d-block w-100" alt="..."
                                 style="height: 40vh!important">
                        </div>
                        <div class="col-lg-3 col-md-3col-sm-12 col-xs-12 border-0"
                             style="background-color: #D7DBDD !important">
                            <button type="button" class="btn btn-sm btn-info w-75" data-toggle="modal"
                                    style="margin-top: 50px!important;"
                                    data-target="#exampleModal2">
                                Read News
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel2" aria-hidden="true">
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
                                            <h5 class="small">{{$value[2]->title}}</h5>
                                            <img src="{{asset('storage/'.$value[2]->image)}}" class="d-block w-100"
                                                 alt="..."
                                                 style="height: 40vh!important">
                                            <h6>{!! str_limit($value[2]->message,250)!!}</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                @else
                    <h1>No News Yet</h1>
                @endif

            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
