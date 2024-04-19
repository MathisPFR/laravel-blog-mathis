{{-- 
        @foreach ($posts as $post)

        <div class="post-container">
            <div class=" post post-title">
                <a href="{{ route('post.byCategory', ['category' => $post->categorie]) }}">{{ $post->title }}</a>
            </div>
            <div class="post post-content">
                {{ $post->contenu }}
            </div>
            <div class="post post-des">
                {{ $post->description }}
            </div>
        </div>

        @endforeach --}}

        

            <form action="{{url('/')}}" method="GET">
                @foreach ($categories as $categorie)
                <div>
                    <input type="checkbox" id="" name="categories[]" value="{{ $categorie->id }}" />
                    <label for="">{{ $categorie->title }}</label>
                  </div>
                  @endforeach
                  <button type="submit">Submit</button>
            </form>
        
        


        @foreach ($posts as $post)
                      <div class="all-card">
                       <div class="card">
                          <div class="card-header">
                            <a href="{{ route('unique.post', $post->id) }}"><h5 class="card-title">{{ $post->title }}</h5></a>
                          </div>
                          <div class="card-content">
                          <p class="card-text">{{ $post->contenu }}</p>
                          </div>
                          <div class="card-description">
                              <p class="card-text">{{ $post->description }}</p>
                          </div>
                          <div class="card-description">
                            <p class="card-text">User : {{ $post->author->name }}</p>
                          </div>
                        @foreach($post->categorie as $cat)
                          <div class="card-description">
                            <a href="" class="card-text">Category : {{ $cat->title }}</a>
                          </div>
                        @endforeach
                        </div>
                      </div>
                    @endforeach 

    
  