



<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Add post') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                 
                <div class="container h-100 mt-5">
                  <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-10 col-md-8 col-lg-6">
                      {{-- <h3>Add a Post</h3> --}}
                      <form action="{{ route('posts.store') }}" method="post">
                        @csrf
                        <div class="container-form">
                          <div class="form-group">
                            <div>
                              <label for="title">Title</label>
                            </div>
                            <input type="text" class="form-control" id="title" name="title"
                               required>
                          </div>
                          <div class="form-group">
                            <div>
                              <label for="body">contenu</label>
                            </div>  
                              <textarea class="form-control form-area" id="contenu" name="contenu" rows="3" required></textarea>
                          </div>
                          <div class="form-group">
                              <div>
                                <label for="body">description</label>
                              </div>
                              <textarea class="form-control form-area" id="description" name="description" rows="3" required></textarea>
                          </div>
                          @if($errors->any())
                          {{ implode('',$errors->all('Veuillez remplir cette case')) }}
                          @endif
                          @foreach ($categories as $categorie)

                          <div class="form-group">
                         
                            <input type="checkbox" id="categories" name="categories[]" value="{{ $categorie->id }}">
                            {{ $categorie->title }}
                            @endforeach
                          </div>

                          <label for="">Catégories</label>



                          
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
          </div>
      </div>
  </div>
</x-app-layout>







 {{-- <div class="container-form">
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control form-area" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <div>
                              <label for="body">contenu</label>
                            </div>
                          <textarea class="form-control form-area" id="contenu" name="contenu" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <div>
                              <label for="body">description</label>
                            </div>
                          <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                      </div> --}}