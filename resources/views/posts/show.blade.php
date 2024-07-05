@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div style="padding-right: 15px">
                        <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle" style="max-width: 60px">
                    </div>
                    <div>
                        <div style="font-weight: bold"><a href="/profile/{{$post->user->id}}" style="text-decoration: none; color: black">{{$post->user->username}}</a>
                            <a href="#" style="text-decoration: none">Follow</a>
                        </div>

                    </div>
                </div>

                <hr>

                <p><span style="font-weight: bold"><a href="/profile/{{$post->user->id}}" style="text-decoration: none; color: black">{{$post->user->username}}</a></span> {{$post->caption}}</p>
            </div>
        </div>

    </div>
@endsection
