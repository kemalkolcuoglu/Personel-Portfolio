@extends('layouts.adminlayout')

@section('content')
  <div class="container">
    <a href="{{ route('admin.addCategory')}}" class="btn btn-primary">New</a>
    <div class="row justify-content-center">
      <table class="table">
        <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Base Category</th>
          <th scope="col">Title</th>
          <th scope="col">Is Active</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
          <th scope="row">{{ $category['id'] }}</th>
          <td>{{ $category['base_category'] == 0 ? "Base" : $category['base_category'] }}</td>
          <td>{{ $category['title'] }}</td>
          <td>{{ $category['is_active'] == true ? 'Active' : 'Passive' }}</td>
          <td><a href="{{ route('admin.editCategory', $category['id']) }}">Edit</td>
          <td><a href="{{ route('admin.deleteCategory', $category['id']) }}" onclick="alert('This Will Remove! Are you sure?');event.preventDefault(); document.getElementById('delete-form').submit();">Delete</td>
          <form id="delete-form" action="{{ route('admin.deleteCategory', ['id' => $category['id']]) }}" method="POST" class="d-none">
            @csrf
            @method('DELETE')
          </form>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
