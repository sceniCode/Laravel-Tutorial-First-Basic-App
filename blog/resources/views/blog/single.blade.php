@extends('layouts.master')

@section('title')
    {{{ $post->post_title }}}
@stop

@section('content')
    <h2>{{{ $post->post_title }}}</h2>
    <p class="meta">Posted by {{{$post->author_name}}} on {{{$post->created_at}}}</p>
    {{{ $post->post_content }}}
@stop