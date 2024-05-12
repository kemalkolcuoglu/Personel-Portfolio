@extends('layouts.adminlayout')
@push('styles')
<link rel="stylesheet" href="/vendor/editormd/editormd.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" integrity="sha512-XJ3ntWHl40opEiE+6dGhfK9NAKOCELrpjiBRQKtu6uJf9Pli8XY+Hikp7rlFzY4ElLSFtzjx9GGgHql7PLSeog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('scripts')
@include('components.editormd')
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
        <label for="abstract">Abstract</label>
        <input type="text" class="form-control" id="abstract" name="abstract" value="{{ $entry->abstract }}">
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <div id="text-editor">
          <textarea class="form-control" id="content" name="content" rows="3">{{ $entry->content }}</textarea>
        </div>
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
