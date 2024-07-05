@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle" style="height: 150px;">

        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <div class="h4">{{$user->username}}</div>
                    @if($user->id != auth()->user()->id)
                        <follow-button :user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                    @endif
                </div>

                @can('update',$user->profile)
                    <a href="{{route('posts.create')}}" style="text-decoration: none;">add new post</a>
                @endcan

                @can('update',$user->profile)
                    <a href="{{route('profile.edit',$user->id)}}" style="text-decoration: none;">Edit profile</a>
                @endcan
            </div>
            <div class="d-flex">
                <div style="padding-right:20px;"><strong>{{$postCount}}</strong> posts</div>
                <div style="padding-right:20px;"><strong>{{$followersCount}}</strong> followers</div>
                <div style="padding-right:20px;"><strong>{{$followingCount}}</strong> following</div>
            </div>
            <div class="pt-4" style="font-weight: bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#" style="text-decoration: none;">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="{{route('posts.show',$post->id)}}">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
