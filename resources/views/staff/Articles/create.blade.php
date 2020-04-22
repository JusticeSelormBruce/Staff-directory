<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Articles" method="POST">

                <div class="">
                    @include('staff.Articles.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Articles/Blog  Record</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>

<script src="{{asset('boostrap/js/ck.js')}}"></script>


