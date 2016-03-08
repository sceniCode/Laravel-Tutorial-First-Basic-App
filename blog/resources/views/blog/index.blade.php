@extends('layouts.master')

@section('title')

    Blog index

@stop

@section('content')



    <ul>

        @foreach($posts as $post)

            <li><a href='{{ url('post/' . $post->id) }}'>{{{ $post->post_title }}}</a></li>

        @endforeach

    </ul>

@stop