

<div class="form-group " >
        <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
 <div>
    <label for="position">Position</label>
    <input type="text" class="form-control" name="position" value="{{old('position' ?? $biography->position)}}">
    <div>{{$errors->first('position')}}</div>
</div>
<div>
    <label for="office">Office</label>
  <input name="office"  class="form-control" value="{{old('office' ?? $biography->office)}}">
    <div>{{$errors->first('office')}}</div>
</div>
<div>
    <label for="description">Desacription</label>
    <textarea name="description" id="description"  class="form-control" value="{{old('description')}}"></textarea>
<div>{{$errors->first('description')}}</div>
</div>
<script>
CKEDITOR.replace( 'description' ,{
    removePlugins:'image'
});
</script>
<div>
    <label for="interest">Research Areas/ Interests</label>
    <textarea name="interest" id="interest"  class="form-control" value="{{old('interest')}}"></textarea>
    <div>{{$errors->first('interest')}}</div>
    </div>
    <script>
    CKEDITOR.replace( 'interest' ,{
        removePlugins:'image'
    });
    </script>
<div>
    <label for="department_id">Department</label>
    <select name="department_id" id="department_id" class="form-control">
        <option value="">Select Department</option>
       @foreach ($departments as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
       @endforeach
    </select>
</div>

</div>

