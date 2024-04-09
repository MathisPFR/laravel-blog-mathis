@include('layouts.front.head')
@include('layouts.front.header')
    
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <main class="mt-6">
                        <div>
                            <a href="legals" class="bg-green-400 hover:shadow hover:bg-danger transition duration-150 px-2 py-1 rounded text-sm text-white mx-1 my-2">legals</a>
                            <a href="abouts" class="bg-green-400 hover:shadow hover:bg-danger transition duration-150 px-2 py-1 rounded text-sm text-white mx-1 my-2">abouts</a>
                        </div>
                        <div>
                            @include('layouts.front.posts')
                        </div>
                    </main>
                    
                </div>
            </div>
        </div>
    </body>

</html>


@include('layouts.front.footer')
