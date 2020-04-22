<form action="/update-News" method="POST" enctype="multipart/form-data">
    @method('PATCH')

    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <div class="form-group container">
        <div>
            <input type="hidden" value="{{$News->id}}" name="id">
        </div>
        <div class="form-group mt-5">
            <label for="title"> News Title</label>
            <input type="text" class="form-control" name="title" value="{{$News->title}}">
            <div>{{$errors->first('title')}}</div>
        </div>

        <div>
            <label for="message">News Body</label>

            <textarea name="message" id="message" class="form-control">{{$News->message}}</textarea>
            <div>{{$errors->first('message')}}</div>
        </div>
        <script>
            CKEDITOR.replace('message', {
                removePlugins: 'image'
            });

        </script>


        <div class="form-group d-flex flex-column">
            <label for="image">Image</label>
            <input type="file" name="image" class="py-2" value="{{asset('storage/'.$News->image)}}">
            <div>
                <div>{{$errors->first('image')}}</div>
            </div>
        </div>
    </div>

    <div class=" row container ml-auto">
        <button class=" row btn btn-dark " type="submit">Update News</button>
    </div>
    @csrf
</form>
