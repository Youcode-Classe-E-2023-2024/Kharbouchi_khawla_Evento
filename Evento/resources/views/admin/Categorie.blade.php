<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/category.css">

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

            <!-- ================= New Categories ================ -->
            <div class="containe">
                <div class="title" style="width: 100%; text-align: center; margin-bottom: 40px;margin-top:40px;">
                    <h2>Les Categories</h2>
                </div>

                <main>
                    <form id="form" autocomplete="off">
                        <p class="alert"></p>
                        <h3 class="title">Category</h3>
                        <div class="control">
                            <input type="text" id="entry" placeholder="Add Category">
                            <button type="submit" class="btn submit-btn">Submit</button>
                            <button type="button" class="btn cancel-btn ">Cancel</button>
                        </div>
                    </form>

                    <ul id="todo-list" class="list-container">
                        <!--  <li class="list-item">
                            <p class="text">Lorem ipsum dolor sit.</p>
                            <i class='bx bxs-edit bx-sm'></i>
                            <i class='bx bx-check bx-sm'></i>
                            <i class='bx bxs-trash bx-sm'></i>
                        </li> -->
                    </ul>
                    <button class="btn clear-btn d-none">Clear Items</button>
                </main>
            </div>
        </div>
        <script>
            //Dom manipulation
            const entry = document.getElementById('entry')
            const form = document.getElementById('form')
            const ul = document.getElementById('todo-list')
            const alertP = document.querySelector('.alert')

            const clearBtn = document.querySelector('.clear-btn')
            const submitBtn = document.querySelector('.submit-btn')
            const cancelBtn = document.querySelector('.cancel-btn')

            //LocalStorage Key
            let LSkey = 'items';
            //Edit points
            let editFlag = false
            let editElement; // an HTML element initially undefined
            let editID; // same idea as above to pass the ID of the selected LS item.

            // General Attached Events
            window.addEventListener('DOMContentLoaded', setupItems) //Load content from LS
            form.addEventListener("submit", addItem); // submit form
            clearBtn.addEventListener('click', clearItems); // clear all
            cancelBtn.addEventListener('click', setBackToDefault); //cancel Edit

            function addItem(e) {
                e.preventDefault()
                let val = entry.value;
                let id = new Date().getTime().toString(); //for LS

                if (val && !editFlag) {
                    // !editFlag means I am creating a new brand Item NO editing.
                    createLIS(val, id)
                    displayAlert('A new item has been added!', 'alert-success')
                    clearBtn.classList.remove('d-none')
                    //ads to LS
                    addToLS(val, id)
                } else if (val && editFlag) {
                    editElement.innerText = val
                    displayAlert("value changed", "alert-success");
                    //edit the LS
                    editLS(val, editID)
                    setBackToDefault()
                } else {
                    displayAlert('No empty values!', 'alert-danger')
                }
                //clean input
                entry.value = null
            }

            function createLIS(val, id) {
                const li = document.createElement('li');
                li.className = 'list-item';
                li.setAttribute('data-id', id); //LS ID
                li.innerHTML = `
             <p class="text">${val}</p>
              <i class='bx bxs-edit bx-sm'></i>
               <i class='bx bx-check bx-sm'></i>
             <i class='bx bxs-trash bx-sm'></i>`;

                //icons listeners
                li.querySelector('.bx.bxs-edit').addEventListener('click', editItem)
                li.querySelector('.bx.bx-check').addEventListener('click', checkItem)
                li.querySelector('.bx.bxs-trash').addEventListener('click', deleteItem)

                ul.append(li)
            }

            //Icons functions
            function editItem() {
                let pText = this.previousElementSibling //p.text HTML element
                // Now pass this element to be global with
                editElement = pText;
                // text value to the input
                entry.value = pText.innerText
                // editFLag for the submit actions
                editFlag = true
                //LS ID to make it "global"
                editID = this.parentElement.dataset.id
                // hide all icons
                ul.querySelectorAll('.bx').forEach(icon => {
                    icon.classList.toggle('v-none')
                });
                cancelBtn.classList.toggle('d-none');
                submitBtn.innerText = 'Edit'
                //editing mode - remove Clear items button
                clearBtn.classList.add('d-none');
            }

            function checkItem() {
                // this = icon itself
                this.parentElement.classList.toggle('liChecked')
            }

            function deleteItem() {
                let id = this.parentElement.dataset.id // LS ID
                ul.removeChild(this.parentElement)
                displayAlert('one item was removed!', 'alert-danger')
                //if there is no more childs - remove the clear items btn
                if (ul.children.length === 0) {
                    clearBtn.classList.add('d-none')
                }
                //LS
                removeFromLS(id)
            }

            //other functions
            function displayAlert(msg, styles) {
                alertP.innerText = msg
                alertP.classList.add(styles)
                setTimeout(() => {
                    alertP.innerText = '';
                    alertP.classList.remove(styles)
                }, 1500)
            }

            function clearItems() {
                ul.innerHTML = null
                displayAlert('All elementes were removed!', 'alert-danger')
                clearBtn.classList.add('d-none')
                //LS
                localStorage.clear();
            }

            function setBackToDefault() {
                entry.value = null;
                editFlag = false;
                editElement = undefined;
                editID = undefined; // LS edit and delete
                submitBtn.innerText = 'Submit';
                cancelBtn.classList.add('d-none');

                clearBtn.classList.remove('d-none')
                ul.querySelectorAll('.bx').forEach(icon => {
                    icon.classList.toggle('v-none')
                });
            }

            // LocalStorage Functions
            function addToLS(val, id) {
                let obj = {
                    id,
                    val
                }
                let items = getLS()
                items.push(obj)
                localStorage.setItem(LSkey, JSON.stringify(items))
            }

            function getLS() {
                return localStorage.getItem(LSkey) ?
                    JSON.parse(localStorage.getItem(LSkey)) : []
            }

            function removeFromLS(id) {
                let items = getLS()
                items = items.filter(item => item.id !== id)
                //update LS
                localStorage.setItem(LSkey, JSON.stringify(items))
                //if there is no items left, remove the LS
                if (items.length === 0) {
                    localStorage.removeItem(LSkey)
                }
            }

            function editLS(val, editID) {
                let items = getLS()
                items = items.map(item => {
                    if (item.id === editID) item.val = val
                    return item
                })
                //update LS
                localStorage.setItem(LSkey, JSON.stringify(items))
            }

            function setupItems() {
                let items = getLS()
                if (items.length > 0) {
                    items.forEach(item => {
                        createLIS(item.val, item.id)
                    })
                    clearBtn.classList.remove('d-none')
                }
            }
        </script>

        <!-- =========== Scripts =========  -->
        <script src="assets/js/main.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
