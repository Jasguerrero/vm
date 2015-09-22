@extends('layouts.master')

@section('content')
    @include ('partials.postsCreate')
    <hr>
    <h3>News Feed</h3>
    <br>

    @foreach ($posts as $post)
        <div>
            <paper-card id="my-card"  heading='{{ $post->user->name }}'>
                <div class="card-content">
                    <div class="big">{{ $post->body}}</div>
                </div>
                <div class="card-actions">
                    <paper-fab id="my-button-success" mini icon="favorite"></paper-fab>
                </div>
            </paper-card>
        </div>
        <br>
    @endforeach
    {!! $posts->render() !!}
@endsection