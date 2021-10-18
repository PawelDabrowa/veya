@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @if(!is_home())
    @include('partials.hero-banner')
    @endif
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
