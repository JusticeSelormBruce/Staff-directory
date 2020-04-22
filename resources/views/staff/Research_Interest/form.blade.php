
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<div class="form-group">
    <div>
        <label for="description">Research Interest Details</label>

<textarea name="description" id="description"  class="form-control" ></textarea>
<div>{{$errors->first('description')}}</div>
</div>

<script>
CKEDITOR.replace( 'description' ,{
removePlugins:'image'
});

</script>
</div>
