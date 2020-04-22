<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Project" method="POST">

                <div class="">
                    @include('staff.Projects.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Projects  Record</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>




