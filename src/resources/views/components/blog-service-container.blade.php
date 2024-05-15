<div class="service-container">
  @foreach($blogs as $blog)
  <div class="service-box">
    <a href="/docpage/{{\App\Models\BlogEntry::generateSlug($blog->title).'-'.$blog->id}}">
      <div class="service-info">
        <h4>{{ $blog->title }}</h4>
        <p>
          {{ $blog->abstract }}
        </p>
      </div>
      <div class="badges-container">
        @foreach($blog->tags as $tag)
        <span class="badge">{{ $tag->name }}</span>
        @endforeach
      </div>
    </a>
  </div>
  @endforeach
</div>
