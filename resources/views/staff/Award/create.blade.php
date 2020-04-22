<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Awards" method="POST">

                <div class="">
                    @include('staff.Award.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Awards  Record</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>




