@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Contact</h1>
    </div>


    <div class="col-lg-8 mb-5">
        <form method="POST" action="/dashboard/contacts/{{ $contact->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="image" class="form-label">Image (Icon)</label>
              <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required autofocus value="{{ old('image', $contact->image) }}">
              @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
              <a href="https://icons.getbootstrap.com/" target="_blank" class="btn btn-sm btn-info mt-3" style="color: white">icon source</a>
            </div>
            <div class="mb-3">
              <label for="platform" class="form-label">Platform</label>
              <input type="text" class="form-control @error('platform') is-invalid @enderror" id="platform" name="platform" required autofocus value="{{ old('platform', $contact->platform) }}">
              @error('platform')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="link" class="form-label">Link</label>
              <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" required autofocus value="{{ old('link', $contact->link) }}">
              @error('link')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Contact</button>
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
    </script>
@endsection