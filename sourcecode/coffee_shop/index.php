
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dc2f9d14aa.js" crossorigin="anonymous"></script>
    <link rel="icon" href="image/Icon-coffee.png">
    <title>Coffee</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/blog.css">
</head>

<body>
  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
  
    <a href="index.php" class="logo"><img src="./image/logo3.png" alt="Coffee logo"></a>
        
    <nav class="navbar">
        <a href="index.php" class="activate">home</a>
        <a href="about.php">about</a>
        <a href="menu.php">menu</a>
        <a href="review.php">blog</a>
        <a href="book.php">book</a>
        <?php
session_start();
if (isset($_SESSION["user_id"]) && isset($_SESSION["user_name"]) && isset($_SESSION["user_email"])) {
    echo '<button class="button" onclick="toggleUserInfo()"><i class="fas fa-user fa-fw"></i>' . $_SESSION["user_name"] . '</button>';
    echo '<div class="user-info" id="user-info">';
    echo '<p class="user-info-item"><strong>Name:</strong> ' . $_SESSION["user_name"] . '</p>';
    echo '<p class="user-info-item"><strong>ID:</strong> ' . $_SESSION["user_id"] . '</p>';
    echo '<p class="user-info-item"><strong>Email:</strong> ' . $_SESSION["user_email"] . '</p>';
    echo '<a href="logout.php" class="login-link"><i class="fas fa-sign-out-alt"></i> Log Out</a>';
    echo '</div>';
} else {
  echo '<button class="buttonred" onclick="toggleNotLoggedInMessage()"><i class="fas fa-user fa-fw"></i></button>';
  echo '<div class="user-info" id="not-logged-in-message">';
  echo '<p class="not-logged-in-message"> You are not logged in.</p>';
  echo '<a href="sign up.php" class="login-link">Sign Up</a>';
  echo '</div>';
}
?>



    </nav>
   
    <a href="book.php" class="btn">book a table</a>
    <div class="cart-container">
        <div class="fas fa-shopping-cart" id="cart-btn">
          <span id="cart-count">0</span>
        </div>
        
      
        <div class="cart-list" id="cart-list">
          <ul class="cart-items" id="cart-items">
          </ul>
          <div class="cart-total" id="cart-total">
            Total: $0.00
          </div>
          <button class="checkout-btn" id="checkout-btn">Checkout</button>
        </div>
      </div>
  </header>
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>Get your fresh coffee now</h3>
                <a href="menu.php" class="btn" id="btn-home">buy one now</a>
            </div>

            <div class="image">
                <img src="image/home-img-1.png" class="main-home-image" alt="">
            </div>
        </div>

        <div class="image-slider">
            <img src="image/home-img-1.png" alt="">
            <img src="image/home-img-2.png" alt="">
            <img src="image/home-img-3.png" alt="">
        </div>
    </section>



    <div class="blog-card">
      <h1 class="heading">Our blog <span>Blog</span></h1>
      <div class="cards">
        <div class="card">
          <img src="./image/blog1.jpg" alt="Blog 1 Image">
          <h3>Creating the Perfect Cup: Tips from a Coffee Expert</h3>
          <p>Coffee is not just a drink, it's a way of life. From the moment you take that first sip of a perfectly brewed cup ...</p>
          <a href="review.php">explore</a>
        </div>
        <div class="card">
          <img src="./image/blog2.jpg" alt="Blog 2 Image">
          <h3>The Benefits of Drinking Coffee: Health, Productivity, and More</h3>
          <p>Coffee is one of the most consumed beverages in the world, and it's not just because of its delicious taste ...</p>
          <a href="review.php">explore</a>
        </div>
        <div class="card">
          <img src="./image/blog3.jpg" alt="Blog 3 Image">
          <h3>Coffee Hacks: Tips and Tricks for Better Brews.</h3>
          <p>For many people, coffee is a daily ritual that helps them start their day or stay alert during long working hours ...</p>
          <a href="review.php">explore</a>
        </div>
      </div>
    </div>
    
    <section class="review" id="review">
      <h1 class="heading">reviews <span>what people says</span></h1>
  
      <div class="swiper review-slider">
          <div class="swiper-wrapper">
              <div class="swiper-slide box">
                  <i class="fas fa-quote-left"></i>
                  <i class="fas fa-quote-right"></i>
                  <img src="image/pic-1.png" alt="">
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <p>Amazing coffee and atmosphere! I love coming here to get work done or catch up with friends. The staff is always friendly and attentive.</p>
                  <h3>john smith</h3>
                  <span>satisfied client</span>
              </div>
  
              <div class="swiper-slide box">
                  <i class="fas fa-quote-left"></i>
                  <i class="fas fa-quote-right"></i>
                  <img src="image/pic-2.png" alt="">
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <p>Best coffee shop in town! The lattes are consistently delicious and the pastries are so fresh. I also appreciate the variety of dairy-free milk options.</p>
                  <h3>emily clarkson</h3>
                  <span>satisfied client</span>
              </div>
  
              <div class="swiper-slide box">
                  <i class="fas fa-quote-left"></i>
                  <i class="fas fa-quote-right"></i>
                  <img src="image/pic-3.png" alt="">
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <p>I had the pleasure of trying their cold brew for the first time and it was absolutely fantastic. The perfect balance of sweetness and strength.</p>
                  <h3>john wick</h3>
                  <span>satisfied client</span>
              </div>
  
              <div class="swiper-slide box">
                  <i class="fas fa-quote-left"></i>
                  <i class="fas fa-quote-right"></i>
                  <img src="image/pic-4.png" alt="">
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <p>I love the cozy ambiance and the friendly staff. The coffee is always great and I appreciate the local art on display. Highly recommend!</p>
                  <h3>catheren davidson</h3>
                  <span>satisfied client</span>
              </div>
          </div>
          <div class="swiper-pagination"></div>
      </div>
  </section>


























</body>

<footer class="footer">
  <div class="box-container">
    <div class="box">
      <h3>our branches</h3>
      <a href="#"><i class="fas fa-arrow-right"></i> india</a>
      <a href="#"><i class="fas fa-arrow-right"></i> USA</a>
      <a href="#"><i class="fas fa-arrow-right"></i> france</a>
      <a href="#"><i class="fas fa-arrow-right"></i> africa</a>
      <a href="#"><i class="fas fa-arrow-right"></i> japan</a>
    </div>

    <div class="box">
      <h3>quick links</h3>
      <a href="index.html"><i class="fas fa-arrow-right"></i> home</a>
      <a href="about.html"><i class="fas fa-arrow-right"></i> about</a>
      <a href="menu.html"><i class="fas fa-arrow-right"></i> menu</a>
      <a href="review.html"><i class="fas fa-arrow-right"></i> review</a>
      <a href="book.html"><i class="fas fa-arrow-right"></i> book</a>
    </div>

    <div class="box">
      <h3>contact info</h3>
      <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
      <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
      <a href="#"><i class="fas fa-envelope"></i> coffee@gmail.com</a>
    </div>

    <div class="box">
      <h3>social media</h3>
      <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
      <a href="#"><i class="fab fa-twitter"></i> twitter</a>
      <a href="#"><i class="fab fa-instagram"></i> instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
      <a href="#"><i class="fab fa-twitter"></i> twitter</a>
    </div>
  </div>
  <div class="credits">
    <p>Made with love ❤️ by Med Mayssen Jemmali & Chedi Lahmer <br>&copy; 2023 Caffeine Corner. All Rights Reserved.</p>
  </div>
</footer>  
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>


</html>