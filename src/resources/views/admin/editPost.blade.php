@extends('layouts.adminlayout')
@push('styles')
@endpush
@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
  $('#content').summernote({
    placeholder: 'Tuna\'s Cool Text Editor',
    tabsize: 2,
    height: 480,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>
@endpush
@section('content')
  <div class="container">
    <form method="POST" action="{{ route('admin.updatePost', ['id' => $entry->id])}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $entry->title }}">
      </div>
      <div class="form-group">
        <label for="category">Category</label>
        <select id="category" name="category" class="form-control">
          <option>Please Choose a Category...</option>
          @foreach($categories as $category)
          <option value="{{ $category['id'] }}" {{ $entry->category == $category->id ? 'selected' : '' }}>{{ $category['title'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="seo_description">SEO Description</label>
        <input type="text" class="form-control" id="seo_description" name="seo_description" value="{{ $entry->seo_description }}">
      </div>
      <div class="form-group">
        <label for="tags">Tags</label>
        <input type="text" class="form-control" id="tags" name="tags" value="{{ $strTags }}">
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="3">{{ $entry->content }}</textarea>
      </div>
      <div class="form-group col-md-6">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="true" id="is_active" name="is_active" {{ $entry->is_active == 1 ? 'checked' : '' }}>
          <label class="form-check-label" for="is_active">
            Is Active
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
@endsection
