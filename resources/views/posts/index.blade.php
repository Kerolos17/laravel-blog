@extends('layouts.app')
@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl text-white  font-bold mt-6 mb-6">All Posts</h1>
    <a href="{{route('posts.create')}}" class="py-3 px-3 mb-5 inline-block rounded bg-green-700 text-white" >Create Post</a>
    <div class="flex gap-5">
        @foreach($posts as $post)
        <div class="bg-white shadow-md rounded-lg p-6 mb-4">
            <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
            <p class="text-gray-700">{{ Str::limit($post->body, 150) }}</p>
            <a href="{{ route('posts.show', $post) }}" class="text-blue-500 hover:underline">Read more</a>
            <div class="flex justify-end">
                <a href="{{ route('posts.edit', $post) }}" class="text-blue-500 hover:underline">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                </form>
            </div>

        </div>
    @endforeach

    </div>

</div>
@endsection
