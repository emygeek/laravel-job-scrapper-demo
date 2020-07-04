<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Jobs Scraper</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <!-- navigation -->
        <nav class="flex items-center justify-between flex-wrap bg-purple-800 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">Laravel Jobs Scraper</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-purple-200 border-purple-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                <a href="https://tailwindcss.com/" target="_blank" class="block mt-4 lg:inline-block lg:mt-0 text-purple-200 hover:text-white mr-4">
                    Tailwind CSS Docs
                </a>
                </div>
                <div>
                <a href="https://medium.com/@emymbenoun" target="_blank" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-purple-500 hover:bg-white mt-4 lg:mt-0">Demo Article</a>
                </div>
            </div>
        </nav>
        <!-- navigation -->

        <!-- container -->
        <div class="container mx-auto py-16">

            <!-- row -->
            <h1 class="text-3xl pb-8">Latest jobs</h1>
            <!-- row -->

            @if(!empty($titles))
            <!-- row -->
            <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4">
                @foreach($titles as $key => $title)
                <!-- Start div -->       
                <div class="md:max-w-sm sm:w-full h-full flex flex-col rounded overflow-hidden bg-white shadow">
                    <div class="px-6 py-4">
                        <div class="font-bold text-lg mb-2">{{$title}}</div>
                        <p class="text-gray-700 text-base">{{isset($location[$key]) ? $location[$key] : 'N/A'}}</p>
                    </div>
                    <div class="px-6 py-1 align-end">
                        @if(isset($tags[$key]))
                            @foreach($tags[$key] as $tag)
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 {{$loop->last ? '' : 'my-2 mr-2'}}">{{$tag['text']}}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="flex justify-between px-6 pt-2 pb-4">
                        <span class="font-bold text-indigo-700 text-base">View</span>
                        <span class="text-gray-700 text-sm">{{isset($time[$key]) ? $time[$key] : ''}}</span>
                    </div>
                </div>
                <!-- End div -->
                @endforeach
            </div>
            <!-- end of row -->
            @endif

        </div>
        <!-- container -->
    </body>
</html>
