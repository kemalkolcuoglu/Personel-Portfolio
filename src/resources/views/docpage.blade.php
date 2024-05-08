@extends('layouts.layout')
@php
  $blog->parseHeaders();
  $blog->parseAbstract();
  $title = $blog->title;
@endphp
@push('styles')
<!-- Highlight.js CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/default.min.css">
@endpush
@push('scripts')
<!-- Highlight.js JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
@endpush
@section('body')
<div class="doc-body">
  <nav id="navbar-doc">
    <header class="title">{{$blog->title}}</header>
    <ul>
      @foreach($blog->headers as $header)
      <li><a class="nav-link" href="#{{ $header['slug']}}">{{ $header['title']}}</a></li>
      @endforeach
    </ul>
  </nav>
  <main id="main-doc" >
    <article class="main-article" id="Getting_Started_With_Java">
      <header>{{ $blog->title }}</header>
      {!! $blog->content !!}
    </article>
  </main>
</div>
@endsection
