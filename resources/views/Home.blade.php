@extends('Layout.app')

@section('page-main-content')
    @include('Component.HomeComponent.here')
    @include('Component.HomeComponent.about')
    @include('Component.HomeComponent.pricing')
    @include('Component.HomeComponent.newslate')
@endsection
