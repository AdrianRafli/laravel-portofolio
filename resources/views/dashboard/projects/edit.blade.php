@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Project</h1>
    </div>

    <div class="col-lg-8 mb-5">
        <form method="POST" action="/dashboard/projects/{{ $project->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $project->name) }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly required value="{{ old('slug', $project->slug) }}">
              @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $project->description) }}</textarea>
              @error('description')
                  <div class="invalid-feedback">
                    Please enter a description in the textarea.
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tech_stack" class="form-label">Tech Stack</label>
              <input type="text" class="form-control @error('tech_stack') is-invalid @enderror" id="tech_stack" name="tech_stack" required value="{{ old('tech_stack', $project->tech_stack) }}">
              @error('tech_stack')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="github_link" class="form-label">Github Link</label>
              <input type="text" class="form-control @error('github_link') is-invalid @enderror" id="github_link" name="github_link" required value="{{ old('github_link', $project->github_link) }}">
              @error('github_link')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="demo_link" class="form-label">Demo Link</label>
              <input type="text" class="form-control @error('demo_link') is-invalid @enderror" id="demo_link" name="demo_link" required value="{{ old('demo_link', $project->demo_link) }}">
              @error('demo_link')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-4">
              <label for="image" class="form-label">Image</label>
              <input type="hidden" name="oldImage" value="{{ $project->image }}">
              @if ($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">    
              @else
                <img class="img-preview img-fluid mb-3 col-sm-5">
              @endif
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
              @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Project</button>
          </form>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            let preSlug = name.value;
            preSlug = preSlug.replace(/ /g,"-");
            slug.value = preSlug.toLowerCase();
        })

        function previewImage() {
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
          }
        }
    </script>
@endsection