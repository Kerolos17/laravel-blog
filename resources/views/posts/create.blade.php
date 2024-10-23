@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-white mt-4">Create New Post</h1>

        <form action="{{ route('posts.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>

            <div class="mb-4">
                <label for="body" class="block text-gray-700">Body</label>
                <textarea name="body" id="body" class="border border-gray-300 rounded-lg w-full p-2" rows="5" required></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Create</button>
        </form>
    </div>
@endsection
