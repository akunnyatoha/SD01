@extends('layouts.main')
    @section('container')
    <div class="container">
        <article>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>
        </article>
    </div>
    @endsection