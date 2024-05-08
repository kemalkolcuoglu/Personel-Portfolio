@extends('layouts.layout')
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
    <header class="title">Java Documentation</header>
    <ul>
      <li>
        <a class="nav-link" href="#Getting_Started_With_Java">Getting Started With Java</a>
      </li>
      <li>
        <a class="nav-link" href="#Java_Entry_Point">Java Entry Point</a>
      </li>
      <li>
        <a class="nav-link" href="#Printing_to_the_console">Printing to the console</a>
      </li>
      <li>
        <a class="nav-link" href="#Declaring_Functions">Declaring Functions</a>
      </li>
      <li>
        <a class="nav-link" href="#Object_Oriented_Programming">Object Oriented Programming</a>
      </li>
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
