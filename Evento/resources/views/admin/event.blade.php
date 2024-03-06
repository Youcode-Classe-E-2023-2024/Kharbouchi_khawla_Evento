<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        
    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="#" style="height: 30px; width:30px" alt="">
                        </span>
                        <span class="title">Evento</span>
                    </a>
                </li>

                <li>
                    <a href="/dashboard">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Clients</span>
                    </a>
                </li>

                <li>
                    <a href="/event">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Events</span>
                    </a>
                </li>

                <li>
                    <a href="/Categorie">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Categorie</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>


        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ================= New Events ================ -->
            <div class="containe">
                <div class="title" style="width: 100%; text-align: center; margin-bottom: 40px;margin-top:40px;">
                    <h2>Les events</h2>
                </div>
                <div class="flex min-h-screen items-center justify-center bg-white">
                    <div class="p-6 overflow-scroll px-0">
                  <table class="w-full min-w-max table-auto text-left">
                    <thead>
                      <tr>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Transaction</p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Amount</p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Date</p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Status</p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Account</p>
                        </th>
                        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70"></p>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                          <div class="flex items-center gap-3">
                            <img src="https://docs.material-tailwind.com/img/logos/logo-spotify.svg" alt="Spotify" class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Spotify</p>
                          </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$2,500</p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed 3:00pm</p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <div class="w-max">
                            <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                              <span class="">paid</span>
                            </div>
                          </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <div class="flex items-center gap-3">
                            <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                              <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/visa.png" alt="visa" class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                            </div>
                            <div class="flex flex-col">
                              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">visa
                                <!-- -->
                                <!-- -->1234
                              </p>
                              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">06/2026</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                              </svg>
                            </span>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                          <div class="flex items-center gap-3">
                            <img src="https://docs.material-tailwind.com/img/logos/logo-amazon.svg" alt="Amazon" class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Amazon</p>
                          </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$5,000</p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed 1:00pm</p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <div class="w-max">
                            <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                              <span class="">paid</span>
                            </div>
                          </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <div class="flex items-center gap-3">
                            <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                              <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/mastercard.png" alt="master-card" class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                            </div>
                            <div class="flex flex-col">
                              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">master card
                                <!-- -->
                                <!-- -->1234
                              </p>
                              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">06/2026</p>
                            </div>
                          </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                          <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                              </svg>
                            </span>
                          </button>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                    <div class="w-full pt-5 px-4 mb-8 mx-auto ">
                        <div class="text-sm text-gray-700 py-1">
                            Made with <a class="text-gray-700 font-semibold" href="https://www.material-tailwind.com/?ref=tailwindcomponents" target="_blank">Material Tailwind</a> by <a href="https://www.creative-tim.com?ref=tailwindcomponents" class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
                        </div>
                    </div>
                </div>
                
                </div>                    <!-- La Modal -->
                    {{-- onclick="document.getElementById('demo-modal').showModal();" --}}
                    <dialog id="demo-modal"
                        style="border:2px solid #2a2185 ; border-radius: 15px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); height:50%; width:70%; align-items: center; justify-content: center;">
                        <div style="display: flex;justify-content: center; align-items: center;margin-top:20px;">
                            <h2>khawla</h2>
                        </div>
                        <div class="image-container" style="text-align: center;">
                            <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg"
                                alt="">
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
                            <h3>les places :</h3>
                            <h4>22</h4>
                        </div>
                        <p style="text-align: justify;margin-top:10px; margin-bottom:10px; margin-left:10px;">Lorem
                            ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga et qui reprehenderit,
                            asperiores corrupti nisi tempore aspernatur laborum voluptatem mollitia doloribus dolore
                            minus iusto odio deserunt, deleniti, distinctio commodi.</p>

                        <button onclick="document.getElementById('demo-modal').close();"
                            style="margin-top:10px; margin-bottom:15px;margin-left:20px; background-color: #2a2185; color: white; padding: 10px 20px;border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                            Fermer
                        </button>
                    </dialog>
                </div>
            </div>
        </div>

        <!-- =========== Scripts =========  -->
        <script src="assets/js/main.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
