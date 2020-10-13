<?php include('includes/header.php'); ?>
<?php include('includes/navigation.php'); ?>
<link rel="stylesheet" type="text/css" href="styles/checkout_styles.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">


        
<body>
     <main id="main" role="main">
                    <div class="container py-5 text-center">
                <h2 class="my-3">CHECKOUT</h2>
            </div>
        <section id="checkout-container">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your cart</span>
                            <span class="badge badge-secondary badge-pill">3</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Product name</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>
                                <span class="text-muted">Sh12</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Second product</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>
                                <span class="text-muted">Sh8</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Third item</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>
                                <span class="text-muted">Sh5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total</span>
                                <strong>Sh20</strong>
                            </li>
                        </ul>
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your loyalty points are:</span>
                            <span class="badge badge-secondary badge-pill">300</span>
                        </h4> 
                       </div>
                      

     <div class="container col-md-3 md-2 mb-4">                                         
    <form action="/action_page.php" class="was-validated">
  <div class="form-group">
   <h4 id="SUP">Create Account</h4>
    <label for="fullname">Full Name:</label>
    <input type="text" class="form-control" id="fullname" placeholder="" name="fullname" required>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="password" class="form-control" id="email" placeholder="you@example.com" name="email" required>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="number">Phone Number:</label>
    <input type="password" class="form-control" id="number" placeholder="+254 7.." name="number" required>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> Remember me
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
                                <hr class="mb-4">
                                <h4 class="mb-3">Claim Reward</h4>
                                <div class="custom-control custom-radio">
                                <input type="radio" name="gender" value="male">Gifts</div>
                                <div class="custom-control custom-radio">
                                <input type="radio" name="gender" value="female">Loyalty Points<br></div> <hr class="mb-4">

                            
                            <div class="d-block my-3">
                                <hr class="mb-4"><h4 class="mb-3">Payment</h4>

                                <div class="custom-control custom-radio">
                                    <input id="mpesa" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="mpesa">M-Pesa</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="ipay" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="ipay">I-Pay</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div><hr class="mb-4">
                            </div>
                                <button class="btn btn-primary btn-sm" type="submit">
                                <i class="fa fa-credit-card"></i> Continue to checkout</button>
</form></div>
<div class ="container col-md-3 md-2 mb-4">
 <form action="/action_page.php" class="was-validated">
    <div class="form-group">
    <h4 id="LG">Login</h4>
    <label for="email">Email:</label>
    <input type="password" class="form-control" id="email" placeholder="you@example.com" name="email" required>

    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pswd">Password:</label>
    <input type="password" class="form-control" id="pswd" placeholder="" name="pswd" required>

    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form></div>


                           
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>
           
    </main>
    <!-- 

     ->
    <footer id="footer">
        <p class="copyright">Made with
            <i class="fa fa-heart"></i> By
            <a target="_blank" title="Orbit Themes" href="http://www.orbitthemes.com">Orbit Themes</a> &copy;
            <span id="currentYear"></span> All Rights Reserved.
        </p>
        <div class="social">
            <a traget="_blank" href="https://facebook.com/orbitthemes" title="facebook">
                <i class="fa fa-facebook"></i>
            </a>
            <a traget="_blank" href="https://twitter.com/orbitthemes" title="twitter">
                <i class="fa fa-twitter"></i>
            </a>
            <a traget="_blank" href="https://plus.google.com/+orbitthemes" title="Google+" target="_blank">
                <i class="fa fa-google-plus"></i>
            </a>
            <a traget="_blank" href="https://github.com/orbitthemes" title="github" target="_blank">
                <i class="fa fa-github"></i>
            </a>
            <a traget="_blank" href="https://www.behance.net/orbitthemes" title="Behance" target="_blank">
                <i class="fa fa-behance"></i>
            </a>
            <a traget="_blank" href="https://dribbble.com/orbitthemes" title="Dribbble" target="_blank">
                <i class="fa fa-dribbble"></i>
            </a>
            <a traget="_blank" href="https://www.pinterest.com/orbitThemes/" title="Pinterest" target="_blank">
                <i class="fa fa-pinterest"></i>
            </a>
            <a traget="_blank" href="https://www.reddit.com/user/orbitthemes" title="Reddit" target="_blank">
                <i class="fa fa-reddit"></i>
            </a>
            <a traget="_blank" href="https://orbitthemes.com/blog/" title="RSS" target="_blank">
                <i class="fa fa-rss"></i>
            </a>
        </div>
    </footer>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="dist/jquery/jquery.min.js"></script>
    <script src="dist/popper/popper.min.js" integrity=""></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.min.js"></script>
</body>

</php <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo"><a href="index.php">Cheki Bulls</a></div>
                        </div>
                        <div class="footer_title">Got Question? Call Us 24/7</div>
                        <div class="footer_phone">070......90</div>
                        <div class="footer_contact_text">
                            <p>Physical Address</p>
                            
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

               <div class="col-lg-2 offset-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Shopping Guide</div>
                        <ul class="footer_list">
                            <li><a href="shop.php">Laptops</a></li>
                            <li><a href="shop.php">Accessories</a></li>
                            <li><a href="shop.php">Services</a></li>
                            <li><a href="shop.php">Phones & Tablets</a></li>
                            <li><a href="shop.php">Security</a></li>
                        </ul>
                        
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column"><h5>Why Us</h5>
                        <ul class="footer_list footer_list_2">
                            <li><a href="#">Reason</a></li>
                            <li><a href="#">Reason</a></li>
                            <li><a href="#">Reason</a></li>
                            <li><a href="#">Reason</a></li>
                            <li><a href="#">Reason</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Customer Care</div>
                        <ul class="footer_list">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="dist/jquery/jquery.min.js"></script>
    <script src="dist/popper/popper.min.js" integrity=""></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.min.js"></script>
</body>

</php>
 