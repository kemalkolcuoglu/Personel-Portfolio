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
  @include('components.blog-service-container')
  <br>
  <button id= "more"  type="button" class="btn btn-primary more">Show More</button>
</section>
@endsection
