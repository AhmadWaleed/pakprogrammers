@extends('layouts.forum.forum-master')

@section('stylesheets')
    <style>
        .myClass {
            color: red;
        }
    </style>
@stop

@section('forum-content')
    <h1 class="myClass">This is page content</h1>
@endsection