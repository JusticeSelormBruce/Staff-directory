<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Positions" method="POST">

                <div class="">
                    @include('staff.Position.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Position  Record</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>




