<div class="container">
    <div class="">
        <form action="/update-Project" method="POST">
            @method('PATCH')
            <div class="">


                <div class="form-group ">
                    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

                    <div>
                        <label for="description">Research Projects Description</label>
                        <textarea name="description" id="description"
                                  class="form-control">{!!$projects->description!!}</textarea>
                        <div>{{$errors->first('description')}}</div>
                    </div>
                    <script>
                        CKEDITOR.replace('description', {
                            removePlugins: 'image'
                        });
                    </script>


                </div>


            </div>
            <div class=" row container ml-auto">
                <button type="submit" class=" row btn btn-dark ">Update  Research Projects Record</button>
            </div>
            @csrf
        </form>
    </div>
</div>


