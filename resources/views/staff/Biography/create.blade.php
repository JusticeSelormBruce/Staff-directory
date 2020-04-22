
    <div class="container ">
        <div class="row  justify-content-center">
            <div class="col-md-8">
                <div >

                    <div class="card">
                        <div class="card-body">
                            <form action="/create-bio" method="POST">

                                @include('staff.Biography.form')

                                <div>
                                    <button type="submit" class="btn bg-dark text-light mb-5">Add personal Information</button>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>


                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



