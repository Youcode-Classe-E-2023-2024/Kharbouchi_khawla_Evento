<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>


</head>

<body>

    <nav class=" w-full flex relative justify-between items-center mx-auto px-8 h-20"
        style="background-color: rgb(211, 68, 82);">
        <!-- logo -->
        <div class="inline-flex">
            <a class="_o6689fn" href="/">
                <div class="hidden md:block">
                    <svg width="102" height="32" fill="currentcolor" style="display: block">
                        <path
                            d="M29.24 22.68c-.16-.39-.31-.8-.47-1.15l-.74-1.67-.03-.03c-2.2-4.8-4.55-9.68-7.04-14.48l-.1-.2c-.25-.47-.5-.99-.76-1.47-.32-.57-.63-1.18-1.14-1.76a5.3 5.3 0 00-8.2 0c-.47.58-.82 1.19-1.14 1.76-.25.52-.5 1.03-.76 1.5l-.1.2c-2.45 4.8-4.84 9.68-7.04 14.48l-.06.06c-.22.52-.48 1.06-.73 1.64-.16.35-.32.73-.48 1.15a6.8 6.8 0 007.2 9.23 8.38 8.38 0 003.18-1.1c1.3-.73 2.55-1.79 3.95-3.32 1.4 1.53 2.68 2.59 3.95 3.33A8.38 8.38 0 0022.75 32a6.79 6.79 0 006.75-5.83 5.94 5.94 0 00-.26-3.5zm-14.36 1.66c-1.72-2.2-2.84-4.22-3.22-5.95a5.2 5.2 0 01-.1-1.96c.07-.51.26-.96.52-1.34.6-.87 1.65-1.41 2.8-1.41a3.3 3.3 0 012.8 1.4c.26.4.45.84.51 1.35.1.58.06 1.25-.1 1.96-.38 1.7-1.5 3.74-3.21 5.95zm12.74 1.48a4.76 4.76 0 01-2.9 3.75c-.76.32-1.6.41-2.42.32-.8-.1-1.6-.36-2.42-.84a15.64 15.64 0 01-3.63-3.1c2.1-2.6 3.37-4.97 3.85-7.08.23-1 .26-1.9.16-2.73a5.53 5.53 0 00-.86-2.2 5.36 5.36 0 00-4.49-2.28c-1.85 0-3.5.86-4.5 2.27a5.18 5.18 0 00-.85 2.21c-.13.84-.1 1.77.16 2.73.48 2.11 1.78 4.51 3.85 7.1a14.33 14.33 0 01-3.63 3.12c-.83.48-1.62.73-2.42.83a4.76 4.76 0 01-5.32-4.07c-.1-.8-.03-1.6.29-2.5.1-.32.25-.64.41-1.02.22-.52.48-1.06.73-1.6l.04-.07c2.16-4.77 4.52-9.64 6.97-14.41l.1-.2c.25-.48.5-.99.76-1.47.26-.51.54-1 .9-1.4a3.32 3.32 0 015.09 0c.35.4.64.89.9 1.4.25.48.5 1 .76 1.47l.1.2c2.44 4.77 4.8 9.64 7 14.41l.03.03c.26.52.48 1.1.73 1.6.16.39.32.7.42 1.03.19.9.29 1.7.19 2.5zM41.54 24.12a5.02 5.02 0 01-3.95-1.83 6.55 6.55 0 01-1.6-4.48 6.96 6.96 0 011.66-4.58 5.3 5.3 0 014.08-1.86 4.3 4.3 0 013.7 1.92l.1-1.57h2.92V23.8h-2.93l-.1-1.76a4.52 4.52 0 01-3.88 2.08zm.76-2.88c.58 0 1.09-.16 1.57-.45.44-.32.8-.74 1.08-1.25.25-.51.38-1.12.38-1.8a3.42 3.42 0 00-1.47-3.04 2.95 2.95 0 00-3.12 0c-.44.32-.8.74-1.08 1.25a4.01 4.01 0 00-.38 1.8 3.42 3.42 0 001.47 3.04c.47.29.98.45 1.55.45zM53.45 8.46c0 .35-.06.67-.22.93-.16.25-.38.48-.67.64-.29.16-.6.22-.92.22-.32 0-.64-.06-.93-.22a1.84 1.84 0 01-.67-.64 1.82 1.82 0 01-.22-.93c0-.36.07-.68.22-.93.16-.3.39-.48.67-.64.29-.16.6-.23.93-.23a1.84 1.84 0 011.6.86 2 2 0 01.21.94zm-3.4 15.3V11.7h3.18v12.08h-3.19zm11.68-8.9v.04c-.15-.07-.35-.1-.5-.13-.2-.04-.36-.04-.55-.04-.89 0-1.56.26-2 .8-.48.55-.7 1.32-.7 2.31v5.93h-3.19V11.69h2.93l.1 1.83c.32-.64.7-1.12 1.24-1.48a3.1 3.1 0 011.81-.5c.23 0 .45.02.64.06.1.03.16.03.22.06v3.2zm1.28 8.9V6.74h3.18v6.5c.45-.58.96-1.03 1.6-1.38a5.02 5.02 0 016.08 1.31 6.55 6.55 0 011.6 4.49 6.96 6.96 0 01-1.66 4.58 5.3 5.3 0 01-4.08 1.86 4.3 4.3 0 01-3.7-1.92l-.1 1.57-2.92.03zm6.15-2.52c.57 0 1.08-.16 1.56-.45.44-.32.8-.74 1.08-1.25.26-.51.38-1.12.38-1.8 0-.67-.12-1.28-.38-1.79a3.75 3.75 0 00-1.08-1.25 2.95 2.95 0 00-3.12 0c-.45.32-.8.74-1.09 1.25a4.01 4.01 0 00-.38 1.8 3.42 3.42 0 001.47 3.04c.47.29.98.45 1.56.45zm7.51 2.53V11.69h2.93l.1 1.57a3.96 3.96 0 013.54-1.89 4.1 4.1 0 013.82 2.44c.35.76.54 1.7.54 2.75v7.24h-3.19v-6.82c0-.84-.19-1.5-.57-1.99-.38-.48-.9-.74-1.56-.74-.48 0-.9.1-1.27.32-.35.23-.64.52-.86.93a2.7 2.7 0 00-.32 1.35v6.92h-3.16zm12.52 0V6.73h3.19v6.5a4.67 4.67 0 013.73-1.89 5.02 5.02 0 013.95 1.83 6.57 6.57 0 011.59 4.48 6.95 6.95 0 01-1.66 4.58 5.3 5.3 0 01-4.08 1.86 4.3 4.3 0 01-3.7-1.92l-.09 1.57-2.93.03zm6.18-2.53c.58 0 1.09-.16 1.56-.45.45-.32.8-.74 1.09-1.25.25-.51.38-1.12.38-1.8a3.42 3.42 0 00-1.47-3.04 2.95 2.95 0 00-3.12 0c-.44.32-.8.74-1.08 1.25a3.63 3.63 0 00-.38 1.8 3.42 3.42 0 001.47 3.04c.47.29.95.45 1.55.45z">
                        </path>
                    </svg>
                </div>
                <div class="block md:hidden">
                    <svg width="30" height="32" fill="currentcolor" style="display: block">
                        <path
                            d="M29.24 22.68c-.16-.39-.31-.8-.47-1.15l-.74-1.67-.03-.03c-2.2-4.8-4.55-9.68-7.04-14.48l-.1-.2c-.25-.47-.5-.99-.76-1.47-.32-.57-.63-1.18-1.14-1.76a5.3 5.3 0 00-8.2 0c-.47.58-.82 1.19-1.14 1.76-.25.52-.5 1.03-.76 1.5l-.1.2c-2.45 4.8-4.84 9.68-7.04 14.48l-.06.06c-.22.52-.48 1.06-.73 1.64-.16.35-.32.73-.48 1.15a6.8 6.8 0 007.2 9.23 8.38 8.38 0 003.18-1.1c1.3-.73 2.55-1.79 3.95-3.32 1.4 1.53 2.68 2.59 3.95 3.33A8.38 8.38 0 0022.75 32a6.79 6.79 0 006.75-5.83 5.94 5.94 0 00-.26-3.5zm-14.36 1.66c-1.72-2.2-2.84-4.22-3.22-5.95a5.2 5.2 0 01-.1-1.96c.07-.51.26-.96.52-1.34.6-.87 1.65-1.41 2.8-1.41a3.3 3.3 0 012.8 1.4c.26.4.45.84.51 1.35.1.58.06 1.25-.1 1.96-.38 1.7-1.5 3.74-3.21 5.95zm12.74 1.48a4.76 4.76 0 01-2.9 3.75c-.76.32-1.6.41-2.42.32-.8-.1-1.6-.36-2.42-.84a15.64 15.64 0 01-3.63-3.1c2.1-2.6 3.37-4.97 3.85-7.08.23-1 .26-1.9.16-2.73a5.53 5.53 0 00-.86-2.2 5.36 5.36 0 00-4.49-2.28c-1.85 0-3.5.86-4.5 2.27a5.18 5.18 0 00-.85 2.21c-.13.84-.1 1.77.16 2.73.48 2.11 1.78 4.51 3.85 7.1a14.33 14.33 0 01-3.63 3.12c-.83.48-1.62.73-2.42.83a4.76 4.76 0 01-5.32-4.07c-.1-.8-.03-1.6.29-2.5.1-.32.25-.64.41-1.02.22-.52.48-1.06.73-1.6l.04-.07c2.16-4.77 4.52-9.64 6.97-14.41l.1-.2c.25-.48.5-.99.76-1.47.26-.51.54-1 .9-1.4a3.32 3.32 0 015.09 0c.35.4.64.89.9 1.4.25.48.5 1 .76 1.47l.1.2c2.44 4.77 4.8 9.64 7 14.41l.03.03c.26.52.48 1.1.73 1.6.16.39.32.7.42 1.03.19.9.29 1.7.19 2.5z">
                        </path>
                    </svg>
                </div>
            </a>
        </div>
        <!-- end logo -->
        <!-- login -->
        <div class="flex-initial">
            <div class="flex justify-end items-center relative">
                <div class="block">
                    <div class="inline relative">
                        <a href="/home"><button type="button"
                            class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg">
                            <div class="pl-1">
                               <h3>Home</h3>
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
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end login -->
    </nav>



    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="max-w-screen-lg mx-auto p-5 sm:p-10 md:p-16">

        <div class="mb-10 rounded overflow-hidden flex flex-col mx-auto">
            <a href="#"
                class="text-xl sm:text-4xl font-semibold inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2 custom-hover-color"
                style="">
                {{ $event->title }}
            </a>

            <div class="relative">
                <a href="#">
                    <img class="w-full border rounded-xl" src="{{ asset('storage/images/' . $event->image) }}"
                        alt="Sunset in the mountains">
                </a>

            </div>

            <p class="text-gray-700 py-5 text-base leading-8">
                {{ $event->description }}
            </p>
            <h4>
                place disponible : {{ $event->places }} places
            </h4>
            <h3> Le prix : {{ $event->price }}DH</h3>

            @php
                use Carbon\Carbon;
                $eventDate = Carbon::parse($event->event_date);
                $now = Carbon::now();
                $diff = $eventDate->diffForHumans($now, true, true);
            @endphp


            <div class="py-5 text-sm font-regular text-gray-900 flex">
                <span class="mr-3 flex flex-row items-center">
                    <svg class="text-indigo-600" fill="currentColor" height="13px" width="13px" version="1.1"
                        id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="ml-1">
                        @if ($eventDate->isPast())
                            <span>L'événement est terminé.</span>
                        @else
                            <span>Temps restant : {{ $diff }}</span>
                        @endif
                    </span></span>

            </div>
            <hr>
            <div class="flex justify-end mt-3">
                <button
                    class="px-4 py-2  text-white rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-opacity-50"
                    onclick="document.getElementById('demo-modal').showModal();"
                    style="background-color: rgb(211, 68, 82);">
                    Acheter
                </button>
            </div>
            <dialog id="demo-modal"
                style="border:2px solid rgb(211, 68, 82); ; border-radius: 15px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); height:auto; width:50%; align-items: center; justify-content: center;">
               
                <div class="bg-white rounded-lg shadow-lg p-6" style="height: auto;">
                    <button onclick="document.getElementById('demo-modal').close();"
                    style="margin-top:10px; margin-bottom:15px;margin-left:20px; background-color: rgb(211, 68, 82); color: white; 
                padding: 10px 20px;
                border: none; 
                border-radius: 5px;
                cursor: pointer; 
                transition: background-color 0.3s;">
                    X
                    
                </button>
                <h2 class="text-lg font-medium mb-6">Payment Information</h2>
                <form action="{{ route('submit.ticket') }}" method="POST">
                    @csrf
                    <label for="card-number" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email"  placeholder="Email" class="w-full mb-4 py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                    <div class="grid grid-cols-2 gap-6">

                        <div class="col-span-2 sm:col-span-1">
                            <label for="card-number" class="block text-sm font-medium text-gray-700 mb-2">Card Number</label>
                            <input type="text" name="card_number" id="card-number" placeholder="0000 0000 0000 0000" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="expiration-date" class="block text-sm font-medium text-gray-700 mb-2">Expiration Date</label>
                            <input type="text" name="expiration_date" id="expiration-date" placeholder="MM / YY" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="cvv" class="block text-sm font-medium text-gray-700 mb-2">CVV</label>
                            <input type="text" name="cvv" id="cvv" placeholder="000" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="card-holder" class="block text-sm font-medium text-gray-700 mb-2">Card Holder</label>
                            <input type="text" name="card-holder" id="card-holder" placeholder="Full Name" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                    <div class="mt-8">
                        <button type="submit" class="w-full bg-green-500 hover:bg-blue-600 text-white font-medium py-3 rounded-lg focus:outline-none">Submit</button>
                    </div>
                </form>
                </div>
            </dialog>



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
