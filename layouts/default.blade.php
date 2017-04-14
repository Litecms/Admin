<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{!! Theme::getTitle() !!} :: {{config('app.name')}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300'" rel='stylesheet' type='text/css'>
        <link href="{{ theme_asset('css/vendor.css') }}" rel="stylesheet">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>

    <body class="sidebar-mini  skin-{{Settings::get('admin.color', 'red')}}" >
        <div class="wrapper">
            {!! Theme::partial('header') !!}
            {!! Theme::partial('aside') !!}
            {!! Theme::content() !!}
            {!! Theme::partial('right') !!}
            {!! Theme::partial('footer') !!}
        </div>
    </body>
<script src="{{ theme_asset('js/vendor.js') }}"></script>
{!! Theme::asset()->container('footer')->scripts() !!}
{!! Theme::asset()->container('extra')->scripts() !!}
</html>




