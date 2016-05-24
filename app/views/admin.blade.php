{{ Theme::asset()->usePath()->add('css-admin', 'css/adminLogin.css') }}

<div class="parent-container">
    <div class="logo-container"><img src="{{ Theme::asset()->url('img/transperalogo.png') }}"></div>
    <div class="form-container">
        {{ Form::open(array('url' => 'login')) }}
        <div class="input-field">
            {{ Form::text('username', Input::old('username')) }}
            <label for="username">Username</label>
        </div>
        <div class="input-field">
            {{ Form::password('password') }}
            <label for="password">Password</label>
        </div>
        <button id="btnSubmit" class="waves-effect waves-light btn" type="submit">Submit</button>
        {{ Form::close() }}
    </div>
</div>