@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-10 leading-tight">
                    Welcome to the Blog!
                </h1>
                <p class="text-gray-200 text-lg leading-relaxed pb-15">
                    Your Gateway to the Latest in Tech Insights and Innovations
                </p>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-3 px-6 font-bold text-lg uppercase rounded hover:bg-gray-200 transition">
                    Explore Blogs
                </a>
            </div>
        </div>
    </div>

    <!-- About the Blog -->
    <div class="sm:grid grid-cols-2 gap-10 w-4/5 mx-auto py-16 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/download.jpg') }}" 
                alt="About Blogging" 
                class="rounded-lg shadow-lg">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-800 leading-tight pb-6">
                What's in Our Blog?
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Dive into topics ranging from tech to lifestyle, health, and productivity. Whether you're a curious reader or a knowledge seeker, there's something for everyone here.
            </p>
            <a 
                href="/blog"
                class="inline-block mt-6 bg-black text-white py-4 px-6 text-lg font-bold uppercase rounded hover:bg-gray-700 transition">
                Learn More
            </a>
        </div>
    </div>

    <!-- Featured Blog Post -->
    <div class="bg-gray-200 py-16">
        <div class="w-4/5 m-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800 pb-10">
                Featured Post
            </h2>
            <div class="sm:grid grid-cols-2 gap-10 items-center">
                <div>
                    <img src="{{ asset('images/write.jpg') }}" 
                        alt="Featured Post Image" 
                        class="rounded-lg shadow-lg">
                </div>
                <div class="flex flex-col justify-center bg-blue-600 text-gray-100 p-10 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold pb-6 leading-tight">
                        The Art of Writing: Tips for Beginners
                    </h3>
                    <p class="text-sm font-light pb-4">
                        By <span class="font-semibold">Kanak Agrawal</span>, Created on <span class="italic">27th Nov 2024</span>
                    </p>
                    <p class="text-gray-200 text-lg leading-relaxed pb-6">
                        Discover how to craft compelling stories and articles with practical tips for aspiring writers and content creators.
                    </p>
                    <a 
                        href="/blog"
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-sm font-extrabold py-3 px-5 rounded-3xl hover:bg-gray-100 hover:text-blue-600 transition">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Blog Posts -->
    <div class="text-center py-16">
        <span class="uppercase text-sm text-gray-400 tracking-wide">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-6 text-gray-800">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500 text-lg">
            Discover a range of topics from our latest posts.
        </p>
    </div>

    <div class="sm:grid grid-cols-3 gap-10 w-4/5 m-auto py-10">
    <!-- First Post -->
    <div class="bg-gray-100 rounded-lg shadow-lg p-6 flex flex-col items-center text-center">
        <h3 class="text-xl font-bold text-gray-800 pb-4">
            Productivity Hacks for 2024
        </h3>
        <img src="{{ asset('images/hack.jpg') }}" 
            alt="Post 1" 
            class="rounded-lg shadow-lg mb-4 w-full max-w-[250px] mx-auto">
        <p class="text-gray-600 text-sm pb-4">
            Boost your productivity with these proven strategies for staying organized and efficient in 2024.
        </p>
        <a 
            href="/blog"
            class="uppercase bg-black text-white text-sm font-bold py-2 px-4 rounded hover:bg-gray-700 transition">
            Read More
        </a>
    </div>

    <!-- Second Post -->
    <div class="bg-gray-100 rounded-lg shadow-lg p-6 flex flex-col items-center text-center">
        <h3 class="text-xl font-bold text-gray-800 pb-4">
            Healthy Living in a Digital World
        </h3>
        <img src="{{ asset('images/health.jpg') }}" 
            alt="Post 2" 
            class="rounded-lg shadow-lg mb-4 w-full max-w-[250px] mx-auto">
        <p class="text-gray-600 text-sm pb-4">
            Learn how to maintain a healthy lifestyle while balancing work and technology in today's fast-paced world.
        </p>
        <a 
            href="/blog"
            class="uppercase bg-black text-white text-sm font-bold py-2 px-4 rounded hover:bg-gray-700 transition">
            Read More
        </a>
    </div>

    <!-- Third Post -->
    <div class="bg-gray-100 rounded-lg shadow-lg p-6 flex flex-col items-center text-center">
        <h3 class="text-xl font-bold text-gray-800 pb-4">
            Exploring Minimalist Living
        </h3>
        <img src="{{ asset('images/live.jpg') }}" 
            alt="Post 3" 
            class="rounded-lg shadow-lg mb-4 w-full max-w-[250px] mx-auto">
        <p class="text-gray-600 text-sm pb-4">
            Minimalism is more than a trend. Discover how simplifying your life can lead to greater clarity and happiness.
        </p>
        <a 
            href="/blog"
            class="uppercase bg-black text-white text-sm font-bold py-2 px-4 rounded hover:bg-gray-700 transition">
            Read More
        </a>
    </div>
</div>

@endsection
