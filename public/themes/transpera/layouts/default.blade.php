<!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme::get('title') }}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{{ Theme::get('keywords') }}">
        <meta name="description" content="{{ Theme::get('description') }}">
        <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {{ Theme::asset()->styles() }}
        {{ Theme::asset()->scripts() }}
    </head>
    <body>
        {{ Theme::partial('header') }}
        <input type="hidden" value="{{ URL::to('/') }}" id="hidden_url" />
        <div class="fonebayad-container" id="fonebayadFullPage">
            {{ Theme::content() }}
        </div>

        <div id="modal1" class="modal" style="width: 470px">
            <div class="modal-content">
                <h4>Congratulations!</h4>
                <p>Your message has been successfully sent.</p>
            </div>
        </div>
        <div class="nextPageContainer">
            <a id="nextPage"><img src="{{ Theme::asset()->url('img/icons/next-page.png'); }}"></a>
        </div>
    </body>
</html>