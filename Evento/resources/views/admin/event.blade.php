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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Lieu</th>
                                    <th>Validation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;"><img
                                            src="https://drive.google.com/thumbnail?id=1qw3KUJnYgvnJHQP-yY13u_rXrJO8ZbL_"
                                            onclick="document.getElementById('demo-modal').showModal();" /></td>
                                    <td style="text-align: center;">Rakhi Gupta</td>
                                    <td style="text-align: center;">rakhigupta@gmail.com</td>
                                    <td style="text-align: center;"><button>Validé</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- La Modal -->
            <dialog id="demo-modal"
        style="border:2px solid #2a2185 ; border-radius: 15px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); height:50%; width:50%; align-items: center; justify-content: center;">
        <button onclick="document.getElementById('demo-modal').close();">x</button>
    <div class="contenedor" style="display:flex; flex-grow:1; padding: 20px; position: relative;">
        <div class="img">
            <img src="#_" />
        </div>
        <div class="contenido">
            <h1>Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate turpis ac ex lacinia eleifend...</p>
            <h3>400DH / 12 PLACES</h3>
            <h3>Lieu : fhgjlkm</h3>
            <div class="buttons-container" style="position: absolute;margin-bottom:15px; bottom: 20px; right: 20px; display: flex; flex-direction: row; align-items: center; justify-content: start;">
                <button style="margin-right: 10px; margin-bottom: 10px; background-color: #1be608; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Validé</button>
                <button style="margin-bottom: 10px;margin-right: 10px;  background-color: #e81919; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Invalidé</button>
            </div>
        </div>
    </div>
</dialog>
            

        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
