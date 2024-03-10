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
            <a class="_o6689fn" href="">
                <div class="hidden md:block">
                    <img src="assets/imgs/Evento_logo.png" alt="" style="width: 8%; height:4%;">
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
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
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
                <form action="{{ route('purchase-ticket') }}" method="POST">
                    @csrf
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
