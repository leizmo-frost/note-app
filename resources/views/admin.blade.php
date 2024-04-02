<x-app-layout>
    <head>
        <style>
            body{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    background-color: #e6e8ed;
    color: #666666;
    font-family: "montserrat", sans-serif;
}

.materials-icon-outlined{
    vertical-align: middle;
    line-height: 1px;
}

.text-primary{
    color:#666666;
}

.text-blue{
    color: #246dec;
}

.text-green{
    color: #367952;
}

.text-orange{
    color: #f5b74f;
}

.text-weight-bold{
    font-weight: 600;
}

.grid-container {
    display: grid;
    grid-template-columns: 260px repeat(3, 1fr); /* Adjust grid-template-columns to place main container elements beside each other */
    grid-template-rows: 0.2fr 3fr;
    grid-template-areas: "sidebar header header header" "sidebar main main main";
    height: 100vh;
}

.header{
    grid-area: header;
    height: 70px;
    background-color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 0 30px 0 30px;
    box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0);
}

.menu-icon{
    display: none;
}

.menu-icon:hover{
    cursor: pointer;
}

/* CSS Adjustments */

#sidebar {
    grid-area: sidebar;
    height: 100%;
    background-color: #21232d;
    color: #fff; /* Changed text color to white for better contrast */
    overflow-y: auto;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
}

.sidebar-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

.sidebar-brand {
    margin-top: 15px;
    font-size: 20px;
    font-weight: 700;
}

.sidebar-list {
    padding: 0;
    margin-top: 15px;
    list-style-type: none;
}

.sidebar-list-item {
    padding: 15px 20px; /* Adjusted padding for better spacing */
    transition: background-color 0.3s; /* Added transition for smoother hover effect */
}

.sidebar-list-item:hover {
    background-color: #333; /* Darken background color on hover */
    cursor: pointer;
}

.sidebar-responsive{
    display: inline !important;
    position: absolute;
}

.main-container{
    display: flex;
    justify-content: center;
    grid-area: main;
    height: 100vh;
    padding: 20px 20px;
}

.main-title{
    display: flex;
    justify-content: space-between;
}

.main-title > p {
    font-size: 20px;
}

.cards {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 20px;
    margin: 20px 0;
}

