@extends('layouts.home.master')

@section('title', 'Web Developer')

@section('meta-keywords', 'web developer')

@section('content')
    @include('layouts.home.partials.intro')

    @include('layouts.home.partials.about')

    @include('layouts.home.partials.skills')

    @include('layouts.home.partials.experience')

    @include('layouts.home.partials.interest')

    @include('layouts.home.partials.contact')
@endsection