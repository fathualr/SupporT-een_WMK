    <!-- data diagram -->
    <div class="max-w-lg w-full flex flex-col rounded-2xl bg-white bg-clip-border text-gray-700 shadow-lg mb-5">
        <div class="w-full">
            <div id="bar-chart">
            </div>
        </div>
    </div>
    <!-- data diagram -->

<!-- chart js -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    const chartConfig = {
        series: [
            {
                name: "Sales",
                data: [0, 0.1, 1, 0.8, 0.4, 0.5, 1],
            },
        ],
        chart: {
            type: "bar",
            height: 240,
            toolbar: {
                show: false,
            },
        },
        title: {
            show: "",
        },
        dataLabels: {
            enabled: false,
        },
        colors: ["#298EA6"],
        plotOptions: {
            bar: {
                columnWidth: "40%",
                borderRadius: 2,
            },
        },
        xaxis: {
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
            labels: {
                style: {
                    colors: "#616161",
                    fontSize: "12px",
                    fontFamily: "inherit",
                    fontWeight: 400,
                },
            },
            categories: [
                "Marah",
                "Jijik",
                "Takut",
                "Senang",
                "Netral",
                "Sedih",
                "Terkejut",
            ],
        },
        yaxis: {
            labels: {
                style: {
                    colors: "#616161",
                    fontSize: "12px",
                    fontFamily: "inherit",
                    fontWeight: 400,
                },
            },
        },
        grid: {
            show: true,
            borderColor: "#dddddd",
            strokeDashArray: 5,
            xaxis: {
                lines: {
                    show: true,
                },
            },
            padding: {
                top: 5,
                right: 20,
            },
        },
        fill: {
            opacity: 0.8,
        },
        tooltip: {
            theme: "dark",
        },
    };

    const chart = new ApexCharts(document.querySelector("#bar-chart"), chartConfig);

    chart.render();
</script>
<!-- chart js -->
