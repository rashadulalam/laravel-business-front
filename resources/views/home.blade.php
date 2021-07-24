@extends('layout.app')

@section('page_title', 'Business Frontpage - Start Bootstrap Template')
@section('content')

    @include('layout.banner')
    @include('layout.feature')
    @include('layout.testimonial')
    @include('layout.pricing')
    @include('layout.contact')

@endsection
