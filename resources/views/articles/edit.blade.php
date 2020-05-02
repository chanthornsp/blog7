@extends('layouts.master')
@section('title','Create an Article')
@section('content')
<div class="articles p-2">
    <form action="{{ route('article.update',$article->article_id) }}" method="POST">
        {{ csrf_field() }}
        @method('patch')
        <div class="form-group">
            <label for="title">title</label>
            <input type="title" name="title" value="{{ empty(old('title'))?$article->title:old('title') }}"
                class="form-control @error('title')is-invalid @enderror" id="title" aria-describedby="title">
            <small id="title" class="form-text text-muted">Your article title</small>
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="detail">Example textarea</label>
            <textarea class="form-control @error('detail')is-invalid @enderror" name="detail" id="detail"
                rows="3">{{ empty(old('detail'))?$article->detail:old('detail') }}</textarea>
            @error('detail') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" {{ ($article->active == 1)?'checked':'' }}
                name="active" id="active">
            <label class="form-check-label" for="active">
                Active
            </label>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <br>
    <form action="{{ route('article.destroy',$article->article_id) }}" method="POST">
        @method('delete')
        @csrf
        <button onclick="return confirm('are you sure?')" type="submit" class="btn btn-danger">Delete</button>
    </form>

</div>
@endsection
{{-- Sidebar --}}
@section('sidebar')
@parent
<p>This is Home Page.</p>
@endsection
