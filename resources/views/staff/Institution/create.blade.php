<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Institutions" method="POST">

                <div class="">
                    @include('staff.Institution.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Institution  Record</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>




