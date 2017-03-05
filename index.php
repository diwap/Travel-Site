﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Travel Boy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="images/favicon.png" rel="icon" type="image/png">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand" href="#">Navbar</a>       
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <form class="form-inline my-2 my-lg-0 hidden-md-down">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                </form>
                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Become a Host</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_profile.html">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Log In</a>
                    </li>
                </ul>
            </div>
        </nav>                                                          <!-- Navigation Bar -->
        <div id="carouselControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Nature Visit Experiences</h1>
                    <p>Turn into an adventurous guy</p>
                    <button class="btn btn-outline-primary">See what's new</button>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Nature Visit Experiences</h1>
                  <p>Turn into an adventurous guy</p>
                  <button class="btn btn-outline-primary">See what's new</button>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Nature Visit Experiences</h1>
                    <p>Turn into an adventurous guy</p>
                    <button class="btn btn-outline-primary">See what's new</button>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>                                                          <!-- Carousel -->
        <div class="container">
            <div class=" ticket">
                <form>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="destinationName">Where</label>
                                <input type="text" class="form-control" placeholder="Destination, city, address">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="dateInput">When</label>
                                <div class="row">
                                    <div class="col-md-5 col-sm-12">
                                        <input class="form-control" type="text" value="Check In" id="dateInput">
                                    </div>
                                    <div class="col-lg-1 hidden-md-down">
                                        <span class="fa fa-arrow-right" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-5 col-sm-12">
                                        <input class="form-control" type="text" value="Check Out" id="dateInput">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                    <label for="rgnSelect">Where</label>
                                <select class="form-control" id="rgnSelect">
                                    <option>1 Guest</option>
                                    <option>2 Guest</option>
                                    <option>3 Guest</option>
                                    <option>4 Guest</option>
                                    <option>5 Guest</option>
                                </select>
                            </div>                                                       
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>                                                      <!-- Ticket Booking -->
            <div class="content">                                                 
                <div class="row cTitle"><h5>Most popular experiences</h5></div>
                <div class="row justify-content-center crow1">
                    <div class="col-lg-3 col-md-5 col-sm-6 col-10">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/f26e3064-fc1f-46e5-a06c-2d9325bccf5c.jpg?aki_policy=poster" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text">Some quick example text to build on the card title.</p>
                            <p class="card-text">5 Reviews</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-10">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/f26e3064-fc1f-46e5-a06c-2d9325bccf5c.jpg?aki_policy=poster" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text">Some quick example text to build on the card title.</p>
                            <p class="card-text">5 Reviews</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-10">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/f26e3064-fc1f-46e5-a06c-2d9325bccf5c.jpg?aki_policy=poster" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text">Some quick example text to build on the card title.</p>
                            <p class="card-text">5 Reviews</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-10">
                        <div class="card">
                            <img class="card-img-top" src="https://a0.muscache.com/im/pictures/f26e3064-fc1f-46e5-a06c-2d9325bccf5c.jpg?aki_policy=poster" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text">Some quick example text to build on the card title.</p>
                                <p class="card-text">5 Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cTitle"><h5>Homes</h5></div>
                <div class="row justify-content-center crow2">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/18813125/896b30c2_original.jpg?aki_policy=large" alt="Card image cap">
                        <div class="card-block">
                            <p><strong>Entire Home - 3 Beds</strong></p>
                            <p class="card-text">Some quick example text to build on the card title.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/18813125/896b30c2_original.jpg?aki_policy=large" alt="Card image cap">
                        <div class="card-block">
                            <p><strong>Entire Home - 3 Beds</strong></p>
                            <p class="card-text">Some quick example text to build on the card title.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/im/pictures/18813125/896b30c2_original.jpg?aki_policy=large" alt="Card image cap">
                        <div class="card-block">
                            <p><strong>Entire Home - 3 Beds</strong></p>
                            <p class="card-text">Some quick example text to build on the card title.</p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row cTitle"><h5>Featured Destination</h5></div>
                <div class="row justify-content-center crow3">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text"><strong>Silicon Valley</strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text"><strong>Silicon Valley</strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text"><strong>Silicon Valley</strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                            <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text"><strong>Silicon Valley</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                        <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                        <div class="card-block">
                            <p class="card-text"><strong>Silicon Valley</strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="card">
                            <img class="card-img-top" src="https://a0.muscache.com/ac/pictures/7bff51c1-3c35-47a5-a86c-5ea75ab6be6c.jpg?interpolation=lanczos-none&size=large&output-format=jpg&output-quality=70" alt="Card image cap">
                            <div class="card-block">
                                <p class="card-text"><strong>Silicon Valley</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                                     <!-- Content -->
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row footer-top hidden-sm-down">
                    <div class="col-lg-4 col-md-4">
                        <h5>Nature Visit</h5>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Policies</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Diversity & Belonging</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5>Discover</h5>
                        <ul>
                            <li><a href="#">Trust & Safety</a></li>
                            <li><a href="#">Travel Credit</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Travel Citizen</a></li>
                            <li><a href="#">Business Travel</a></li>
                            <li><a href="#">Guidebooks</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5>Hosting</h5>
                        <ul>
                            <li><a href="#">Why Host</a></li>
                            <li><a href="#">Refer Hosts</a></li>
                            <li><a href="#">Hospitality</a></li>
                            <li><a href="#">Responsible Hosting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row footer-bottom justify-content-center">
                    <div class="col-lg-4 col-8">
                        <a href="#">Logo</a>
                        <span>&copy Nature Visit, Private.</span>
                    </div>
                    <div class="col-lg-3 col-6"></div>
                    <div class="col-lg-5 social">
                        <a href="#">Terms & Privacy</a>
                        <a href="#">Site Map</a>
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://use.fontawesome.com/3eac1dcbb6.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/style.js" type="text/javascript"></script><!-- Footer -->
    </body>
</html>
