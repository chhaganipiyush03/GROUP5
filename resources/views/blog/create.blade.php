@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl font-bold">
            Write a New Blog Post
        </h1>
        <p class="text-gray-600 mt-4">
            Share your thoughts and ideas with the world.
        </p>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto mt-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-full text-gray-50 bg-red-700 rounded-lg py-2 px-4 mb-2">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-10">
    <form 
        action="/blog" 
        method="POST" 
        enctype="multipart/form-data">
        @csrf

        <!-- Blog Title -->
        <input 
            type="text" 
            name="title" 
            placeholder="Enter Blog Title"
            class="w-full bg-gray-100 border border-gray-300 rounded-lg py-3 px-4 text-lg mb-5"
            required>

        <!-- Blog Description -->
        <textarea 
            name="description" 
            placeholder="Write your blog content here..."
            class="w-full bg-gray-100 border border-gray-300 rounded-lg py-3 px-4 text-lg h-64 mb-5"
            required></textarea>

        <!-- Blog Image -->
        <div class="bg-gray-100 py-4 px-5 rounded-lg mb-5">
            <label class="block text-gray-600 font-semibold mb-2">
                Upload an Image for Your Blog 
            </label>
            <input 
                type="file" 
                name="image" 
                class="text-gray-600">
        </div>

        <!-- Submit Button -->
        <button 
            type="submit"
            class="bg-black text-white font-bold py-3 px-6 rounded-lg hover:bg-gray-600 transition duration-300">
            Publish Blog
        </button>
    </form>
</div>
@endsection
