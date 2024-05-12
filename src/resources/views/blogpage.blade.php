@extends('layouts.layout')
@php
  $title = 'Blog'
@endphp
@push('styles')
@endpush
@push('scripts')
<script>
let more = document.getElementById("more");

let serviceBoxes = document.querySelectorAll(".service-box");
document.getElementById("more").addEventListener("click", function(){
  serviceBoxes.forEach(function(box) {
        box.style.display = "block";
        more.style.display = "none";
    });
})
</script>
@endpush
@section('body')
<section class="services" id="services">
  <h2 class="heading"> All Blogs</h2>

  <div class="service-container">
    @foreach($blogs as $blog)
    <div class="service-box">
      <a href="/docpage/{{\App\Models\BlogEntry::generateSlug($blog->title).'-'.$blog->id}}">
      <div class="service-info">
        <h4>{{ $blog->title }}</h4>
        <p>
          {{ $blog->abstract }}
        </p>
        </a>
      </div>
    </div>
    @endforeach
  </div>
  <br>
  <button id= "more"  type="button" class="btn btn-primary more">Show More</button>
</section>
@endsection
