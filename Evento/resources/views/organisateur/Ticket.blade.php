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
        table {
            width: 100%;
            border-collapse: collapse;
        }

        .header_fixed {
            max-height: 100vh;
            width: 100%;
            overflow: auto;
            border: 1px solid #dddddd;
        }

        .header_fixed thead th {
            position: sticky;
            top: 0;
            background-color: black;
            color: #e6e7e8;
            font-size: 15px;
        }

        th,
        td {
            border-bottom: 1px solid #dddddd;
            padding: 10px 20px;
            font-size: 14px;
        }

        td img {
            height: 60px;
            width: 60px;
            border-radius: 100%;
            border: 5px solid #e6e7e8;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr:nth-child(odd) {
            background-color: #edeef1;
        }

        tr:hover td {
            color: #44b478;
            cursor: pointer;
            background-color: #ffffff;
        }

        td button {
            border: none;
            padding: 7px 20px;
            border-radius: 20px;
            background-color: black;
            color: #e6e7e8;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .contenedor {
            display: flex;
            flex-wrap: wrap;
            box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.2);
        }

        .img {
            flex: 1 1 200px;
            background-color: #FF5F1F;
            min-height: 300px;
            height: auto;
        }

        .contenido {
            flex: 1 1 300px;
            background-color: #fff;
            padding: 20px;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');

        .ana {
            gap: 20px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .containe {
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(17, 25, 40, 0.25);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
            padding: 38px;
            filter: drop-shadow(0 30px 10px rgba(0, 0, 0, 0.125));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 30%;
        }

        .wrapper {
            width: 100%;
            height: 100%;
        }

        .banner-image img {

            background-size: cover;
            height: 300px;
            width: 100%;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.255)
        }

        h1 {
            font-family: 'Righteous', sans-serif;
            color: rgba(255, 255, 255, 0.98);
            text-transform: uppercase;
            font-size: 25px;

        }

        p {
            color: #fff;
            font-family: 'Lato', sans-serif;
            text-align: center;
            font-size: 0.8rem;
            line-height: 150%;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .button-wrapper {
            margin-top: 18px;
        }

        .btn {
            border: none;
            padding: 12px 24px;
            border-radius: 24px;
            font-size: 12px;
            font-size: 0.8rem;
            letter-spacing: 2px;
            cursor: pointer;
        }

        .btn+.btn {
            margin-left: 10px;
        }

        .outline {
            background: rgba(245, 50, 40, 0.9);
            color: rgba(245, 251, 253, 0.9);
            border: 1px solid rgba(0, 212, 255, 0.6);
            transition: all .3s ease;

        }

        .outline:hover {
            transform: scale(1.125);
            color: rgba(255, 255, 255, 0.9);
            border-color: rgba(255, 255, 255, 0.9);
            transition: all .3s ease;
        }

        .fill {
            background: rgba(19, 255, 74, 0.845);
            color: rgba(255, 255, 255, 0.95);
            filter: drop-shadow(0);
            font-weight: bold;
            transition: all .3s ease;
        }

        .fill:hover {
            transform: scale(1.125);
            border-color: rgba(255, 255, 255, 0.9);
            filter: drop-shadow(0 10px 5px rgba(0, 0, 0, 0.125));
            transition: all .3s ease;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }
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
                    <a href="/ticket">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Ticket</span>
                    </a>
                </li>

                <li>
                    <a href="/organisdash">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Events</span>
                    </a>
                </li>

                <li>

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
            <div class="contain">
                <div class="title" style="width: 100%; text-align: center; margin-bottom: 40px; margin-top: 40px;">
                    <h2>Les events</h2>
                </div>
                <div class="flex min-h-screen items-center justify-center bg-white">
                    <!-- Ajout de styles ici pour centrer et ajouter une marge -->
                    <div class="p-6 overflow-scroll px-0" style="width: auto; margin: 0 auto;">
                        <table
                            style="margin-left: auto; margin-right: auto; width: 90%; border : 2px solid #2a2185; border-radius: 10px;">
                            <!-- Ajustez la largeur selon le besoin -->
                            <thead>
                                <tr style="border-bottom: 2px solid #2a2185;">
                                    <th>Ticket</th>
                                    <th>Client</th>
                                    <th>Date</th>
                                    <th>Validation</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                    <tr>
                                        <td style="text-align: center;"  onclick="document.getElementById('demo-modal').showModal();">
                                                <h3>1<h3>
                                                </td>
                                        <td style="text-align: center;">jhklm</td>
                                        <td style="text-align: center;">010205</td>
                                        <td style="text-align: center;">
                                            {{-- @if (optional($event->validity)->valid) --}}
                                                <!-- Use optional() to avoid errors if $event->validity is null -->
                                                <button style="background-color: green; color: white;">Validé</button>
                                            {{-- @else --}}
                                                <button style="background-color: red; color: white;">Non validé</button>
                                            {{-- @endif --}}

                                    </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- La Modal -->
            {{-- <dialog id="demo-modal"
                style="backdrop-filter: blur(16px) saturate(180%);-webkit-backdrop-filter: blur(16px) saturate(180%);background-color: rgba(17, 25, 40, 0.25);border-radius: 12px;border: 1px solid rgba(255, 255, 255, 0.125);padding: 38px;filter: drop-shadow(0 30px 10px rgba(0, 0, 0, 0.125)); position: fixed; top: 50%; left: 50%;transform: translate(-50%, -50%);">
                <button onclick="document.getElementById('demo-modal').close();">x</button>
                <h1 style="text-align: center;">{{ $event->title }}</h1>
                <div
                    style=" display: flex;flex-direction: row;justify-content: space-around;align-items: center;padding: 20px;">
                    <div class="image-container" style="margin-right: 10px">
                        <img src="{{ asset('storage/images/' . $event->image) }}" alt="">
                    </div>
                    <div class="inputs-container" style="display: flex;flex-direction: column;gap:5px;">
                        <h3 style="color: #fff">{{ $event->category_name }}</h3>
                        <h3 style="color: #fff">{{ $event->price }}</h3>
                        <h3 style="color: #fff">{{ $event->location }}</h3>
                        <h3 style="color: #fff">{{ $event->places }}</h3>
                    </div>
                </div>
                <div style="width: 95%">
                    <span style="color: #fff">
                        {{ $event->description }}</span>
                </div>
                <div style="display: flex;flex-direction: row; margin: 20px;">
                    <form method="POST" action="{{ route('event.validate', $event->id) }}">
                        @csrf
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                        <div style="display: flex; flex-direction: row; margin: 20px;">
                            <button type="submit" name="valid" value="1" class="btn fill">VALIDE</button>
                            <button type="submit" name="valid" value="0" class="btn outline">INVALIDE</button>
                        </div>
                    </form>
                </div>
            </dialog> --}}

            
            <script>
                function openModal(eventId) {
                    var eventTitle = document.querySelector(`#event-${eventId} .event-title`).innerText;
                    var eventImage = document.querySelector(`#event-${eventId} .event-image`).src;
                    // Add more details as needed

                    // Populate the modal
                    document.querySelector('#demo-modal .modal-title').innerText = eventTitle;
                    document.querySelector('#demo-modal .modal-image').src = eventImage;
                    // Populate more details similarly

                    // Open the modal
                    document.getElementById('demo-modal').showModal();
                }
            </script>


        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
