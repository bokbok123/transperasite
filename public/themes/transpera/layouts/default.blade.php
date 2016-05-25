<!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme::get('title') }}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{{ Theme::get('keywords') }}">
        <meta name="description" content="{{ Theme::get('description') }}">
        <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
        {{ Theme::asset()->styles() }}
        {{ Theme::asset()->scripts() }}
    </head>
    <body>
        {{ Theme::partial('header') }}
        <input type="hidden" value="{{ URL::to('/') }}" id="hidden_url" />
        <div class="fonebayad-container" id="fonebayadFullPage">
            {{ Theme::content() }}
        </div>
        <div class="nextPageContainer">
            <a id="nextPage"><img src="{{ Theme::asset()->url('img/icons/next-page.png'); }}"></a>
        </div>
    </body>
</html>