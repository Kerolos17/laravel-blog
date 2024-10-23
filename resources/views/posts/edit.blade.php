@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Edit Post</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>

            <div class="mb-4">
                <label for="body" class="block text-gray-700">Body</label>
                <textarea name="body" id="body" class="border border-gray-300 rounded-lg w-full p-2" rows="5" required>{{ $post->body }}</textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update</button>
        </form>
    </div>
@endsection
