<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head', ['pageTitle' => 'About Page', 'metaTitle' => 'Home Page Sito Laravel'])
    <body>
        <h1>ABOUT</h1>
        @include('partials.menu')
    </body>
</html>