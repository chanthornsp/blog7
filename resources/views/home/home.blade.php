@extends('layouts.master')
@section('title','home')
@section('content')
    @includeWhen(isset($data),'layouts.success',['alert'=>'Successfully'])
    @includeUnless(isset($data),'layouts.error',['alert'=>'Error'])
    @if(isset($data))
        {!! $data !!}
    @else
        <h1>Data Not Found!</h1>
    @endif
@endsection
{{-- Sidebar --}}
@section('sidebar')
    @parent

    <p>This is Home Page.</p>
@endsection

