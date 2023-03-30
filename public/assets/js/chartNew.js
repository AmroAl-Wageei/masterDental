//Prouduct Chart

const dataProduct = {
    labels: ["All User", "Admin", "Users"],
    datasets: [
        {
            label: "",
            data: [10, 50, 30],
            backgroundColor: [
                "rgba(255, 26, 104, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 206, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(0, 0, 0, 0.2)",
            ],
            borderColor: [
                "rgba(255, 26, 104, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)",
                "rgba(0, 0, 0, 1)",
            ],
            borderWidth: 1,
        },
    ],
};

// config
const configProduct = {
    type: "doughnut",
    data: dataProduct,
};

// render init block
const ProductChart = new Chart(
    document.getElementById("ProductChart"),
    configProduct
);

//   00000000000000000000000000000000000000000000000000000000000

const data = {
    labels: ["Sad", "Needliness", "Optimism", "Happy", "Rejection"],
    datasets: [
        {
            label: "Weekly Sales",
            data: [8, 9, 8, 40, 8],
            backgroundColor: [
                "rgba(255, 26, 104, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 206, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(0, 0, 0, 0.2)",
            ],
            borderColor: [
                "rgba(255, 26, 104, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)",
                "rgba(0, 0, 0, 1)",
            ],
            borderWidth: 1,
        },
    ],
};

// config
const config = {
    type: "bar",
    data,
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
};

// render init block
const LineChart = new Chart(document.getElementById("LineChart"), config);

// Instantly assign Chart.js version
const chartVersion = document.getElementById("chartVersion");
chartVersion.innerText = Chart.version;
