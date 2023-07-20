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

</head>

<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="index.php" class="logo"><img src="./image/logo3.png" alt="Coffee logo"></a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php" class="activate">about</a>
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
    <section class="about" id="about">
        <h1 class="heading">about us <span>why choose us</span></h1>

        <div class="row">
            <div class="image">
                <img src="image/about-img.png" alt="">
            </div>

            <div class="content">
                <h3 class="title">what's make our coffee special!</h3>
<p>At our coffee shop, we take great pride in the quality and flavor of our coffee. 
   We carefully select the finest beans from around the world and roast them to 
   perfection to bring out the unique flavors and aromas. 
</p>
<div class="btn" id="read-more-btn">read more</div>
<p id="extra-text" class="extra-text">
    We believe that coffee 
   is not just a drink, it's an experience, and we strive to make every cup an 
   unforgettable one. Our baristas are highly trained and passionate about their craft, 
   ensuring that every cup is brewed to perfection.
</p>

                <div class="icons-container">
                    <div class="icons">
                        <img src="image/about-icon-1.png" alt="">
                        <h3>quality coffee</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-2.png" alt="">
                        <h3>our branches</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-3.png" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
       <script src="js/script2.js"></script>

   </body>
   
   </html>