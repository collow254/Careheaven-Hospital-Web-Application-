@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Conversation</h1>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Messages</div>
                    <div class="card-body">
                        @foreach ($messages as $message)
                            <div class="media">
                                <img class="mr-3 rounded-circle" src="{{ $message->sender->profile_photo_url }}" alt="{{ $message->sender->name }}'s profile picture" style="width: 64px; height: 64px;">
                                <div class="media-body">
                                    <h5 class="mt-0">{{ $message->sender->name }}</h5>
                                    <p>{{ $message->body }}</p>
                                    <p class="text-muted">{{ $message->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection