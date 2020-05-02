@extends('layouts.master')
@section('title','Articles')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success">{{ Session::get('message') }}</div>
@endif
    @foreach($articles as $article)
        <div class="articles p-2">
            <h4>
                <a href="{{  route('article.show',$article->article_id) }}">
                    {{ $article->title }}
                </a>
                <a class="btn btn-warning btn-sm" href="{{ route('article.edit',$article->article_id) }}">Edit</a>
                <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{ route('article.delete',$article->article_id) }}">delete</a>

            </h4>
            <br>
            <span>Created at: {{ $article->created_at->format('D-M-Y') }}</span>
        </div>
    @endforeach
    <hr>
    {{ $articles->links('vendor.pagination.my-pagination') }}
@endsection
{{-- Sidebar --}}
@section('sidebar')
    @parent

    <p>This is Home Page.</p>
@endsection

