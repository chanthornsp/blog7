@extends('layouts.master')
@section('title','Page Not Found')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Error code 404</h1>
        <p class="lead">Sorry Page You're looking for is not found or has been deleted !</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{ url('/') }}" role="button">Back to home page</a>
    </div>
@endsection

