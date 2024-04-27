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
    <style>

    </style>
</head>

<body>
    <? include_once("../includes/prf-left-menu.php"); ?>
    <div class="prf-header d-flex align-items-center justify-content-between">
        <p class="header-title">Webinar Schedule</p>
        <? include_once("../includes/prf-head-rt.php"); ?>
    </div>
    <div class="content-area">
        <table class="table bg-white mb-0">
            <thead>
                <tr role="row">
                    <th>#</th>
                    <th style="width:10%;">Date
                    <th>Webinar</th>
                    <th style="width:30%;">Details</th>
                    <th>Host/Faculty</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12/12/2022</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>12/12/2022</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                    <td>Lorem</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/odometer.js"></script>
<script src="js/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script>
    AOS.init({
        easing: 'ease-in-out-sine'
    });

    $('.service-owl').owlCarousel({
        loop: true,
        margin: 60,

        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 1,
                nav: false,
            },
            1200: {
                items: 3,
                nav: true,
            },
            1500: {
                items: 4,
                nav: true,
            }
        }
    })

    $('.client-owl').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    })

    $('.banner-owl').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        margin: 0,
        nav: false,
        dots: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $('.testi-owl').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1200: {
                items: 2
            },
            1500: {
                items: 3
            }
        }
    })
    $('.tec-owl').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 6
            }
        }
    })
    $(document).ready(function() {
        $('.tablinks').click(function() {
            $(".tabcontent").removeClass('active');
            $(".tabcontent[data-id='" + $(this).attr('data-id') + "']").addClass("active");
            $(".tablinks").removeClass('active-a');
            $(this).addClass('active-a');
        });
        $('.tab-links').click(function() {
            $(".tab-content").removeClass('active');
            $(".tab-content[data-id='" + $(this).attr('data-id') + "']").addClass("active");
            $(".tab-links").removeClass('active-a');
            $(this).addClass('active-a');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.has-drop').click(function() {
            if ($(".drop-menu[data-id='" + $(this).attr('data-id') + "']").hasClass("active")) {
                $(".drop-menu").hide().removeClass('active');
                $(".has-drop").removeClass('active-a');
                $(".has-drop").removeClass('active');
            } else {
                $(".drop-menu").hide().removeClass('active');
                $(".drop-menu[data-id='" + $(this).attr('data-id') + "']").show().addClass("active");
                $(".has-drop").removeClass('active-a');
                $(this).parent().find(".has-drop").addClass('active-a');
                $(this).parent().find(".has-drop").addClass('active');
            }
        });
    });
</script>
<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>

</html>