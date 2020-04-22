<div class="container">
    <div class="row  justify-content-center">
        <div class="col-md-8">


            <form action="/update-bio" method="POST">

                @method('PATCH')


                <div class="form-group" style="">
                    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

                    <div>
                        <label for="position">Position</label>
                        <input type="text" class="form-control" name="position" value="{{$biography->position}}">
                        <div>{{$errors->first('position')}}</div>
                    </div>
                    <div>
                        <label for="office">Office</label>
                        <input name="office" class="form-control" value="{{ $biography->office}}">
                        <div>{{$errors->first('office')}}</div>
                    </div>
                    <div>
                        <label for="description">Desacription</label>
                        <textarea name="description" id="description" class="form-control"
                                  value="{{old('description')}}">{{$biography->description}}</textarea>
                        <div>{{$errors->first('description')}}</div>
                    </div>
                    <script>
                        CKEDITOR.replace('description', {
                            removePlugins: 'image'
                        });
                    </script>
                    <div>
                        <label for="interest">Research Areas/ Interests</label>
                        <textarea name="interest" id="interest" class="form-control"
                                  value="{{old('interest')}}">{{$biography->interest}}</textarea>
                        <div>{{$errors->first('interest')}}</div>
                    </div>
                    <script>
                        CKEDITOR.replace('interest', {
                            removePlugins: 'image'
                        });
                    </script>
                    <div>
                        <label for="department_id">Department</label>
                        <select name="department_id" id="department_id" class="form-control">
                            @foreach ($departments as $item)
                                <option value="{{$item->id}}" @if($item->id ==$biography->department_id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>


                <div>
                    <button type="submit" class="btn bg-dark text-light mb-5">Update Bio</button>
                </div>
                @csrf
            </form>

        </div>

    </div>
</div>
</div>
</div>
</div>



