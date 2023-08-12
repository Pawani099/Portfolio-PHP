<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Pawani Rajapaksha's Portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        
    </style>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="user">
        <img src="image/img.png" alt="">
        <h3>Pawani Rajapaksha</h3>
        <p>Student of RUSL | Photographer</p>
    </div>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About Me</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact Me</a>
        <br><br>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           Login
          </button>
          
         
        
    </nav>

</header>

<!-- header section ends -->


<div id="menu-btn" class="fas fa-bars"></div>

<!-- theme toggler  -->

<div id="theme-toggler" class="fas fa-moon"></div>





<section class="home" id="home">

    <div class="content">
        <h3>Pawani Rajapaksha</h3>
        <p>I am <span class="text"></span></p>
       
        
        <a href="https://drive.google.com/file/d/1u-UjjwMBtypsgXwsPJ62hLmDzoH5km28/view?usp=share_link" class="btn">Download my CV Here</a>
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

</section>
 



<section class="about" id="about">

    <h1 class="heading"> <span>About</span> Me </h1>

    <div class="row">

        <div class="box-container">
            <div class="box">
                <h3 class="count">2</h3>
                <p>years of experience</p>
            </div>
            <div class="box">
                <h3 class="count">10</h3>
                <p>satisfied clients</p>
            </div>
            <div class="box">
                <h3 class="count">30</h3>
                <p>working hours</p>
            </div>
            <div class="box">
                <h3 class="count">20</h3>
                <p>Completed Albums</p>
            </div>
        </div>

        <div class="content">
            <h3>my name is <span>Pawani Rajapaksha</span></h3>
            <p>I am 2nd Year Student of RUSL and I am following a Photography Degree at National Photographic Intitute of Sri Lanka. I am passionate in Capturing beautiful moments and showcasing them.</p>
            <a href="#contact" class="btn">contact me</a>
        </div>

    </div>

    <div class="row">

        <div class="progress">
            <h3> web design <span>90%</span> </h3>
            <div class="bar bar-1-1"><span></span></div>
            <h3> graphic design <span>75%</span> </h3>
            <div class="bar bar-1-2"><span></span></div>
            <h3> Photography <span>90%</span> </h3>
            <div class="bar bar-1-3"><span></span></div>
            
        </div>

        <div class="progress">
            <h3> Photo Editing (Lightroom) <span>80%</span> </h3>
            <div class="bar bar-1-3"><span></span></div>
            <h3> Photo Editing (Photoshop) <span>80%</span> </h3>
            <div class="bar bar-1-3"><span></span></div>
            <h3> javascript <span>65%</span> </h3>
            <div class="bar bar-2-3"><span></span></div>
        </div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> my <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-code"></i>
            <h3>web design</h3>
            <p>I am interested in Web designing using HTML/CSS and JavaScript.</p>
        </div>

        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>I have completed some trainings under Adobe Illustrator Package and gone through some practical application of Designing artworks</p>
        </div>

        <div class="box">
            <i class="fas fa-camera"></i>
            <h3>Photography</h3>
            <p>As mo main hobby and my secondary Degree programe. I am studying to be a professional photographer by learning and applying the theories of photography</p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Social Media digital marketing</h3>
            <p>I have some experiences in managing and handeling facebook/Instagram Social media pages. I am using these platforms to showcase my previous works</p>
        </div>

        <div class="box">
            <i class="fas fa-camera"></i>
            <h3>Product Photography</h3>
            <p>Onece we need to market our own product, Product photography becomes the main keypoint of demosntrating the product</p>
        </div>

        <div class="box">
            <i class="fas fa-camera"></i>
            <h3>Lightroom/Phoroshop</h3>
            <p>I have hands on experiences of using Adobe Lightroom and Photoshop for editing, Manipulating and skin retouching as a professional editor.</p>
        </div>

    </div>

</section>

<section class="portfolio" id="portfolio">

    <h1 class="heading"> my <span>portfolio</span> </h1>
    <div class="filters">
        <button onclick="filterAll()">All</button>
        <button onclick="filterMacro()">Macro</button>
        <button onclick="filterBlackAndWhite()">B&W</button>
        
    </div>
         

    <div class="box-container">

        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM images";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="box">';
                        echo '<img src="' . $row["image_path"] . '" alt="Image">';
                        echo '<div class="content">';
                        echo '<h3>' . $row["image_text"] . '</h3>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No images found.";
                }

                $conn->close();
        ?>


    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> me </h1>

    <form action="submit.php" method="post" onsubmit="return validateForm()">
        <input type="text" placeholder="your name" name="name" id="name" class="box">
        <input type="email" placeholder="your email" name="email" id="email" class="box">
        <input type="text" placeholder="subject" name="subject" id="subject" class="box">
        <textarea name="message" id="message" class="box" placeholder="your message" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>



<div class="credits"> Designed by <span>Pawani Rajapaksha</span></div>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script>


<script>
    var typing=new Typed(".text", {
        strings: ["", "Student", "Photographer", "Graphics Designer", "Video Editior", "Web Designer"],
        typeSpeed: 120,
        backSpeed: 40,
        loop: true,
    });
 </script>

<script>
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function animateBarsOnScroll() {
        var bars = document.getElementsByClassName('bar');
        for (var i = 0; i < bars.length; i++) {
            var bar = bars[i];
            if (isElementInViewport(bar)) {
                var span = bar.querySelector('span');
                span.style.width = span.parentNode.parentNode.querySelector('span').innerText;
                span.classList.add('animated');
            }
        }
    }

    // Attach the scroll event listener
    window.addEventListener('scroll', animateBarsOnScroll);

    // Initial animation on page load
    animateBarsOnScroll();
</script>

<script>
    function animateNumberCounter() {
        var counters = document.querySelectorAll('.count');
        var speed = 50;
        var increment = 1;

        counters.forEach(function (counter) {
            var target = +counter.innerText;
            var count = 0;

            var updateCount = function () {
                if (count < target) {
                    counter.innerText = count;
                    count += increment;
                    setTimeout(updateCount, speed);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });
    }

    // Animate number counters on page load
    window.addEventListener('load', animateNumberCounter);
</script>


<script>
    function filterAll() {
        var boxes = document.getElementsByClassName("box");
        for (var i = 0; i < boxes.length; i++) {
            boxes[i].style.display = "block";
        }
    }

    function filterMacro() {
        var boxes = document.getElementsByClassName("box");
        for (var i = 0; i < boxes.length; i++) {
            if (boxes[i].querySelector("h3").innerText === "Macro") {
                boxes[i].style.display = "block";
            } else {
                boxes[i].style.display = "none";
            }
        }
    }

    function filterBlackAndWhite() {
        var boxes = document.getElementsByClassName("box");
        for (var i = 0; i < boxes.length; i++) {
            if (boxes[i].querySelector("h3").innerText.includes("B&W")) {
                boxes[i].style.display = "block";
            } else {
                boxes[i].style.display = "none";
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>