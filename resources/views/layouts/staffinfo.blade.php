<style>
    .img {
        width: 60px;
        height: 60px;
    }

    @media only screen and (min-width: 768px) {
        .check {
            height: 50vh !important;
        }
    }

    @media only screen and (max-width: 768px) {

        .check {
            height: auto !important;
        }
    }

    @media only screen and (min-width: 600px) {
        .check {
            height: 50vh !important;
        }
    }

    @media only screen and (min-width: 768px) {
        .check1 {
            height: 59.8vh !important;
        }
    }

    @media only screen and (max-width: 768px) {

        .check1 {
            height: auto !important;
        }
    }

    @media only screen and (min-width: 600px) {
        .check1 {
            height: 59.8vh !important;
        }
    }
</style>
<div class="container ">
    <div class="row">
        <div class="col-lg-4 col-md-4  col-sm-12 ">
            <div class=" border check " style=" font-family: sans-serif!Important">
                <div class="container px-5">
                    <div class="pt-lg-4 pt-md-4 pt-sm-2 pb-2 text-black font-weight-bold">Staff Search</div>
                    <div>
                        To search for a Staff, enter the Surname, First name, and/or Full name.
                        (E.g. Selorm, Bruce or Selorm Bruce)
                    </div>
                    <form action="/search_results" method="post">
                        <div class="form-group pt-3">
                            <input type="text" class="form-control" name="search">
                            <div>
                                {{$errors->first('search')}}
                            </div>
                        </div>
                        <div class="form-group pt-1">
                            <button type="submit" class="btn btn-sm w-50 btn-primary">Search</button>
                        </div>
                        @csrf
                    </form>

                </div>
            </div>

        </div>
        <div class="col-lg-8 col-md-8 col col-sm-12">
            <div class="  w-auto check">
                <div class="container px-sm-0">
                    @include('carousel.index')
                </div>

            </div>
        </div>
    </div>
    <div class="row pt-3  text-muted px-3">
        <div class="form-control  border " style="background-color: #F2F4F4 !important;">
            <p class="text-center font-weight-bold">Staff Web Directory Activities</p>

        </div>
        <div class=" container  border" style="height: 60vh!important;">
            <div class="row">
                <div class=" border col-lg-4 col-md-4 col-sm-12  w-100 check1">
                    <div class="pt-lg-4 pt-md-4">
                        <p class="text-center font-weight-bold text-black">Latest Articles</p>
                    </div>
                    @foreach($articlemain as $list)

                        @foreach($user1 as $u)
                                    @if ($u->id === $list->user_id)

                                <div class="row">
                                    <div class="d-flex">
                                        <p class="pl-3"><a href="">{!! $list->description !!} </a>. ({{$u->name}})</p>

                                    </div>
                                </div>
                                <hr>
                                    @endif

                                @endforeach
                    @endforeach


                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 check1">
                    <div class="pt-lg-5 pt-md-5">
                        <p class="text-center font-weight-bold text-black">Latest Profile Updates</p>
                    </div>

                    <div class="col pb-3">
                        <div class="row">
                            @foreach($bio1 as $b)
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <i class="d-flex">
                                        @foreach($user1 as $u)
                                            @if ($u->id === $b->user_id)

                                                <img class="img rounded" src="{{asset('storage/'.$u->avatar)}}"
                                                     alt="photo">


                                            @endif
                                        @endforeach
                                        <span class="pl-3">
 @foreach($user1 as $u)
                                                @if ($u->id === $b->user_id)
                                                    <a href="{{route('read.more',['id'=>$u->id])}}">
                        <span class="font-italic">{{$u->name}}</span>
                    </a>

                                                    <br>
                                                @endif
                                            @endforeach

            <p>{{$b->position}}</p>
                <hr>
                 </span>
                                    </i>

                                </div>
                            @endforeach


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

