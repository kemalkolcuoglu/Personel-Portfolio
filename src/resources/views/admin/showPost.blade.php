@extends('layouts.adminlayout')
@push('styles')
<!-- Highlight.js CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/default.min.css">
@endpush
@push('scripts')
<!-- Highlight.js JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
@endpush
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <h2>{{ $entry->title }}</h2>
        {!! Parsedown::instance()->text($entry->content) !!}
        <a class="btn btn-success" href="{{ route('admin.editPost', ['id' => $entry->id])}}">Edit</a>
        <a class="btn btn-danger" href="{{ route('admin.deletePost', ['id' => $entry->id]) }}"
          onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
          {{ __('Delete') }}
        </a>
        <form id="delete-form" action="{{ route('admin.deletePost', ['id' => $entry->id]) }}" method="POST" class="d-none">
          @csrf
          @method('DELETE')
        </form>
      </div>
    </div>
  </div>
@endsection
