
        @foreach ($posts as $post)

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

        @endforeach

    
  