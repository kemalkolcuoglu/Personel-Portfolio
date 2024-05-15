@extends('layouts.layout')
@php
  $blog->parseHeaders();
  $title = $blog->title;
@endphp
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/default.min.css">
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
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
      <ul class="breadcrumb">
        <li>Blog Entries</li>
        <li><b>Category:</b> {{ $blog->relatedCategory->title }}</li>
      </ul>
      <header>{{ $blog->title }}</header>
      <h5><b>Publish Date:</b> {{ $blog->created_at->format('d/m/Y') }}</h5>
      <hr />
      {!! Parsedown::instance()->text($blog->content) !!}
      <hr />
    </article>
  </main>
</div>
@endsection
