<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog - Rahul</title>

        <link href="{{ asset("/") }}front/css/bootstrap.css" rel="stylesheet">
        <link href="{{ asset("/") }}fontawesome/css/all.css" rel="stylesheet">
        <link href="{{ asset("/") }}front/css/style.css" rel="stylesheet">
    </head>
    <body>
        <x-header/>
        @yield('body')
        <x-footer/>
    </body>
    <script src="{{ asset("/") }}front/js/jquery.min.js"></script>
    <!-- <script>
        var btn = $('#socialLink');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 800) {
            btn.addClass('d-none');
        } else {
            btn.removeClass('d-none');
        }
        });
</script> -->
</html>
