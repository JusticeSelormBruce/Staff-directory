<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Employments" method="POST">

                <div class="">
                    @include('staff.employment.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Employment  Record</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>




