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
            border: 2px solid #2a2185; 
            border-radius: 5px;
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
            <!-- ================= New Categories ================ -->

            <div class="px-3 py-4 flex justify-center">
                @if (session('success'))
                <div id="success-alert"
                    style="position: fixed; top: 20px; right: 20px; background-color: #28a745; color: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,.2);">
                    {{ session('success') }}
                </div>
            @endif
                <div class="title" style="width: 100%; text-align: center; margin-bottom: 40px;margin-top:40px;">
                    <h2>Categories</h2>
                    <div style="display: flex; justify-content: center; align-items: center;margin-bottom: 40px;margin-top:40px;, ,">
                        <button type="button" onclick="document.getElementById('demo-modal').showModal();"
                            class="text-sm bg-red-500 hover:bg-red-700 mb-6 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                            style="background-color: #2a2185;">Add Catégories</button>
                    </div>
                <div style="display: flex; justify-content: center;">
                    <table class="text-md bg-white shadow-md rounded mb-4 "
                        style="width : 70%;">
                        <tbody>
                            <tr class="border-b">
                                <th class="text-left p-3 px-5">Name</th>
                                <th class="text-left p-3 px-5">Modifier</th>
                                <th></th>
                            </tr>
                            @foreach ($categories as $category)
                                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                    <td class="p-3 px-5">
                                        <p>{{ $category->name }}</p>
                                    </td>

                                    <td class="p-3 px-5">
                                        <form action="{{ route('categories.update', $category->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" name="name" placeholder="{{ $category->name }}"
                                                class="text-sm bg-white rounded border focus:outline-none focus:shadow-outline"
                                                style="width: 50%;">
                                            <button type="submit"
                                                class="mr-3 bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                                Save
                                            </button>
                                        </form>
                                    </td>
                                    <td class="p-3 px-5 flex justify-end">
                                        <form action="{{ route('categories.softDelete', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
                    <!-- La Modal -->
                    <dialog id="demo-modal"
                        style="border:2px solid #2a2185 ; border-radius: 15px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); height:30%; width:40%; align-items: center; justify-content: center;">
                        <div
                            style="display: flex; justify-content: center; margin-bottom:20px; align-items: center; margin-top: 20px;">
                            <h2>Add Categorie</h2>
                        </div>
                        <!-- Formulaires ajustés pour utiliser Flexbox -->
                        <form id="update-category-form" action="/categories" method="POST"
                            style="display: flex; justify-content: center; align-items: center; width: 100%;">
                            @csrf
                            <input type="text" name="name" placeholder="Nom de la catégorie"
                                style="padding: 10px; margin-right: 10px; margin-left: 10px; flex-grow: 1;">
                            <button type="submit"
                                style="background-color: #2a2185; color: white; padding: 10px 20px;margin-right: 10px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                                Save
                            </button>
                        </form>
                        <div
                            style="display: flex; justify-content: center; width: 100%; margin-top:10px; margin-bottom:15px;">
                            <button onclick="closeModal()"
                                style="background-color: #2a2185; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                                Cancel
                            </button>
                        </div>
                    </dialog>
                <!-- =========== Scripts =========  -->

                @if (session('success'))
                    <script>
                        // Wait for 5 seconds (5000 milliseconds), then hide the success alert
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
                <script>
                    function closeModal() {
                        document.getElementById('demo-modal').style.display = 'none';
                    }
                </script>
                <script src="assets/js/main.js"></script>

                <!-- ====== ionicons ======= -->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
