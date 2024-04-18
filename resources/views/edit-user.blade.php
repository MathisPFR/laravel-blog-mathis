<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit users') }}
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
                        <form action="{{ route('users.update', $users->id) }}" method="post">
                          @csrf
                          @method('PUT')
                        <div class="container-form">
                          <div class="form-group">
                            <div>
                              <label for="title">Name</label>
                            </div>
                            <input type="text" class="form-control" id="name" name="name"
                              value="{{ $users->name }}" required>
                          </div>

                          

                          <div>
                            <div>Role :</div>
                              <div>
                                <input type="radio" id="" name="role" value="admin"  />
                                <label for="">Admin</label>
                            </div>
                            <div>
                              <input type="radio" id="" name="role" value="normal"  />
                              <label for="">Users</label>
                            </div>  
                          </div>
                        
                            
                          <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
                        </form>
                      </div>
                    </div>
                  </div>
  
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>