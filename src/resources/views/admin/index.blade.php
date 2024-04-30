@extends('layouts.adminlayout')

@section('content')
  <div class="container">
    <a href="{{ route('admin.addPost')}}" class="btn btn-primary">New</a>
    <div class="row justify-content-center">
      <table class="table">
        <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Create Date</th>
          <th scope="col">Update Date</th>
          <th scope="col">Is Active</th>
          <th scope="col">Show</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($entries as $entry)
        <tr>
          <th scope="row">{{ $entry['id'] }}</th>
          <td>{{ $entry['title'] }}</td>
          <td>{{ $entry['created_at'] }}</td>
          <td>{{ $entry['updated_at'] }}</td>
          <td>{{ $entry['is_active'] == true ? 'Active' : 'Passive' }}</td>
          <td><a href="{{ route('admin.showPost', $entry['id']) }}">Show</a></td>
          <td><a href="{{ route('admin.editPost', $entry['id']) }}">Edit</td>
          <td><a href="{{ route('admin.deletePost', $entry['id']) }}" onclick="alert('This Will Remove! Are you sure?');event.preventDefault(); document.getElementById('delete-form').submit();">Delete</td>
          <form id="delete-form" action="{{ route('admin.deletePost', ['id' => $entry['id']]) }}" method="POST" class="d-none">
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