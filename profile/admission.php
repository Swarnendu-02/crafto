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
        <p class="header-title">Admission & Counseling Support</p>
        <? include_once("../includes/prf-head-rt.php"); ?>
    </div>
    <div class="content-area">
        <div class="col-6 offset-3 getfrm">
            <form id="contactForm" class="row m-0 p-0" action="contact_message_process.php" method="POST">
                <div class="col-12 form-group ">
                    <div class="col-12 input-from-group rounded">
                        <label class="form-label">NEET Application No:</label>
                        <input type="text" class="form-control" id="cname" name="cname">
                    </div>
                </div>
                <div class="col-12 form-group ">
                    <div class="col-12 input-from-group rounded">
                        <label class="form-label">NEET Roll No:</label>
                        <input type="text" class="form-control" id="cemail" name="cemail">
                    </div>
                </div>
                <div class="col-12 form-group ">
                    <div class="col-12 input-from-group rouned">
                        <label class="form-label">Date of Birth:</label>
                        <input type="date" class="form-control" id="cphone" name="cphone">
                    </div>
                </div>
                <div class="col-12 form-group ">
                    <div class="col-12 input-from-group ">
                        <label class="form-label">Upload NEET Admit Card</label>
                        <div class="input-group">
                            <div class="form-file">
                                <input type="file" class="form-control">
                            </div>
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 form-group ">
                    <div class="col-12 input-from-group ">
                        <label class="form-label">Upload NEET Score Card</label>
                        <div class="input-group">
                            <div class="form-file">
                                <input type="file" class="form-control">
                            </div>
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-0 form-group text-center  mt-4 mt-md-0">
                    <a type="submit" class="btn btn-secondary px-5 py-2 mt-4">Send</a>
                </div>
            </form>
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