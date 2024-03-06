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
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background-color: #f8f9fa;
            text-align: left;
            padding: 12px;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #eaeaea;
        }

        input,
        select {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
        }

        button {
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            opacity: 0.8;
        }

        .bg-blue-500 {
            background-color: #007bff;
            color: white;
        }

        .bg-red-500 {
            background-color: #dc3545;
            color: white;
        }

        tr:hover {
            background-color: #f8f9fa;
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

            <div class="px-3 py-4 flex justify-center">
                <div class="title" style="width: 100%; text-align: center; margin-bottom: 40px;margin-top:40px;">
                    <h2>Events</h2>
                </div>

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
