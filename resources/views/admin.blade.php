<x-app-layout>
    <style>
        /* code for admin */
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap");

        * {
            padding: 0;
            margin: 0;
        }

        .admin-dashboard {
            background: #444e80;
            color: #abafc6;
            border-radius: 5px;
            padding: 10px;
            height: 390px;
        }

        .year-stats {
            white-space: nowrap;
            max-height: 270px;
            overflow: hidden;
        }

        .year-stats:hover {
            overflow-x: auto;
        }

        /* Width */
        ::-webkit-scrollbar {
            height: 20px;
            width: 100%;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #444e80;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #abafc6;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #5397d6;
        }

        .month-group {
            cursor: pointer;
            max-width: 400px;
            height: 110px;
            margin: 10px;
            display: inline-block;
        }

        .bar {
            background-color: #abafc6;
            width: 20px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .month-group:hover .bar,
        .selected .bar {
            background: #1e02d6;
        }

        .month-group:hover p,
        .selected p {
            color: #fff;
        }

        .h-25 {
            height: 25%;
        }

        .h-50 {
            height: 70%;
        }

        .h-75 {
            height: 75%;
        }

        .h-100 {
            height: 100%;
        }

        .stats-info {
            margin-top: 15px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            position: relative;
        }

        .graph-container {
            position: relative;
            display: flex;
        }

        .percent {
            display: block;
            width: 120px;
            height: 120px;
        }

        .circle {
            stroke: #915db1;
            fill: none;
            stroke-width: 4;
        }

        .circle:nth-child(2) {
            stroke: #e59f3c;
        }

        .graph-container p {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            color: #dddde7;
            text-align: center;
        }

        .info p {
            margin-bottom: 100px;
        }

        .info span {
            color: #d31717;
        }
    </style>

    <div class="admin-dashboard" class="container">
        <h1>Admin Dashboard</h1>


        <div class="graph-container">
            <canvas id="users-bar-chart" aria-label="Users Bar Chart"></canvas>
        </div>

            <div class="year-stats">
                <div class="month-group">
                    <div class="bar h-100"></div>
                    <p class="month">Jan</p>
                </div>
                <div class="month-group">
                    <div class="bar h-50"></div>
                    <p class="month">Feb</p>
                </div>
                <div class="month-group">
                    <div class="bar h-75"></div>
                    <p class="month">Mar</p>
                </div>
                <div class="month-group">
                    <div class="bar h-25"></div>
                    <p class="month">Apr</p>
                </div>
                <div class="month-group selected">
                    <div class="bar h-100"></div>
                    <p class="month">May</p>
                </div>
                <div class="month-group">
                    <div class="bar h-50"></div>
                    <p class="month">Jun</p>
                </div>
                <div class="month-group">
                    <div class="bar h-75"></div>
                    <p class="month">Jul</p>
                </div>
                <div class="month-group">
                    <div class="bar h-25"></div>
                    <p class="month">Aug</p>
                </div>
                <div class="month-group">
                    <div class="bar h-50"></div>
                    <p class="month">Sep</p>
                </div>
                <div class="month-group">
                    <div class="bar h-75"></div>
                    <p class="month">Oct</p>
                </div>
                <div class="month-group">
                    <div class="bar h-25"></div>
                    <p class="month">Nov</p>
                </div>
                <div class="month-group">
                    <div class="bar h-100"></div>
                    <p class="month">Dec</p>
                </div>
            </div>

            <div class="stats-info">
                <div class="graph-container">
                    <div class="percent">
                        <svg viewBox="0 0 36 36" class="circular-chart" aria-label="Circular Chart">
                            <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="circle" stroke-dasharray="85, 100" d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                    </div>
                    <p>Number of people </p>
                </div>
            </div>
            <div class="event-container" style="margin-left: 90% margin-top=90%">
                <h2>Event</h2>
                <input class="text">
            </div>
        </div>
    </div>
</x-app-layout>
