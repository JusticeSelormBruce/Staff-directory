<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Specialization" method="POST">

                <div class="">
                    @include('staff.Specializations.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Specialization  Record</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>




