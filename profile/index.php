<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>NEET-O-METER</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="fullPage very simple demo." />
    <meta name="keywords" content="fullpage,jquery,demo,simple" />
    <meta name="Resource-type" content="Document" />
    <link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responcive.css">
    <link href="css/owl.carousel.min.css?v=2" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.min.css?v=2" rel="stylesheet" type="text/css">
    <link href="css/odometer.css?v=2" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" />
    <script src="../js/jquery.min.js"></script>
    <script src="../js/chart.min.js"></script>
</head>

<body>
    <? include_once("../includes/prf-left-menu.php"); ?>
    <div class="prf-header d-flex align-items-center justify-content-between">
        <p class="header-title">Dashboard</p>
        <? include_once("../includes/prf-head-rt.php"); ?>
    </div>
    <div class="content-area">
        <div class="das-grid">
            <div>
                <div class="chart-grid">
                    <div class="chart-box">
                        <div class="inner-head-box pb-0">
                            <h4 class="inner-heading">Subject vs Accuracy Analytical Report</h4>
                        </div>
                        <div class="content-wrap">
                            <canvas id="myChart2" width="300" height="200"></canvas>
                        </div>
                    </div>
                    <div class="chart-box">
                        <div class="inner-head-box pb-0">
                            <h4 class="inner-heading">Time vs Subject Analytical Report</h4>
                        </div>
                        <div class="content-wrap">
                            <canvas id="myChart1" width="300" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="learning-grid g3">
                    <div class="sub-box physics">
                        <img src="../images/science.png">
                        <h3 class="mb-4">Physics</h3>
                        <div class="btn-con">
                            <a class=" m-0"><i class="fas fa-clipboard Test mr-3"></i>Generate Report</a>

                        </div>
                    </div>
                    <div class="sub-box chem">
                        <img src="../images/science.png">
                        <h3 class="mb-4">Physics</h3>
                        <div class="btn-con">
                            <a class=" m-0"><i class="fas fa-clipboard Test mr-3"></i>Generate Report</a>

                        </div>
                    </div>
                    <div class="sub-box bio">
                        <img src="../images/science.png">
                        <h3 class="mb-4">Physics</h3>
                        <div class="btn-con">
                            <a class=" m-0"><i class="fas fa-clipboard Test mr-3"></i>Generate Report</a>

                        </div>
                    </div>

                </div>
            </div>
            <aside>
                <h4>Notice Board</h4>
                <ul>
                    <li>Chapter-1: Chapter Name</li>
                    <li>Chapter-1: Chapter Name</li>
                </ul>
                <div class="text-center p-3">
                    <a class="btn btn-secondary">Read More</a>
                </div>
            </aside>
        </div>
    </div>
</body>


<script>
    var data = [{
        label: ["Physics", "Chemistry", "Mathantics"],
        backgroundColor: ['#f1453d91', '#8cc15282', '#5d50c6ab'],
        data: [20, 12, 25]
    }];

    var options = {
        tooltips: {
            enabled: false
        },
        title: {
            display: false,
            text: 'Overall Difficulty Analysis'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false,
            position: 'bottom'
        }
    };

    var ctx = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Physics", "Chemistry", "Mathantics"],
            datasets: data
        },
        options: options,
    });
</script>
<script>
    var data = [{
        label: ["Physics", "Chemistry", "Mathantics"],
        backgroundColor: ['#f1453d91', '#8cc15282', '#5d50c6ab'],
        data: [70, 50, 60]
    }];

    var options = {
        tooltips: {
            enabled: false
        },
        title: {
            display: false,
            text: 'Overall Difficulty Analysis'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false,
            position: 'bottom'
        }
    };

    var ctx = document.getElementById("myChart1").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Physics", "Chemistry", "Mathantics"],
            datasets: data
        },
        options: options,
    });
</script>

</html>