@include('layouts.front.head')
@include('layouts.front.header')


<div class="post-container-home">
    <div class="post-one-title">
       Title :  {{ $post->title }}
    </div>
    <div class="post-one-des">
        Description :  {{ $post->description }}
     </div>
    <div class="post-one-content">
       Contenu :  {{ $post->contenu }}
    </div>
    <div class="post-one">
        <p class="">User : {{ $post->author->name }}</p>
    </div>
    @foreach($post->categorie as $cat)
        <div class="card-description">
            <div  class="card-text">Category : {{ $cat->title }}</div>
        </div>
    @endforeach



    {{-- @dd($post->image) --}}
    @if($post->image)
    <div>
       
        <img src="{{ asset('storage/'. $post->image) }}" alt="post-avatar">
    </div>
    @endif

</div>





{{-- 
<section class="bg-white dark:bg-gray-900">

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $post->title }}</h2>

            <p class="mb-4">{{ $post->description }}</p>

            <p>{{ $post->contenu }}</p>
        </div>

        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="{{ asset('storage/'. $post->image) }}" alt="office content 1">
        </div>
    </div>

</section> --}}