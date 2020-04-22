<div class="container">
    <div class="card mx-auto">
        <div class="card-body ">
            <form action="/Achievements" method="POST">

                <div class="">
                    @include('staff.achievements.form')
                </div>
                <div class=" row container ml-auto">
                    <button type="submit" class=" row btn btn-dark ">Add Achievements</button>
                </div>
                @csrf
            </form>
        </div>

    </div>
</div>




