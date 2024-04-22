<div class="all-filter">

  <div class="filter">Filter :</div>
  
            <form action="{{url('/')}}" method="GET">
                @foreach ($categories as $categorie)

                    <div class="flex items-center mb-4">
                      <input id="default-checkbox" type="checkbox" name="categories[]" value="{{ $categorie->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $categorie->title }}</label>
                    </div>

                  @endforeach
                  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full btn-submit ">Submit</button>
            </form>

</div>
        


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
                    {{-- {{ $posts->links() }} --}}

    
  