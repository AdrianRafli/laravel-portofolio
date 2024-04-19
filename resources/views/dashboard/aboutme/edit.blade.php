@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">About Me</h1>
    </div>

    <div class="col-lg-8 mb-5">
      <form method="POST" action="/dashboard/aboutme/{{ $aboutMe->id }}">
          @method('put')
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $aboutMe->name) }}">
            @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="job" class="form-label">Job</label>
            <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job" required autofocus value="{{ old('job', $aboutMe->job) }}">
            @error('job')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="short_description" class="form-label">Short Description</label>
            <input type="text" class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" required autofocus value="{{ old('short_description', $aboutMe->short_description) }}">
            @error('short_description')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input id="description" type="hidden" name="description" value="{{ old('description', $aboutMe->description) }}">
            <trix-editor input="description"></trix-editor>
            @error('description')
                <div class="invalid-feedback">
                  Please enter a description in the textarea.
                </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Update About</button>
        </form>
  </div>

  <script>
    // tambahkan ke halaman yang menggunakan trix editor
      document.addEventListener('trix-file-accept', function(e) {
          e.preventDefault();
      });
  </script>
@endsection