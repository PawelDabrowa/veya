{{--
  Template Name: Tea Template
--}}

@extends('layouts.tea')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
