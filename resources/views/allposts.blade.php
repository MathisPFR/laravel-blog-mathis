
{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Posts</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('dashboard') }}>CRUDPosts</a>
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-success" href={{ route('posts.create') }}>Add Post</a>
        </div>
      </div>
    </div>
  </nav>

</body>
</html> --}}

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="btn-add-post">
    <a class="btn btn-sm btn-success" href={{ route('posts.create') }}>Add Post</a>
  </div>

                    @foreach ($posts as $post)
                      <div class="all-card">


                       <div class="card">
                          <div class="card-header">
                            <a href="{{ route('posts.show', $post->id) }}"><h5 class="card-title">{{ $post->title }}</h5></a>
                          </div>
                          <div class="card-content">
                          <p class="card-text">{{ $post->contenu }}</p>
                          </div>
                          <div class="card-description">
                              <p class="card-text">{{ $post->description }}</p>
                          </div>
                          <div class="card-footer">
                              <div class="btn-edit btn">
                                <a href="{{ route('posts.edit', $post->id) }}"
                                class="btn">Edit</a>
                              </div>
                           
                              
                                  <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn">Delete</button>
                                  </form>
                          </div> 
                        </div>
                      </div>
                    @endforeach 
        
</x-app-layout>








