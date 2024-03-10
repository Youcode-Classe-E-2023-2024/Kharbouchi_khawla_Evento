<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Evento</title>

</head>

<body>

    <nav class=" w-full flex relative justify-between items-center mx-auto px-8 h-20"
        style="background-color: rgb(211, 68, 82);">
        <!-- logo -->
        <div class="inline-flex">
            <a class="_o6689fn" href="/">
                <div class="hidden md:block">
                    <img src="assets/imgs/Evento_logo.png" alt="" style="width: 8%; height:4%;">
                </div>

            </a>
        </div>
        <!-- end logo -->
        <!-- login -->
        <div class="flex-initial">
            <div class="flex justify-end items-center relative">
                <div class="flex mr-4 items-center">
                    @if (Auth::check() && Auth::user()->isAdmin())
                        <div class="block relative">
                            <a href="/dashboard"><button type="button"
                                    class="inline-block py-2 px-3 hover:bg-white rounded-full relative ">
                                    <div class="flex items-center h-5">

                                        <div class="_xpkakx">
                                            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true" role="presentation" focusable="false"
                                                style="display: block; height: 16px; width: 16px; fill: currentcolor;">
                                                <path
                                                    d="m8.002.25a7.77 7.77 0 0 1 7.748 7.776 7.75 7.75 0 0 1 -7.521 7.72l-.246.004a7.75 7.75 0 0 1 -7.73-7.513l-.003-.245a7.75 7.75 0 0 1 7.752-7.742zm1.949 8.5h-3.903c.155 2.897 1.176 5.343 1.886 5.493l.068.007c.68-.002 1.72-2.365 1.932-5.23zm4.255 0h-2.752c-.091 1.96-.53 3.783-1.188 5.076a6.257 6.257 0 0 0 3.905-4.829zm-9.661 0h-2.75a6.257 6.257 0 0 0 3.934 5.075c-.615-1.208-1.036-2.875-1.162-4.686l-.022-.39zm1.188-6.576-.115.046a6.257 6.257 0 0 0 -3.823 5.03h2.75c.085-1.83.471-3.54 1.059-4.81zm2.262-.424c-.702.002-1.784 2.512-1.947 5.5h3.904c-.156-2.903-1.178-5.343-1.892-5.494l-.065-.007zm2.28.432.023.05c.643 1.288 1.069 3.084 1.157 5.018h2.748a6.275 6.275 0 0 0 -3.929-5.068z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </a>
                    @endif
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <div class="block">
                <div class="inline relative">
                    <button type="button" onclick="document.getElementById('logout-form').submit();"
                        class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg">
                        <div class="pl-1">
                            <h3>Lougout</h3>
                        </div>

                        <div class="block flex-grow-0 flex-shrink-0 h-10 w-12 pl-5">
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                role="presentation" focusable="false"
                                style="display: block; height: 100%; width: 100%; fill: currentcolor;">
                                <path
                                    d="m16 .7c-8.437 0-15.3 6.863-15.3 15.3s6.863 15.3 15.3 15.3 15.3-6.863 15.3-15.3-6.863-15.3-15.3-15.3zm0 28c-4.021 0-7.605-1.884-9.933-4.81a12.425 12.425 0 0 1 6.451-4.4 6.507 6.507 0 0 1 -3.018-5.49c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5a6.513 6.513 0 0 1 -3.019 5.491 12.42 12.42 0 0 1 6.452 4.4c-2.328 2.925-5.912 4.809-9.933 4.809z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        </div>
        <!-- end login -->
    </nav>

    <div style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://t3.ftcdn.net/jpg/04/38/18/48/360_F_438184846_1BzROkQWk4Ffwf5wHgtemCLhdmoSugYl.jpg) no-repeat center;background-size:cover"
        class="py-52 px-1 md:px-8 text-center relative text-white font-bold text-2xl md:text-3xl overflow-auto flex justify-center items-center"
        style="height: 100vh;">
        <div>
            <h1 class="pb-4">Search for Events</h1>
            <div class="search" style="display: flex; justify-content: center; align-items: center;">
                <label>
                    <input type="text" placeholder="Search here" style="margin-right: 8px;">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap gap-1 mt-6 mb-6 md:gap-2 justify-center items-center ">
        @foreach ($categories as $category)
            <a href="#">
                <span
                    class="inline-block bg-cyan-400 text-white font-normal rounded text-sm mt-2 px-2 py-1 sm:px-2 sm:font-medium sm:py-1 break-words mt-0"
                    style="background-color: rgb(211, 68, 82);">
                    {{ $category->name }}
                </span>
            </a>
        @endforeach

    </div>
    <div class="container mx-auto mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            <!-- Replace this with your grid items -->
            @foreach ($events as $event)
                <div class="rounded-lg border p-4"
                    style="backdrop-filter: blur(16px) saturate(180%);-webkit-backdrop-filter: blur(16px) saturate(180%);background-color: rgba(17, 25, 40, 0.25);filter: drop-shadow(0 30px 10px rgba(0, 0, 0, 0.125));">
                    <img src="{{ asset('storage/images/' . $event->image) }}" alt="Placeholder Image"
                        class="w-full h-48 rounded-md object-cover" style="border: 2px solid rgb(211, 68, 82);">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl mb-2">{{ $event->title }}</div>
                        <h3 class="text-gray-700 text-base">
                            Lieu: {{ $event->location }}
                        </h3>
                    </div>
                    <div class="px-1 py-4">
                        <a href="{{ route('events.show', $event->id) }}" class="text-blue-500 hover:underline">Read
                            More</a>
                    </div>
                </div>
            @endforeach
            <!-- Add more items as needed -->

        </div>
        <!-- Pagination controls centered -->
        <div class="mt-4">
            {{ $events->links() }}
        </div>
    </div>
    </div>
    <footer class=" text-white py-4 px-3 mt-16" style="background-color: rgb(211, 68, 82);">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full md:w-1/2 md:text-center md:mb-0 mb-8">
                <p class="text-xs text-white md:text-sm">Copyright 2020 &copy; All Rights Reserved</p>
            </div>
            <div class="w-full md:w-1/2 md:text-center md:mb-0 mb-8">
                <ul class="list-reset flex justify-center flex-wrap text-xs md:text-sm gap-3">
                    <li><a href="#" class="text-white hover:text-white">Contact</a></li>
                    <li class="mx-4"><a href="#" class="text-white hover:text-white">Privacy Policy</a></li>
                    <li><a href="#" class="text-white hover:text-white">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </footer>



</body>

</html>
