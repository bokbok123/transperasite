<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Make sure the path to CKEditor is correct. -->
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
{{ Form::open(array('url' => 'create_announcements')) }}
{{ Form::text('ann_title', Input::old('ann_title'), array('placeholder' => 'Announncement Title')) }}
<textarea name="editor1" id="editor1" rows="5" cols="80">

</textarea>
<script>
    var roxyFileman = 'fileman/index.html';
    $(function(){
        CKEDITOR.replace( 'editor1',{filebrowserBrowseUrl:roxyFileman,
            filebrowserImageBrowseUrl:roxyFileman+'?type=image',
            removeDialogTabs: 'link:upload;image:upload'});
    });
</script>
<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
</body>
</html>