@extends('layouts.app')

@section('content')

    <div class="container mx-auto">
        <div class="flex justify-between p-4 items-center">
            <h1 class="text-3xl font-bo ld mb-6 mt-4 text-white">{{ $post->title }}</h1>
            <a class="bg-green-900 py-3 px-3 rounded text-white " href="{{route('posts.index')}}" >All Posts</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <p class="text-gray-700">{{ $post->body }}</p>
        </div>

        <h2 class="text-2xl font-semibold mb-4 text-white">Comments</h2>

        <!-- عرض التعليقات -->
        @foreach ($post->comments as $comment)
            <div class="bg-gray-100 shadow-md rounded-lg p-4 mb-4">
                <strong>{{ $comment->user->name }}</strong>
                <p>{{ $comment->body }}</p>
                <small class="text-gray-500">{{ $comment->created_at->diffForHumans() }}</small>
            </div>
        @endforeach

        <!-- إضافة تعليق جديد -->
        @auth
            <form action="{{ route('comments.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 mt-6">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">

                <div class="mb-4">
                    <label for="body" class="block text-gray-700">Add a Comment</label>
                    <textarea name="body" id="body" rows="4" class="border border-gray-300 rounded-lg w-full p-2" required></textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Submit</button>
            </form>
        @else
            <p class="text-gray-700">Please <a href="{{ route('login') }}" class="text-blue-500 hover:underline">login</a> to add a comment.</p>
        @endauth
    </div>
@endsection
