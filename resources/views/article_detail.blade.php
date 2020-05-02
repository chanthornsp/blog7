@extends('layouts.master')
@section('title','Articles')
@section('content')
    @if(isset($article))
        <div class="articles p-2">
            <h4> {{ $article->title }}</h4>
            <p>{{ $article->detail }}</p>
            <br>
            <span>Created at: {{ $article->published_at }}</span>
        </div>
    @endif
    <a href="{{ route('home.articles') }}" class="btn btn-warning">Back</a>
@endsection
{{-- Sidebar --}}
@section('sidebar')
    @parent

    <p>This is Home Page.</p>
@endsection

