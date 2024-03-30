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