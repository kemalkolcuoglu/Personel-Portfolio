@extends('layouts.adminlayout')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('content')
  <div class="container">
    <form method="POST" action="{{ route('admin.updateCategory', ['id' => $category->id])}}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $entry->title }}">
      </div>
      <div class="form-group">
        <label for="base_category">Base Category</label>
        <select id="base_category" name="base_category" class="form-control">
          <option value="0" {{ $category->base_category == 0 ? 'selected' : '' }}>Base Category</option>
          @foreach($listedCategories as $listedCategory)
          <option value="{{ $listedCategory['id'] }}" {{ $category->base_category == $listedCategory->id ? 'selected' : '' }}>{{ $listedCategory['title'] }}</option>
          @endforeach
        </select>
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
