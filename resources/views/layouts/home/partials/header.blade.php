<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Sand Of Vega; yasin@sandofvega.com">
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">


    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="icon" href="{{ url('public/favicon.png') }}">


    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>

    <!-- MATERIALIZE -->
    <link href="{{ url('public/css/materialize.css') }}" rel="stylesheet">

    <!-- STYLE SHEET -->
    <link href="{{ url('public/css/style.css') }}" id="switch_style" rel="stylesheet">

</head>