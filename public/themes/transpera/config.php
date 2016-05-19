<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
            $theme->setTitle('Copyright ©  2013 - Laravel.in.th');

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {
            // You may use this event to set up your assets.
            // $theme->asset()->usePath()->add('core', 'core.js');
            // $theme->asset()->add('jquery', 'vendor/jquery/jquery.min.js');
            // $theme->asset()->add('jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', array('jquery'));

            // Partial composer.
            // $theme->partialComposer('header', function($view)
            // {
            //     $view->with('auth', Auth::user());
            // });
            $theme->asset()->usePath()->add('js-jquery', 'js/jquery-1.11.1.min.js');
            $theme->asset()->usePath()->add('js-jquery-validate', 'js/jquery.validate.js');
            $theme->asset()->usePath()->add('js-materialize', 'js/materialize.js');
            $theme->asset()->usePath()->add('js-easingmin', 'js/jquery.easings.min.js');
            $theme->asset()->usePath()->add('js-slimscrollmin', 'js/jquery.slimscroll.min.js');
            $theme->asset()->usePath()->add('js-fullpagemin', 'js/jquery.fullPage.min.js');
            $theme->asset()->usePath()->add('js-jquery.form', 'js/jquery.form.js');
            $theme->asset()->usePath()->add('js-home', 'js/home.js');

            $theme->asset()->usePath()->add('css-materialize', 'css/materialize.css');
            $theme->asset()->usePath()->add('css-fullpagemin', 'css/jquery.fullPage.css');
            $theme->asset()->usePath()->add('css-favicon', 'css/icon.css');
            $theme->asset()->usePath()->add('css-header', 'css/header.css');
            $theme->asset()->usePath()->add('css-splash', 'css/splash.css');
            $theme->asset()->usePath()->add('css-about', 'css/about.css');
            $theme->asset()->usePath()->add('css-features', 'css/features.css');
            $theme->asset()->usePath()->add('css-career', 'css/career.css');
            $theme->asset()->usePath()->add('css-partners', 'css/partners.css');
            $theme->asset()->usePath()->add('css-ann', 'css/announcements.css');
            $theme->asset()->usePath()->add('css-contact', 'css/contact.css');
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }

        )

    )

);