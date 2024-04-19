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
    <div>
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