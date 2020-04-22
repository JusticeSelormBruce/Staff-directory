

<form action="/cv-Update" method="post" enctype="multipart/form-data">
    @method('PATCH')
    <div class="card w-100">
        <div class="card-header">
            Upload CV
        </div>
        <div class="card-body">

            <div class="form-group input-group-sm">
                <label for="" class="h3   btn-sm btn"> <input type="file" required class="form-control" name="cv"> Upload
                    CV</label>
                <div  class="text-danger">
                    {{ $errors->first('cv')}}
                </div>
            </div>
            <div class="form-group input-group-sm row">
                <button class="btn btn-secondary btn-sm  mx-auto" type="submit">Update  CV
                </button>
            </div>
        </div>
    </div>
    @csrf
</form>
