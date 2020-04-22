<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Research-Interest" method="POST">

                <div class="">
                    @include('staff.Research_Interest.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Research Interest  Record</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>




