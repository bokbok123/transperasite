<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>A Simple Page with CKEditor</title>
    <!-- Make sure the path to CKEditor is correct. -->
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
{{ Form::open(array('url' => 'create_job')) }}
    {{ Form::text('job_title', Input::old('job_title'), array('placeholder' => 'Job Title')) }}
    <textarea name="editor1" id="editor1" rows="10" cols="80">
        This is my textarea to be replaced with CKEditor.
    </textarea>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    <p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
</body>
</html>