@extends('layouts.master')
@section('title','Create an Article')
@section('content')
    <div class="articles p-2">
       <form action="{{ route('article.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">title</label>
            <input type="title"  name="title" value="{{ old('title') }}" class="form-control @error('title')is-invalid @enderror" id="title" aria-describedby="title">
            <small id="title" class="form-text text-muted">Your article title</small>
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="detail">Example textarea</label>
            <textarea class="form-control @error('detail')is-invalid @enderror" name="detail" id="detail" rows="3">{{ old('detail') }}</textarea>
            @error('detail') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" {{ empty(old('active'))?'':'checked' }} name="active" id="active">
            <label class="form-check-label" for="active">
              Active
            </label>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>

       </form>
    </div>
@endsection
{{-- Sidebar --}}
@section('sidebar')
    @parent
    <p>This is Home Page.</p>
@endsection

