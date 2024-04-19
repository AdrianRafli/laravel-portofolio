@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">About Me</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-10" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="col-lg-9">
      <table class="table">
        <tbody>
          <tr>
            <td>Name</td>
            <td>{{ $aboutMe->name }}</td>
          </tr>
          <tr>
            <td>Job</td>
            <td>{{ $aboutMe->job }}</td>
          </tr>
          <tr>
            <td>Short Description</td>
            <td>{{ $aboutMe->short_description}}</td>
          </tr>
          <tr>
            <td>Description</td>
            <td>{{ $aboutMe->description }}</td>
          </tr>
        </tbody>
      </table>
      <a href="/dashboard/aboutme/{{ $aboutMe->id }}/edit">
        <button class="btn btn-primary">Edit</button>
      </a>
    </div>
@endsection