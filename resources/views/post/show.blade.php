<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-4xl mb-4">{{$post->title}}</h1>
                <div class="flex gap-4">
                    <x-user-avatar :user="$post->user" />
                    <!-- User Avatar -->
                    <div>
                        <x-follow-c-t-r :user="$post->user" class="flex gap-2">
                            <a href="{{ route('profile.show', $post->user) }}"
                                class="hover:underline">{{ $post->user->name }}</a>
                            &middot;
                            <button @click="follow()" :class="following ? 'text-red-600':'text-emerald-600'" x-text="following ? 'Unfollow' : 'Follow'"></button>
                        </x-follow-c-t-r>
                        <div class="flex gap-2 text-sm text-gray-500">
                            <span>{{$post->readTime()}} min read</span>
                            &middot;
                            <span>{{$post->created_at->format("M d, Y")}}</span>
                        </div>
                    </div>
                </div>
                <!-- Clap Section -->
                <x-clap-button />

                <!-- Content Section -->
                <div class="mt-4">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full">

                    <div class="mt-4">
                        {{ $post->content }}
                    </div>
                </div>

                <div class="mt-8 ">
                    <span class="px-4 py-2 bg-gray-200 rounded-2xl">{{ $post->category->name }}</span>
                </div>

                <!-- Clap Section -->
                <x-clap-button />
            </div>
        </div>
    </div>
</x-app-layout>