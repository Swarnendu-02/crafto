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
    <link rel="icon" type="image/x-icon" href="https://www.neet-o-meter.com/vclasses/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://www.neet-o-meter.com/vclasses/bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="https://www.neet-o-meter.com/vclasses/assets/css/profile.css">
    <link rel="stylesheet" type="text/css" href="https://www.neet-o-meter.com/vclasses/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://www.neet-o-meter.com/vclasses/css/responcive.css">
    <link href="https://www.neet-o-meter.com/vclasses/css/owl.carousel.min.css?v=2" rel="stylesheet" type="text/css">
    <link href="https://www.neet-o-meter.com/vclasses/css/owl.theme.default.min.css?v=2" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" />
    <script src="https://www.neet-o-meter.com/vclasses/js/jquery.min.js"></script>
    <!--<script src="https://www.neet-o-meter.com/vclasses/js/chart.min.js"></script>-->

    <script src="https://www.neet-o-meter.com/vclasses/js/owl.carousel.js"></script>
    <script src="https://www.neet-o-meter.com/vclasses/js/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>

    <script src="https://www.neet-o-meter.com/vclasses/js/sweetalert2@8.js"></script>
    <script>
        function sweet_toaster(type, title)

        {

            if (typeof type == "undefined")

            {

                type = "error";

            }

            if (typeof title == "undefined")

            {

                title = "Something went wrong. Please try again later.";

            }



            //    alert(title);

            var toastArr = {

                toast: true,

                position: "middle-center",

                showConfirmButton: false,

                showCloseButton: true,

                //customClass:'container-class'

            };



            if (type == "success")

            {

                toastArr['timer'] = 5000;

            } else

            {

                toastArr['timer'] = 5000;

            }



            var Toast = Swal.mixin(toastArr);



            Toast.fire({

                type: type,

                title: title

            });

        }
    </script>
</head>

<body>
    <style>
        @media print {

            #backLink #printPageButton {
                display: none !important;
            }
        }
    </style>
    <header class="container-fluid" style="height: 15vh;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-9 col-md-3" style="display: flex;align-items: center;">
                    <img src="https://www.neet-o-meter.com/vclasses/images/logo.png" class="logo">
                </div>
                <div class="menu-box col-3 col-md-9 d-flex align-items-center justify-content-end" id="collapsemenu">

                    <nav class="navigation" id="navigationmenu">

                        <ul>
                            <li class="d-md-block"><a href="https://www.neet-o-meter.com/vclasses/profile/" id="backLink"><span class="mr-3"><i class="fas fa-tachometer-alt"></i></span></a></li>
                            <li class="d-none d-md-block"><a href="https://www.neet-o-meter.com/vclasses/profile/" id="backLink"><span class="mr-3"><i class="fas fa-long-arrow-alt-left"></i></span>Back to Dashboard</a></li>
                            <li class="d-none d-md-block"><a href="javascript:void(0);" class="main-btn-red" onclick="window.print()" id="printPageButton"><span class="mr-3"><i class="fas fa-print"></i></span>Print</a></li>

                            <!--                        <li><a href="https://www.neet-o-meter.com/vclasses/profile/report.php" class="main-btn-red" ><span class="mr-3"><i class="fas fa-download"></i></span>Download</a></li>-->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <style>
            @media print {
                .timeDiv {
                    background: #0E1E2A !important;
                }

                #printPageButton {
                    display: none !important;
                }

                #backLink {
                    display: none !important;
                }

                .timeTitle {
                    color: #0E1E2A !important;
                }

                .timeDes {
                    color: #0E1E2A !important;
                }

                .timeData {
                    color: #0E1E2A !important;
                }

                .attemptTitle {
                    color: #0E1E2A !important;
                }

                .attemptDes {
                    color: #0E1E2A !important;
                }

                .attemptData {
                    color: #0E1E2A !important;
                }

                .attemptList {
                    color: #0E1E2A !important;
                }
            }
        </style>
    </header>
    <div class="question_paper content-area" id="resultDiv" style="    height: auto;
    width: 100%;
    position: relative;
    left: 0;
    top: 0;
    padding: 0;
    background: transparent;">
        <div class="container-fluid banner position-relative h-auto py-6">
            <img src="images/content-styled-image-new.png" class="banner-bk">
            <div class="container position-relative h-100" style="z-index: 1;">
                <div class="row align-items-center h-100">
                    <div class="col-12 col-md-6">
                        <div class="main-heaing">
                            <h2>NEET-O-METER<br>TEST ANALYSIS REPORT<br>BIOLOGY</h2>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                      
                            <div class="chart-box col-12">
                                <div id="canvas-holder" style="width:100%">
                                    <div id='chart1'></div>
                                </div>
                                <div class="text-center mt-2">
                                    <a class="btn btn-info">Performance Index: <span id="totalPerformance"></span></a>
                                </div>
                                <div class="text-center mt-2">
                                    <a class="btn btn-info">Expected NEET Score: <span id="NEETScore"></span></a>
                                </div>
                                <div class="text-center mt-2">
                                    <a class="btn btn-secondary" href="https://www.neet-o-meter.com/vclasses/profile/performance/all">Generate Report <b>(OVERALL)</b></a>
                                </div>
                            </div>

                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-6">
        <div class="container">
            <div class="row">
                <div class="col-12 main-heaing">
                    <h2 class="text-center">Performance Report</h2>
                </div>
                <table class="table table-bordered bg-white mb-5 d-none d-md-table">
                    <thead>
                        <tr role="row">
                            <th>Total Questions</th>
                            <th>Correct Attempt</th>
                            <th>Incorrect Attempt</th>
                            <th>Un-Attempted</th>
                            <th>Performance Index</th>
                            <th>Score</th>
                            <th>Avg Time-Correct</th>
                            <th>Avg Time-Incorrect</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td>7</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>14</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container-fluid py-6 position-relative service-main-wrap timeDiv">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 main-heaing">
                    <h2 class="text-white text-center timeTitle">Detailed Report
                    </h2>
                </div>
                <div class="col-12 ">
                    <table class="table table-bordered text-white mb-0 timeData d-none d-md-table">
                        <thead>
                            <tr role="row">
                                <th>Topic</th>
                                <th>Level</th>
                                <th>Type</th>
                                <th>Total Questions</th>
                                <th>Correct Questions</th>
                                <th>Incorrect Questions</th>
                                <th>Performance Index</th>
                                <th>Avg Time Correct</th>
                                <th>Avg Time Incorrect</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="6">Top-1</td>
                                <td rowspan="3">L1</td>
                                <td>Theory</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Analytics</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td rowspan="3">L2</td>
                                <td>Theory</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Analytics</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td rowspan="6">Top-2</td>
                                <td rowspan="3">L1</td>
                                <td>Theory</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Analytics</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td rowspan="3">L2</td>
                                <td>Theory</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Analytics</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://www.neet-o-meter.com/vclasses/profile/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
    <script nonce="undefined" src="https://cdn.zingchart.com/zingchart.min.js"></script>

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
</body>

</html>