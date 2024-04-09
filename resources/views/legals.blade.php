@include('layouts.front.head')
@include('layouts.front.header')

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Ceci est les mentions légal</h1>
      {!! $content !!}

      <ul>
        @if (count($items) > 0)
            @foreach ($items as $item)
                <li>{{ $item }}</li>
            @endforeach
        @else 
        <p>ca marche pas </p> 
        @endif
        
      </ul>
               
    </body>
</html>

@include('layouts.front.footer')