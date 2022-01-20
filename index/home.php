<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG SHEET SYSTEMS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">LOG SHEET <span></span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">HOME</a></li>
                <li><a href="#about" class="menu-btn">ABOUT US</a></li>
                <li><a href="#contact" class="menu-btn">CONTACT US</a></li>
				<li><a href="../index.php" class="menu-btn">LOGIN</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <!--<div class="text-1">Apartments</div> -->
                <div class="text-2">Fill up your log sheet.</div>
                <div class="text-3"><span class="typing"></span></div>
                
            </div>
          </div>
      </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Us</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/em.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">LOG SHEET SYSTEM<span> </span></div>
					<div class="text">vision<span> </span></div>
                    <p>Our vision is to .....</p>
                   
				    <div class="text">Mission<span> </span></div>
					<p>Our mission is to......  </p>
                </div>
            </div>
        </div>
    </section>

      
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>To contact us use the contact details below or fill out the form below:</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">LOG SHEET SYSTEMS</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">14 Diederich Street, Southern Storm Properties, Witbank, 1035</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">thandi@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message Us</div>
                    <form class="contact-form" action="message.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="fullname" class="fullname" placeholder="Name">
                            </div>
                            <div class="field email">
                                <input type="text" name="email" class="email-input" placeholder="Email">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" class="subject" placeholder="Subject">
                        </div>
                        <div class="field textarea">
                            <textarea name="message" class="message" cols="30" rows="10" placeholder="Message.."></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="send">Send message</button>
                            <div class="error-box"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By LOG SHEET SYSTEMS</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
