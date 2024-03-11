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
            border: 2px solid #2a2185;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            border-bottom: 2px solid #2a2185;
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
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
            @if (session('success'))
            <div id="success-alert"
                style="position: fixed; top: 20px; right: 20px; background-color: #28a745; color: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,.2);">
                {{ session('success') }}
            </div>
        @endif

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                            <div class="numbers">45</div>
                       
                        <div class="cardName">Clients</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Organisateur</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">50</div>

                        <div class="cardName">Categories</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="settings-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Events</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================= New Customers ================ -->

            <div class="px-3 py-4 flex justify-center">
                <div class="title" style="width: 100%; text-align: center; margin-bottom: 40px;margin-top:40px;">
                    <h2>Clients</h2>
                </div>
                <div style="display: flex; justify-content: center;">
                    <table class=" text-md bg-white shadow-md rounded mb-4" style="width : 90%;">
                        <tbody>
                            <tr class="border-b">
                                <th class="text-left p-3 px-5">Name</th>
                                <th class="text-left p-3 px-5">Email</th>
                                <th class="text-left p-3 px-5">Role</th>
                                <th></th>
                            </tr>
                            @foreach ($clients as $client)
                                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                    <td class="p-3 px-5">
                                        <p>{{ $client->name }}</p>
                                    </td>
                                    <td class="p-3 px-5">
                                        <p>{{ $client->email }}</p>
                                    </td>
                                    <td class="p-3 px-5">
                                        <div style="display: flex; align-items: center;">
                                            <form action="{{ route('clients.updateRole', $client->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <select name="role_id" class="bg-transparent" style="margin-right: 10px;">
                                                    <option value="">Sélectionnez un rôle</option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}" @if(optional($client->role)->id == $role->id) selected @endif>
                                                            {{ $role->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div>
                                                    <button type="submit"
                                                            class="text-sm save-button focus:outline-none focus:shadow-outline"
                                                            style="background: #2a2185; color: #ffff;">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="p-3 px-5 flex justify-end">
                                        <div>
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>

        </div>


        @if (session('success'))
        <script>
            // Wait for 3 seconds (3000 milliseconds), then hide the success alert
            setTimeout(function() {
                var successAlert = document.getElementById('success-alert');
                if (successAlert.style.opacity !== "0") {
                    successAlert.style.transition = "opacity 0.3s linear";
                    successAlert.style.opacity = "0";
                    setTimeout(function() {
                        successAlert.remove();
                    }, 300); // Wait for the opacity transition, then remove the element
                }
            }, 3000);
        </script>
    @endif
        <!-- =========== Scripts =========  -->
        <script src="assets/js/main.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
