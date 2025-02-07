
@extends('layouts.app')

@section('content')
    <div class="container">
        @if($posts->isEmpty())
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div>
                        <h1>Follow people to see their posts</h1>
                    </div>
                </div>
            </div>
        @endif
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row pt-2 pb-4">
                <div class="col-6 offset-3">
                    <div>
                        <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
