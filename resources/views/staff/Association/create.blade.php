<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Association" method="POST">

                <div class="">
                    @include('staff.Association.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Association and Affiliations   Record</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>




