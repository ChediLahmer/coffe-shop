
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
            <a href="about.php">about</a>
            <a href="menu.php" class="activate">menu</a>
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
    <div class="popup">
  <div class="popup-container">
    <h2>Payment Information</h2>
    <form>
      <label for="name">Name on Card:</label>
      <input type="text" id="name" name="name" required>
      <label for="card-number">Card Number:</label>
      <input type="text" id="card-number" name="card-number" required>
      <label for="expiration">Expiration Date:</label>
      <input type="text" id="expiration" name="expiration" placeholder="MM/YY" required>
      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv" required>
      <input type="submit" value="Submit Payment">
    </form>
    <button class="close-button" onclick="closePopup()">Close</button>
  </div>
</div>

<section class="menu" id="menu">
    <h1 class="heading">our menu <span>popular menu</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="image/menu-1.png" alt="">
            <div class="content">
                <h3>Cappuccino</h3>
                <p>This classic coffee drink is made with espresso and steamed milk, topped with a layer of frothy milk. It's typically served in a small cup and has a strong, bold flavor.</p>
                <span class="price">$8.99</span>
                <button class="buy-btn">Buy now</button>
            </div>
            
        </div>

        <div class="box">
            <img src="image/menu-2.png" alt="">
            <div class="content">
                <h3>Latte</h3>
                <p>A latte is similar to a cappuccino, but it has more milk and less foam. It's made with espresso and steamed milk, and can be flavored with syrups like vanilla or caramel.</p>
                <span class="price">$7.99</span>
                <button class="buy-btn">Buy now</button>
            </div>
        </div>

        <div class="box">
            <img src="image/menu-3.png" alt="">
            <div class="content">
                <h3>Macchiato</h3>
                <p>A macchiato is a shot of espresso with a small amount of steamed milk added on top. It's a strong coffee drink with a slightly sweet flavor.</p>
                <span class="price">$10.99</span>
                <button class="buy-btn">Buy now</button>
            </div>
        </div>

        <div class="box">
            <img src="image/menu-4.png" alt="">
            <div class="content">
                <h3>Cortado</h3>
                <p>A cortado is similar to a macchiato, but it has more milk added. It's made with espresso and a small amount of steamed milk, and has a strong, rich flavor.</p>
                <span class="price">$9.99</span>
                <button class="buy-btn">Buy now</button>
            </div>
        </div>

        <div class="box">
            <img src="image/menu-5.png" alt="">
            <div class="content">
                <h3>Mocha</h3>
                <p>A mocha is a latte that's flavored with chocolate syrup or powder. It's a popular drink for chocolate lovers and is often topped with whipped cream.</p>
                <span class="price">$11.99</span>
                <button class="buy-btn">Buy now</button>
            </div>
        </div>

        <div class="box">
            <img src="image/menu-6.png" alt="">
            <div class="content">
                <h3>Flat white</h3>
                <p>A flat white is a popular coffee drink in Australia and New Zealand. It's made with espresso and steamed milk, and has a velvety texture. </p>
                <span class="price">$8.99</span>
                <button class="buy-btn">Buy now</button>
            </div>
        </div>
    </div>
</section>
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

</body>

</html>