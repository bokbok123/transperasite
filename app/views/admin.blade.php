<!doctype html>
<html>
<head>
    <title>Look at me Login</title>
</head>
<body>

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('username') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::text('username', Input::old('username'), array('placeholder' => 'username')) }}
</p>

<p>
    {{ Form::password('password', array('placeholder' => 'password')) }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}