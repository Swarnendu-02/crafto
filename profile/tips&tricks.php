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
</head>

<body>
    <? include_once("../includes/prf-left-menu.php"); ?>
    <div class="prf-header d-flex align-items-center justify-content-between">
        <p class="header-title">Important Tips & Tricks</p>
        <? include_once("../includes/prf-head-rt.php"); ?>
    </div>
    <div class="content-area">
        <div class="sub-header d-flex align-items-center justify-content-between mb-4">
            <div class="d-flex align-items-center">
                <h5 class="dashboard_bar mb-0">Physics</h5>
            </div>
            <div class="d-flex align-items-center justify-content-end">
                <a href="javascript:void(0);" class="tablinks active-a" data-id="physics">Videos</a>
                <a href="javascript:void(0);" class="tablinks" data-id="chemistry">Documents</a>
            </div>
        </div>
        <div class="tab-content active" data-id="physics">
            <div class="learning-grid">
                <div class="pdf-box p-0">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uQ0LGwPBC2c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="pdf-box p-0">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uQ0LGwPBC2c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="tab-content" data-id="chemistry">
            <div class="learning-grid">
                <a hrer="#" download class="pdf-box">
                    <img src="../images/pdficon.png">
                    <div style="position: relative; z-index: 1;">
                        <h4>SET AA</h4>
                    </div>
                    <i class="fas fa-download"></i>
                </a>
                <a hrer="#" download class="pdf-box">
                    <img src="../images/pdficon.png">
                    <div style="position: relative; z-index: 1;">
                        <h4>SET AA</h4>
                    </div>
                    <i class="fas fa-download"></i>
                </a>
                <a hrer="#" download class="pdf-box">
                    <img src="../images/pdficon.png">
                    <div style="position: relative; z-index: 1;">
                        <h4>SET AA</h4>
                    </div>
                    <i class="fas fa-download"></i>
                </a>
                <a hrer="#" download class="pdf-box">
                    <img src="../images/pdficon.png">
                    <div style="position: relative; z-index: 1;">
                        <h4>SET AA</h4>
                    </div>
                    <i class="fas fa-download"></i>
                </a>
            </div>
        </div>
    </div>
</body>
<script src="../js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.tablinks').click(function() {
            $(".tab-content").removeClass('active');
            $(".tab-content[data-id='" + $(this).attr('data-id') + "']").addClass("active");
            $(".tablinks").removeClass('active-a');
            $(this).addClass('active-a');
        });

    });
</script>

</html>