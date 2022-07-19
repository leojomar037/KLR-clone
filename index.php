<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLR</title>
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/utilities.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/swiper-bundle-min.css?v=<?php echo time(); ?>">
</head>

<body class="index">

    <header>
        <div class="navbar">
            <div class="container-nav flex">
                <h2 class="con-logo"> <a href="#" class="logo">Logo</a></h2>
                <nav class="navigation">
                    <ul id="menuList">
                        <li><a href="#home" class="active links">Home</a></li>
                        <li><a href="#program" class="links">Programs</a></li>
                        <li><a href="#about" class="links">About</a></li>
                        <li><a href="#teachers" class="links">Teachers</a></li>
                        <li>
                            <a href="#reviews" class="links">Reviews</a></li>
                        <li>
                            <!-- <a class="btn btn-log"  id="btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a> -->
                            <a href="login.php" class="btn btn-log"  id="btn-login" >Log In</a>
                        </li>
                        <li>
                            <a href="login.php" class="btn btn-sign">Sign Up</a>
                        </li>
                    </ul>
                </nav>
                <!-- <img src="./images/menu.jfif" alt="" class="menu-icon" onclick="togglemenu()"> -->
                <i class="fa-solid fa-bars menu-icon" onclick="togglemenu()"></i>


                <!-- <label for="check ">
                <i class="fas fa-bars menu-btn "></i>
                <i class="fas fa-times close-btn "></i>
            </label>  -->
            </div>
        </div>
    </header>
    <section class="showcase " id="home">
        <div class="container grid">
            <div class="showcase-text">
                <h1>Giving you a<br><span> KLR</span> future</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi recusandae totam hic natus fugiat reiciendis accusamus optio nulla .</p>
                <a href="# " class="btn btn-outline ">More Info</a>
            </div>

            <div class="showcase-form card ">

                <img src="images/main-img.avif " alt=" ">
                <!-- <h2>Request a Demo</h2>
                <form>
                    <div class="form-control ">
                        <input type="text " name="name " placeholder="Name " required>
                    </div>
                    <div class="form-control ">
                        <input type="text " name="company " placeholder="Company Name " required>
                    </div>
                    <div class="form-control ">
                        <input type="text " name="email " placeholder="Email " required>
                    </div>

                    <input type="submit " value="Send " class="btn btn-primary ">
                </form> -->
            </div>
        </div>
    </section>


    <!-- Programm -->
    <section class="programm" id="program">
        <h1>Our Program</h1>
        <div class="container grid-4">
            <div class="content ">
                <img src="images/img-elem.avif" alt=" ">
                <h3>Elementary</h3>
                <div class="details ">
                    <ul>
                        <li><i class="fa-solid fa-check "></i>Brings Real-world Skills</li>
                        <li><i class="fa-solid fa-check "></i>IMixture Of Offerings</li>
                        <li><i class="fa-solid fa-check "></i>Suits a Variety of Learning Styles</li>
                        <li><i class="fa-solid fa-check "></i>Comfortable Study</li>
                        <li><i class="fa-solid fa-check "></i>Self-learning</li>
                        <li><i class="fa-solid fa-check "></i>Flexibility</li>
                    </ul>
                </div>

                <button class="enroll">Enroll Now</button>
            </div>
            <div class="content">
                <img src="images/img-jr-hs.avif" alt=" ">
                <h3>Jr High School</h3>
                <div class="details ">
                    <ul>
                        <li><i class="fa-solid fa-check "></i>Brings Real-world Skills</li>
                        <li><i class="fa-solid fa-check "></i>IMixture Of Offerings</li>
                        <li><i class="fa-solid fa-check "></i>Suits a Variety of Learning Styles</li>
                        <li><i class="fa-solid fa-check "></i>Comfortable Study</li>
                        <li><i class="fa-solid fa-check "></i>Self-learning</li>
                        <li><i class="fa-solid fa-check "></i>Flexibility</li>
                    </ul>
                </div>
                <button class="enroll">Enroll Now</button>
            </div>
            <div class="content">
                <img src="images/img-hs.avif" alt="">
                <h3>Sr High School</h3>
                <div class="details ">
                    <ul>
                        <li><i class="fa-solid fa-check "></i>Brings Real-world Skills</li>
                        <li><i class="fa-solid fa-check "></i>IMixture Of Offerings</li>
                        <li><i class="fa-solid fa-check "></i>Suits a Variety of Learning Styles</li>
                        <li><i class="fa-solid fa-check "></i>Comfortable Study</li>
                        <li><i class="fa-solid fa-check "></i>Self-learning</li>
                        <li><i class="fa-solid fa-check "></i>Flexibility</li>
                    </ul>
                </div>
                <button class="enroll ">Enroll Now</button>
            </div>
            <div class="content ">
                <img src="images/img-college.avif" alt=" ">
                <h3>College</h3>
                <div class="details ">
                    <ul>
                        <li><i class="fa-solid fa-check "></i>Brings Real-world Skills</li>
                        <li><i class="fa-solid fa-check "></i>IMixture Of Offerings</li>
                        <li><i class="fa-solid fa-check "></i>Suits a Variety of Learning Styles</li>
                        <li><i class="fa-solid fa-check "></i>Comfortable Study</li>
                        <li><i class="fa-solid fa-check "></i>Self-learning</li>
                        <li><i class="fa-solid fa-check "></i>Flexibility</li>
                    </ul>
                </div>
                <button class="enroll ">Enroll Now</button>
            </div>
        </div>

    </section>

    <!-- About -->
    <section class="cloud my-2 py-2 " id="about">
        <div class="container grid ">
            <div class="text-center ">
                <h2 class="lg "> Be part of our Team</h2>

                <p class="lead my-1 "> Join our community of licensed teachers and tutors in making a difference in Philippine education by sharing their expertise while gaining extra income along the way.</p>
                <a href=" " class="btn btn-outline-2 ">Apply Now</a>
            </div>
            <img src="images/bg-img.avif " alt=" ">
        </div>
    </section>





    <!-- Teachers -->
    <section class="teachers " id="teachers">
        <div class="slide-container swiper container ">
            <h1>Our Online Tutors</h1>
            <div class="slide-content ">
                <div class="card-wrapper swiper-wrapper ">
                    <div class="slider-card swiper-slide ">
                        <div class="image-content ">
                            <span class="overlay "></span>

                            <div class="card-image ">
                                <img src="images/ken.jpg " alt=" " class="card-img ">
                            </div>
                        </div>
                        <div class="card-content ">
                            <h2 class="name "> Ken Domenick Sabella</h2>
                            <p class="description ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem veritatis nemo vero dolor </p>

                            <button class="button-slider  "> View More</button>
                        </div>
                    </div>
                    <div class="slider-card swiper-slide ">
                        <div class="image-content ">
                            <span class="overlay "></span>

                            <div class="card-image ">
                                <img src="images/ken.jpg " alt=" " class="card-img ">
                            </div>
                        </div>
                        <div class="card-content ">
                            <h2 class="name "> Ken Domenick Sabella</h2>
                            <p class="description ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem veritatis nemo vero dolor </p>

                            <button class="button-slider "> View More</button>
                        </div>
                    </div>
                    <div class="slider-card swiper-slide ">
                        <div class="image-content ">
                            <span class="overlay "></span>

                            <div class="card-image ">
                                <img src="images/ken.jpg " alt=" " class="card-img ">
                            </div>
                        </div>
                        <div class="card-content ">
                            <h2 class="name "> Ken Domenick Sabella</h2>
                            <p class="description ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem veritatis nemo vero dolor </p>

                            <button class="button-slider "> View More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn "></div>
            <div class="swiper-button-prev swiper-navBtn "></div>
            <div class="swiper-pagination "></div>
        </div>
    </section>

    <!-- Reviews -->
    <section class="reviews" id="reviews">
        <h1>What Parents Say</h1>
        <div class="wrapper container ">
            <div class="box ">
                <i class="fas fa-quote-left quote "></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid assumenda qui quod minus illum adipisci saepe est facere ex, .</p>
                <div class="rev-content ">
                    <div class="info-rev ">
                        <div class="name-rev ">Leo Reyes</div>
                        <div class="job ">Parents</div>
                        <div class="stars ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                        </div>
                    </div>
                    <div class="image-rev ">
                        <img src="images/ken.jpg " alt=" ">
                    </div>
                </div>
            </div>
            <div class="box ">
                <i class="fas fa-quote-left quote "></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid assumenda qui quod minus illum adipisci saepe est facere ex, .</p>
                <div class="rev-content ">
                    <div class="info-rev ">
                        <div class="name-rev ">Leo Reyes</div>
                        <div class="job ">Parents</div>
                        <div class="stars ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                        </div>
                    </div>
                    <div class="image-rev ">
                        <img src="images/ken.jpg " alt=" ">
                    </div>
                </div>
            </div>
            <div class="box ">
                <i class="fas fa-quote-left quote "></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid assumenda qui quod minus illum adipisci saepe est facere ex, .</p>
                <div class="rev-content ">
                    <div class="info-rev ">
                        <div class="name-rev ">Leo Reyes</div>
                        <div class="job ">Parents</div>
                        <div class="stars ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                        </div>
                    </div>
                    <div class="image-rev ">
                        <img src="images/ken.jpg " alt=" ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer py-5 ">
        <div class="container grid grid-3 ">
            <div>
                <h1>KLR Tutorials</h1>
                <p>Copyright &copy; 2022</p>
            </div>
            <nav>

                <ul>
                    <li><a href="# ">Home</a></li>
                    <li><a href="# ">Programs</a></li>
                    <li><a href="# ">About</a></li>
                    <li><a href="# ">Teachers</a></li>
                    <li><a href="# ">Reviews</a></li>
                </ul>

            </nav>
            <div class="social ">
                <a href="# "><i class="fab fa-github fa-2x "></i></a>
                <a href="# "><i class="fab fa-twitter fa-2x "></i></a>
                <a href="# "><i class="fab fa-facebook fa-2x "></i></a>
                <a href="# "><i class="fab fa-instagram fa-2x "></i></a>

            </div>
        </div>

    </footer>
</body>
<script src="js/swiper-bundle-min.js "></script>
<script src="js/index.js "></script>


<script>
    const links = document.querySelectorAll(".links");

links.forEach( function(e) {
    e.addEventListener("click", function() {
    let goToPage = e.dataset.page;
    $("#page").load(goToPage + ".php");
  });
  
})
</script>

</html>