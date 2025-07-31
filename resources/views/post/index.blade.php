<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <x-category-tabs>
                        No Categories
                    </x-category-tabs>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="p-4 text-gray-900">
                    @forelse ($posts as $post)
                        <x-post-item :post="$post"></x-post-item>
                    @empty
                        <div>
                            <p class="text-gray-900 text-center py-16">No posts found.</p>
                        </div>
                    @endforelse
                </div>
                {{ $posts->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
</x-app-layout>