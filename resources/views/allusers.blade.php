<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
                    
                      @foreach ($user as $users)
                        <div class="all-card">
  
  
                         <div class="card">
                            <div class="card-header">
                              <a href=""><h5 class="card-title">{{ $users->name }}</h5></a>
                            </div>
                           
                            <div class="card-footer">
                                <div class="btn-edit btn">
                                  <a href="{{ route('users.edit', $users->id) }}"
                                  class="btn">Edit</a>
                                </div>
                                    <form action="{{ route('users.destroy', $users->id) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn">Delete</button>
                                    </form>  
                            </div> 
                              
                          </div>
                        </div>
                        @endforeach 
                      
          
  </x-app-layout>