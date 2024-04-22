@include('layouts.front.head')
@include('layouts.front.header')
    
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <main class="mt-6">
                        <div class="btn-page">
                            <a href="legals" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded legals-btn">legals</a>
                            <a href="abouts" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded legals-btn">abouts</a>
                        </div>
                            @include('layouts.front.posts')
                        </div>
                    </main>
                    
                </div>
            </div>
        </div>
    </body>

</html>


