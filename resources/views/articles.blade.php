@extends('layouts.master')
@section('title','Articles')
@section('content')
    @foreach($articles as $article)
        <div class="articles p-2">
            <h4>
                <a href="{{  route('article.detail',$article->id) }}">
                    {{ $article->title }}
                </a>
            </h4>
            <br>
            <span>Created at: {{ $article->published_at }}</span>
        </div>
    @endforeach
@endsection
{{-- Sidebar --}}
@section('sidebar')
    @parent

    <p>This is Home Page.</p>
@endsection

