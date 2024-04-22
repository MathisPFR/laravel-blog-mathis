<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add category') }}
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
                        <form action="{{ route('categories.store') }}" method="post">
                          @csrf
                          <div class="container-form">
                            <div class="form-group">
                              <div>
                                <label for="title">Title</label>
                              </div>
                              <input type="text" class="form-control" id="title" name="title"
                                 required>
                            </div>
                            
                          </div>
                          <br>
                          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded btn-create">Create Category</button>
                        </form>
                      </div>
                    </div>
                  </div>
  
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>