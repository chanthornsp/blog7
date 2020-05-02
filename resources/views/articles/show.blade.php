@extends('layouts.master')
@section('title','Articles')
@section('content')
    <div class="articles p-2">
        <h4>   {{ $article->title }} </h4>
        <br>
        <span>Created at: {{ $article->created_at->format('d-m-y h:m') }}</span>
        <p>{{ $article->detail }}</p>
        <a href="{{ route('article.index') }}" class="btn btn-warning">Back</a>
    </div>
@endsection
{{-- Sidebar --}}
@section('sidebar')
    @parent

    <p>This is Home Page.</p>
@endsection

