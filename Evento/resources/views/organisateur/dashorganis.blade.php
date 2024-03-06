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

        .banner-image {
            background-image: url(https://images.unsplash.com/photo-1641326201918-3cafc641038e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80);
            background-position: center;
            background-size: cover;
            height: 200px;
            width: 100%;
            border-radius: 12px;
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
            background: transparent;
            color: rgba(0, 212, 255, 0.9);
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
            background: rgba(0, 212, 255, 0.9);
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
                    <a href="/home">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Events</span>
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
            <!-- ================= New Customers ================ -->
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <div class="px-3 py-4 flex justify-center">
                <div class="title" style="width: 100%; text-align: center; margin-bottom: 40px;margin-top:40px;">
                    <h2 style="margin-bottom: 40px;">Events</h2>
                    <button class="btn fill" onclick="document.getElementById('demo-modal').showModal();">Add
                        Event</button>
                </div>
                <div class="ana">
                    <div class="containe">
                        <div class="wrapper">
                            <div class="banner-image"> </div>
                            <h1> Toyota Supra</h1>
                            <p>Lorem ipsum dolor sit amet, <br />
                                consectetur adipiscing elit.</p>
                        </div>
                        <div class="button-wrapper">
                            <button class="btn outline">DETAILS</button>
                            <button class="btn fill">MODIFIER</button>
                        </div>
                    </div>
                    <div class="containe">
                        <div class="wrapper">
                            <div class="banner-image"> </div>
                            <h1> Toyota Supra</h1>
                            <p>Lorem ipsum dolor sit amet, <br />
                                consectetur adipiscing elit.</p>
                        </div>
                        <div class="button-wrapper">
                            <button class="btn outline">DETAILS</button>
                            <button class="btn fill">BUY NOW</button>
                        </div>
                    </div>
                    <div class="containe">
                        <div class="wrapper">
                            <div class="banner-image"> </div>
                            <h1> Toyota Supra</h1>
                            <p>Lorem ipsum dolor sit amet, <br />
                                consectetur adipiscing elit.</p>
                        </div>
                        <div class="button-wrapper">
                            <button class="btn outline">DETAILS</button>
                            <button class="btn fill">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
    <!-- =========== Modal =========  -->
    <dialog id="demo-modal"
    style="backdrop-filter: blur(16px) saturate(180%);-webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(17, 25, 40, 0.25);border-radius: 12px;border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 38px;filter: drop-shadow(0 30px 10px rgba(0, 0, 0, 0.125)); position: fixed; top: 50%; left: 50%;
    transform: translate(-50%, -50%);">
    <button onclick="document.getElementById('demo-modal').close();">x</button>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" placeholder="image"/>
        <input type="text" name="title" placeholder="title" />
        <textarea placeholder="Add Description" tabindex="5" name="description" required
            style="background-color: #eee;border: none;padding: 12px 15px;margin: 8px 0;width: 100%;"></textarea>
        <input type="number" name="places" placeholder="Places" />
        <input type="number" name="price" placeholder="Prix DH" />
        <input type="text" name="location" placeholder="Lieu" />
        <input type="date" name="event_date" placeholder="date finale" />
        <button type="submit" class="btn fill" style="margin-top: 20px; ">Save</button>
    </form>
</dialog>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
