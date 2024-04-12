
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
  
    <div class="btn-add-post">
      <a class="btn btn-sm btn-success" href={{ route('categories.create') }}>Add Categories</a>
    </div>
  
                      @foreach ($categories as $categorie)
                        <div class="all-card">
  
  
                         <div class="card">
                            <div class="card-header">
                              <a href="{{ route('categories.show', $categorie->id) }}"><h5 class="card-title">{{ $categorie->title }}</h5></a>
                            </div>
                            
                            <div class="card-footer">
                                <div class="btn-edit btn">
                                  <a href="{{ route('categories.edit', $categorie->id) }}"
                                  class="btn">Edit</a>
                                </div>
                                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn">Delete</button>
                                    </form> 
                             </div> 
                          </div>
                        </div>
                      @endforeach 
          
  </x-app-layout>