.card {
    display: flex;
    flex: 1 1 0 calc(33.33% - 20px); /* Adjust card width */
    flex-direction: column;
    justify-content: space-around;
    background-color: #ffffff;
    padding: 25px;
    box-sizing: border-box;
    border: 1px solid #d2d2d3; /* Add border to each card */
    border-radius: 5px;
    box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.card:first-child{
    border-left: 7px solid #246dec;
}

.card:nth-child(2){
    border-left: 7px solid #f5b74f;
}

.card:nth-child(3){
    border-left: 7px solid #367952;
}



.card > span {
    font-size: 20px;
    font-weight: 600;
}

.card-inner{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.card-inner > p {
    font-size: 18px;
}

.card-inner > span {
    font-size: 35px;
}

.charts{
    display: grid;
    grid-template-columns: 1fr 1fr;
    overflow: auto;
    gap:20px;
}

.charts-card{
    background-color: #ffffff;
    margin-bottom: 20px;
    padding: 25px;
    box-sizing: border-box;
    -webkit-column-break-inside: avoid;
    border: 1px solid #d2d2d3;
    border-radius: 5px;
    overflow: auto;
    box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.chart-title{
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    font-weight: 600;
}

@media screen and (max-width:992px) {
    .grid-container{
        grid-template-columns: 1fr;
        grid-template-rows: 0.2fr 3fr;
        grid-template-areas: "header" "main";
    }

    #sidebar{
        display: none;
    }

    .menu-icon {
        display: inline;
    }

    .sidebar-title > span {
        display: inline;
    }
}

@media screen and (max-width:768px) {
    .main-cards{
        grid-template-columns: 1fr;
        gap: 10px;
        margin-bottom: 0;
    }

    .charts {
        grid-template-columns: 1fr;
        margin-top: 30px;
    }
}

@media screen and (max-width:576px) {
    .header-left{
        display: none;
    }
}
        </style>
        <link rel="stylesheet" href="{{ asset('public/web/style.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    </head>
    <body>
        <div class="grid-container">

            <!--header-->
            <header class="header">
                <div class="menu-icon" onclick="toggleSidebar()">
                    <span class="material-icons-outlined">menu</span>
                </div>
                <div class="header-left">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <div class="header-right">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="material-symbols-outlined">mail</span>
                    <span class="material-symbols-outlined">account_circle</span>
                </div>
            </header>
            <!--End header-->

            <!--sidebar-->
            <aside id="sidebar">
                <div class="sidebar-title">
                    <div class="sidebar-brand">
                        <span class="material-symbols-outlined">manage_accounts</span>Accounts management
                    </div>
                    <span class="material-symbols-outlined" onclick="toggleSidebar()">close</span>
                </div>

                <ul class="sidebar-list">
                    <li class="sidebar-list-item" onclick="navigateTo('dashboard')">
                        <span class="material-symbols-outlined">dashboard</span>
                        <label>Dashboard</label>
                    </li>
                    <li class="sidebar-list-item" onclick="navigateTo('list')">
                        <span class="material-symbols-outlined">list</span>
                        <label>List</label>
                    </li>
                    <li class="sidebar-list-item" onclick="navigateTo('supervisor')">
                        <span class="material-symbols-outlined">supervisor_account</span>
                        <label>Role Management</label>
                    </li>
                    <li class="sidebar-list-item" onclick="navigateTo('inbox')">
                        <span class="material-symbols-outlined">all_inbox</span>
                        <label>Notes</label>
                    </li>
                    <li class="sidebar-list-item" onclick="navigateTo('flag')">
                        <span class="material-symbols-outlined">flag</span>
                        <label>Flaged Notes</label>
                    </li>
                    <li class="sidebar-list-item" onclick="navigateTo('moderator')">
                        <span class="material-symbols-outlined">add_moderator</span>
                        <label>Content Moderator</label>
                    </li>
                    <li class="sidebar-list-item" onclick="navigateTo('monitoring')">
                        <span class="material-symbols-outlined">monitoring</span>
                        <label>Analytics</label>
                    </li>
                    <li class="sidebar-list-item" onclick="navigateTo('settings')">
                        <span class="material-symbols-outlined">settings</span>
                        <label>Settings</label>
                    </li>
                </ul>
            </aside>
            <!--End sidebar-->

            <!--main-->
            <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold">DASHBOARD</p>
                </div>
        <d class="row">
            <div class="main-cards">
                <div class="card">
                        <div class="card-inner">
                            <p class="text-primary">USERS</p>
                            <span class="material-symbols-outlined text-blue">list</span>
                        </div>
                        <span class="text-primary font-weight-bold">200</span>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <p class="text-primary">NOTES</p>
                        <span class="material-symbols-outlined text-blue">all_inbox</span>
                    </div>
                    <span class="text-primary font-weight-bold">2000</span>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <p class="text-primary">Flaged Notes</p>
                        <span class="material-symbols-outlined text-blue">flag</span>
                    </div>
                    <span class="text-primary font-weight-bold">100</span>
                </div>
            </div>

                    <div class="charts">
                        <div class="charts-card">
                            <p class="chart-title">Top 5 Users</p>
                            <div id="bar-chart"></div>
                        </div>

                        <div class="charts-card">
                            <p class="chart-title">Resent Sign up</p>
                            <div id="area-chart"></div>
                        </div>
                    </div>

            </main>
            <!--End main-->

        </div>
        <!--script-->
        <script>
            // JavaScript Adjustments

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function toggleSidebar() {
    if (sidebarOpen) {
        sidebar.classList.remove("sidebar-responsive"); // Fixed typo here (classList)
        sidebarOpen = false;
    } else {
        sidebar.classList.add("sidebar-responsive"); // Fixed typo here (classList)
        sidebarOpen = true;
    }
}

function navigateTo(page) {
    // Handle navigation based on the clicked sidebar item
    console.log("Navigating to " + page);
    // Add your navigation logic here
}

var options = {
    series: [{
    data: [10, 20, 13]
}],
    chart: {
    type: 'bar',
    height: 350,
    toolbar: {
        show:false
    },
},
colors: [
    "#246dec",
    "#cc3c43",
    "#367952",
    "#f5b74f",
    "#4f35al",
],
plotOptions: {
    bar: {
    borderRadius: 4,
    horizontal: false,
    columnwidth:'40%',
    }
},
dataLabels: {
    enabled: false
},
xaxis: {
    categories: ["private", "normal", "lists"],
},
yaxis: {
    title:{
        text:"count"
    }
}
};

var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
chart.render();


var options = {
    series: [{
    name: 'users',
    data: [44, 55, 47, 33]
},
],
    chart: {
    height: 350,
    type: 'area',
    toolbar: {
        show:false,
    },
},
colors: ["#4f35a1", "#246dec"],
dataLabels:{
    enabled:false
},
stroke: {
    curve: 'smooth'
},
fill: {
    type:'solid',
    opacity: [0.35, 1],
},
labels: ['Jan', 'Feb','Mar','Apr','May','Jun','jul','Aug','Sep','Oct','Nov', 'Dec'],
markers: {
    size: 0
},
yaxis: [
    {
    title: {
        text: 'items checked',
    },
    },
    {
    opposite: true,
    title: {
        text: 'days of the month',
    },
    },
],
tooltip: {
    shared: true,
    intersect: false,
}
};

var chart = new ApexCharts(document.querySelector("#area-chart"), options);
chart.render();
        </script>
        <!--ApexCharts-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.48.0/apexcharts.min.js"></script>
        <!--custom js-->
        <script src="{{ asset('public/web/script.js')}}"></script>
    </body>

</x-app-layout>
