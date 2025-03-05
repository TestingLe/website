<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles1.css" type="text/css">
    <title>Header</title>
</head>
<body>
    <header class="header">
        <div class="left-section">
            <img src="assets/profile.jpg" alt="User Icon" class="user-icon">
                <div class="cart-buy">
                    <a href="#"><i class='bx bx-shopping-bag'></i></a>
                </div>
            <a href="#" class="about-link">About us</a>
        </div>
        <div class="center-section">
            <a href="#"><img src="assets/logo.png" alt="Centered Logo" class="center-logo"></a>
        </div>
        <div class="right-section">
            <button class="btn login-btn"><a href="login.html">Log In</a></button>
            <button class="btn signup-btn"><a href="login.html">Sign Up</a></button>
            <div class="global">
                <i class='bx bx-globe'></i>
                <a href="#">EN</a>
            </div>
        </div>
    </header>
    <main>
        <section class="hero-section">
            <img src="assets/topsection.png" alt="Freshly Baked Croissants" class="hero-img">
        </section>
        <section class="promo-section">
            <div class="promo-text">
                <div class="promo-header">Get 20% Off Discount This Week</div>
                <p>Satisfy your cravings with our mouthwatering, made-to-order Breads!</p>
            </div>
            <div class="promo-image">
                <img src="assets/maneatingbread.jpeg" alt="Man slicing bread">
            </div>
        </section>
        <h2 class="foodhead">Our Food</h2>
        <div class="wrapper">
            <div class="center-container">
                <input type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <h4>Bread W/ Strawberry</h4>
                            <p>A luscious and tender loaf infused with the sweet and tangy essence of ripe strawberries.</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c2" >
                <label for="c2" class="card">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                            <h4>Golden Waffles</h4>
                            <p>A delightful breakfast classic, our waffles are golden brown with a crisp outer layer and a soft, fluffy interior.</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c3" >
                <label for="c3" class="card">
                    <div class="row">
                        <div class="icon">3</div>
                        <div class="description">
                            <h4>Berry Bliss Waffles</h4>
                            <p>Indulge in the perfect harmony of crisp, golden waffles topped with luscious, sweet strawberries. Each waffle is light and airy, providing the ideal canvas for the vibrant freshness of ripe strawberries.</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c4" >
                <label for="c4" class="card">
                    <div class="row">
                        <div class="icon">4</div>
                        <div class="description">
                            <h4>hehe</h4>
                            <p>hehehe</p>
                        </div>
                    </div>
                </label>
            </div>
        </div>
        <br><br><br>
        <hr>
        <br><br><br>
        <div class="why-pastricia">
            <h3>Why Pastricia?</h3><br><br>
            <ul>
              <li>Pay with ease - It's easy to get your meals delivered to you. It's even easier to pay for it with GCASH.</li><br><br>
              <li>Easiest - Just few clicks or taps away you can order the food fast.</li><br><br>
              <li>Wallet friendly - Cheap foods for you!</li><br>
            </ul>
        </div>
        <hr>
        <br><br><br>
        <div id="booking" class="section-form">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            <div class="booking-bg">
                                <div class="form-header">
                                    <h2>Book now!</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
                                </div>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Check In</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Attendees</span>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Number</span>
                                            <input type="text" placeholder="Your phone number">
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Room Type</span>
                                    <select class="form-control" required>
                                        <option value="" selected hidden>Select room type</option>
                                        <option>Private Room (1 to 2 People)</option>
                                        <option>Family Room (1 to 4 People)</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn">Check availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h2set">
            <h2>Our Location</h2>
        </div>
        <div class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.304348090919!2d121.0983795!3d14.6386573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b9cbb86673b5%3A0x5ab26f9518810b2d!2sNational%20Christian%20Life%20College!5e0!3m2!1sen!2sph!4v1735376533656!5m2!1sen!2sph" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <footer>
        <div class="containerfooter">
            <div class="row">
                  <div class="col" id="company">
                      <img src="assets/logo.png" alt="Pastricia-logo" class="logo">
                      <p>
                        We are specialized in designings, make your business a brand.
                        Try our premium services.
                      </p>
                      <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </div>
                  </div>


                  <div class="col" id="services">
                     <h3></h3>
                     <div class="links">
                        <a href="#">Illustration</a>
                        <a href="#">Creatives</a>
                        <a href="#">Poster Design</a>
                        <a href="#">Card Design</a>
                     </div>
                  </div>

                  <div class="col" id="useful-links">
                     <h3>Links</h3>
                     <div class="links">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Our Policy</a>
                        <a href="#">Help</a>
                     </div>
                  </div>

                  <div class="col" id="contact">
                      <h3>Contact</h3>
                      <div class="contact-details">
                         <i class="fa fa-location"></i>
                         <p>FF-42, Procube Avenue, <br> NY, USA</p>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>+1-8755856858</p>
                      </div>
                  </div>
            </div>

            <div class="row">
                  <div class="form">
                    <form action="">
                        <input type="text" placeholder="Email here...">
                        <button><i class="fa fa-paper-plane"></i></button>
                    </form>
                  </div>
            </div>

        </div>
     </footer>
     <script src="script.js"></script>
     <script></script>
</body>
</html>