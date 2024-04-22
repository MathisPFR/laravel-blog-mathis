<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show unique post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  


                    <div class="post-container">
                        <div class=" post post-title">
                            {{ $post->title }}
                        </div>
                        <div class="post post-content">
                            {{ $post->contenu }}
                        </div>
                        <div class="post post-des">
                            {{ $post->description }}
                        </div>
                    </div>
                    @if($post->image)
                    <div>
                       
                        <img src="{{ asset('storage/'. $post->image) }}" alt="post-avatar">
                    </div>
                    @endif



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
