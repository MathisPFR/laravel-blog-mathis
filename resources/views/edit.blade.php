
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Edit post') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                 
                <div class="container h-100 mt-5">
                  <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-10 col-md-8 col-lg-6">
                      {{-- <h3>Update Post</h3> --}}
                      <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="container-form">
                        <div class="form-group">
                          <div>
                            <label for="title">Title</label>
                          </div>
                          <input type="text" class="form-control" id="title" name="title"
                            value="{{ $post->title }}" required>
                        </div>
                        <div class="form-group">
                          <div>
                            <label for="body">contenu</label>
                          </div>  
                            <textarea class="form-control form-area" id="contenu" name="contenu" rows="3" required>{{ $post->contenu }}"</textarea>
                        </div>
                        <div class="form-group">
                            <div>
                              <label for="body">description</label>
                            </div>
                            <textarea class="form-control form-area" id="description" name="description" rows="3" required>{{ $post->description }}</textarea>
                        </div>


                        <div class="form-group">
                          <label class="categories-label">
                            Categories :   
                          </label>
                        

                        @foreach ($categories as $cat)

                            <input type="checkbox" id="categories" name="categories[]" value="{{ $cat->id }}">
                            <label for="">{{ $cat->title }}</label>
                            
                            @endforeach

                        </div>

                        

                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 input-file" id="file_input" type="file" name="image">


                      </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded btn-create">Update Post</button>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
          </div>
      </div>
  </div>
</x-app-layout>