@extends('layouts.staff_details')
@section('content')
    <div class="container">
        <div class="px-lg-5">
            @if (!$check ==0)
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            Search Result
                        </div>
                        <div class="card-body">
                            @foreach($getSearchResult as $key=>$values)

                                <a href="{{route('read.more',['ids'=>$values->id])}}">

                                    <div class="d-flex">
                                        <img class="img rounded" src="{{asset('storage/'.$values->avatar)}}"
                                             alt="photo">
                                        <span class="pl-4">{{$values->name}}</span>
                                    </div>
                                </a>


                                <hr>

                            @endforeach
                        </div>
                        {{ $getSearchResult->links() }}
                    </div>
                </div>
                @else
                <div class="card">
                    <div class="card-header">
                        Soory, No search result found
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
