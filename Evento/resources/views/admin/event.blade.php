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
        .image-container {
    display: flex;
    justify-content: center; 
    align-items: center; 
    margin: 20px; 
  }

  .image-container img {
    border-radius: 10px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    transition: transform 0.3s ease-in-out; 
    max-width: 100%; 
    height: 40%;
  }

  .image-container img:hover {
    transform: scale(1.05); 
  }
        .containe {
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .card {
            margin: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 300px;
        }

        .card-header img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            height: 180px;
        }

        .tag {
            border: #000000 1px solid;
            border-radius: 50px;
            font-size: 12px;
            margin: 5px;
            color: #0a0909;
            padding: 5px 10px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .card-body p {
            font-size: 13px;
            margin: 0 0 40px;
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
                <div class="title" style="width: 100%; text-align: center; margin-bottom: 40px;margin-top:40px;">
                    <h2>Les events</h2>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg"
                            alt="rover" />
                    </div>
                    <div class="card-body">
                        <span class="tag tag-teal" style="margin-bottom: 20px; margin-top : 20px;">Technology </span>
                        <h4 style="margin-bottom: 20px;">
                            Why is the Tesla Cybertruck designed the way it
                            is?
                        </h4>
                        <button type="button" onclick="document.getElementById('demo-modal').showModal();" style="margin-top:10px; margin-bottom:15px; background-color: #2a2185; color: white; 
                        padding: 10px 20px;
                        border: none; 
                        border-radius: 5px;
                        cursor: pointer; 
                        transition: background-color 0.3s;">details</button>

                    </div>
<!-- La Modal -->
<dialog id="demo-modal" style="border:2px solid #2a2185 ; border-radius: 15px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); height:50%; width:70%; align-items: center; justify-content: center;">
    <div  style="display: flex;justify-content: center; align-items: center;margin-top:20px;">
    <h2>khawla</h2>
</div>
    <div class="image-container" style="text-align: center;">
        <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg" alt="">
    </div>
    <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
    <h3>les places :</h3> <h4>22</h4>
</div>
<p style="text-align: justify;margin-top:10px; margin-bottom:10px; margin-left:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga et qui reprehenderit, asperiores corrupti nisi tempore aspernatur laborum voluptatem mollitia doloribus dolore minus iusto odio deserunt, deleniti, distinctio commodi.</p>

    <button onclick="document.getElementById('demo-modal').close();"
    style="margin-top:10px; margin-bottom:15px;margin-left:20px; background-color: #2a2185; color: white; 
    padding: 10px 20px;
    border: none; 
    border-radius: 5px;
    cursor: pointer; 
    transition: background-color 0.3s;">
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
