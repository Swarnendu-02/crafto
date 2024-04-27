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
    <div class="test-header">
        <p class="test-header-title">Test Name</p>
    </div>
    <div class="q-box">
        <div class="mySlides">
            <div class="numbertext">Question 1 <span>/ 8</span></div>
            <h3>
                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
            </h3>
            <div class="ans-box">
                <label class="contain"><span class="slno">A.</span><span class="ans">Answer</span>
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="contain"><span class="slno">B.</span><span class="ans">Answer</span>
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="contain"><span class="slno">C.</span><span class="ans">Answer</span>
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="contain"><span class="slno">D.</span><span class="ans">Answer</span>
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>

        <div class="mySlides">
            <div class="numbertext">Question 2 <span>/ 8</span></div>
            <img src="img_snow_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">Question 3 <span>/ 8</span></div>
            <img src="img_mountains_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">Question 4 <span>/ 8</span></div>
            <img src="img_lights_wide.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">Question 5 <span>/ 8</span></div>
            <img src="img_nature_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">Question 6 <span>/ 8</span></div>
            <img src="img_snow_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">Question 7 <span>/ 8</span></div>
            <img src="img_mountains_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">Question 8 <span>/ 8</span></div>
            <img src="img_lights_wide.jpg" style="width:100%">
        </div>
    </div>

    <div class="q-ft d-flex align-items-center justify-content-between">
        <div class="q-ft-left d-flex align-items-center">
            <button class="btn btn-rounded btn-danger">Mark As Review</button>
            <div class="d-flex align-items-center">
                <a class="prev" onclick="plusSlides(-1)">Previous</a>
                <a class="next " onclick="plusSlides(1)">Next</a>
            </div>
        </div>
        <button class="btn btn-rounded btn-success">Submit Test</button>
    </div>


    <div class="q-indi">
        <div class="d-flex align-items-center"><span class="current"> </span><span>Current</span></div>
        <div class="d-flex align-items-center"><span class="answered"> </span><span>Answered</span></div>
        <div class="d-flex align-items-center"><span class="not-answered"> </span><span>Not Answered</span></div>
        <div class="d-flex align-items-center"><span class="mark-as-review"> </span><span>Mark As Review</span></div>
        <div class="d-flex align-items-center"><span> </span><span>Not Visit</span></div>
    </div>
    <div class="time-box">
        Time Left

    </div>
    <div class="q-number">
        <div>
            <h5>Section 1</h5>
            <div class="q-number-wrap">
                <div class="column">
                    <a class="demo" onclick="currentSlide(1)">1</a>
                </div>
                <div class="column">
                    <a class="demo" onclick="currentSlide(2)">2</a>
                </div>
                <div class="column">
                    <a class="demo not-answered" onclick="currentSlide(3)">3</a>
                </div>
                <div class="column">
                    <a class="demo" onclick="currentSlide(4)">4</a>
                </div>
            </div>
        </div>
        <div>
            <h5>Section 1</h5>
            <div class="q-number-wrap">
                <div class="column">
                    <a class="demo" onclick="currentSlide(5)">1</a>
                </div>
                <div class="column">
                    <a class="demo mark-as-review" onclick="currentSlide(6)">2</a>
                </div>
                <div class="column">
                    <a class="demo" onclick="currentSlide(7)">3</a>
                </div>
                <div class="column">
                    <a class="demo answered" onclick="currentSlide(8)">4</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/jquery.min.js"></script>
<script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace("  current", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += "  current";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
<script>
    var cw = $('.q-number-wrap .column').width();
    $('.q-number-wrap .column').css({
        'height': cw + 'px'
    });
</script>

</html>