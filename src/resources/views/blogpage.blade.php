@extends('layouts.layout')
@push('styles')
@endpush
@push('scripts')
<!-- TODO: Dörderli gösterme ve show less eklenecek. -->
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
      <a href="/docpage/{{\App\Models\BlogEntry::generateSlug($blog->title).'_'.$blog->id}}">
      <div class="service-info">
        <h4>{{ $blog->title }}</h4>
        <p>
          {{ substr($blog->content, 0, 100) }}
        </p>
        </a>
      </div>
      @endforeach
    </div>
  <button id= "more"  type="button" class="btn btn-primary more">Primary</button>
</section>
@endsection
