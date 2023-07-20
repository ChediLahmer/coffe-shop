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
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="menu.php">menu</a>
            <a href="review.php" class="activate">blog</a>
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

    <div class="blog-card">
    <h1 class="heading" id="blogheader">Our blog <span>Blog</span></h1>
    

    <div class="cards">
      <div class="card">
        <img src="./image/blog1.jpg" alt="Blog 1 Image">
        <h3>Creating the Perfect Cup: Tips from a Coffee Expert</h3>
        <p>Coffee is not just a drink, it's a way of life. From the moment you take that first sip of a perfectly brewed cup, you know that you're in for a treat. But, how do you get that perfect cup every time? As a coffee expert, I'm here to share my top tips for creating the perfect cup of coffee.</p>
        <p>The first step to creating the perfect cup of coffee is to start with high-quality beans. The type of coffee bean you choose will affect the flavor, aroma, and overall quality of your cup. Look for beans that are freshly roasted, as this will ensure that the coffee is at its peak flavor.</p>
        </div>
      <div class="card">
        <img src="./image/blog4.jpg" alt="Blog 4 Image">
        <h3>The Fascinating History of Coffee: From Ethiopia to Your Cup</h3>
        <p>Coffee is one of the most beloved beverages around the world, and for good reason. It is a drink that has a rich history that has been woven into the fabric of cultures for centuries. In this article, we'll take a journey through the fascinating history of coffee, from its origins in Ethiopia to its status as a global phenomenon.</p>
        <p>The origins of coffee can be traced back to the ancient forests of Ethiopia, where the coffee plant first grew wild. Legend has it that a young goatherd named Kaldi noticed that his goats became unusually energetic after eating the berries of a certain plant.</p>

      </div>
      <div class="card">
        <img src="./image/blog3.jpg" alt="Blog 3 Image">
        <h3>Coffee Hacks: Tips and Tricks for Better Brews.</h3>
        <p>For many people, coffee is a daily ritual that helps them start their day or stay alert during long working hours. However, brewing coffee can be a complex and nuanced process, with a wide variety of techniques and tools available to achieve the perfect cup. In this article, we'll explore some of the top coffee hacks to help you brew better coffee and get the most out of your morning cup.</p>
        <p>The quality of the coffee beans you use is essential for making a great cup of coffee. Freshly roasted beans are critical to achieving a rich, full-bodied flavor. Be sure to buy coffee from a reputable roaster and look for beans that have a roast date within the last two weeks.</p>

      </div>
    </div>
  </div>

  <div class="blog-card">
    <div class="cards">
        <div class="card">
            <img src="./image/blog2.jpg" alt="Blog 2 Image">
            <h3>The Benefits of Drinking Coffee: Health, Productivity, and More</h3>
            <p>Coffee is one of the most consumed beverages in the world, and it's not just because of its delicious taste. Drinking coffee has numerous benefits that can improve your health, increase your productivity, and even help you live longer. In this article, we'll explore the many benefits of drinking coffee and why you should consider making it a regular part of your routine.</p>
            <p>One of the most obvious benefits of drinking coffee is its ability to give you an energy boost. The caffeine in coffee acts as a stimulant and can help improve your focus, alertness, and productivity.</p>
          </div>
      <div class="card">
        <img src="./image/blog5.jpg" alt="Blog 2 Image">
        <h3>The Science of Espresso: Understanding the Perfect Shot</h3>
        <p>Espresso is a staple in the world of coffee, and for good reason. This concentrated form of coffee is created by forcing hot water through finely ground, compacted coffee beans. However, making the perfect shot of espresso is more than just pushing a button or pulling a lever. It's a science that requires precision and understanding.</p>
        <p>it's important to understand the role of the coffee bean itself. The ideal espresso bean is a blend of Arabica and Robusta beans that have been roasted to a medium to dark roast. </p>

    </div>
      <div class="card">
        <img src="./image/blog6.jpg" alt="Blog 3 Image">
        <h3>The Different Types of Coffee Beans: A Guide for Coffee Lovers</h3>
        <p>Coffee lovers all around the world enjoy different types of coffee beans for their unique flavors, aromas, and characteristics. From the fruity and floral notes of Ethiopian Yirgacheffe to the chocolatey and nutty flavors of Brazilian Santos, the world of coffee beans is vast and diverse.</p>
        <p>Arabica and Robusta are the two most commonly consumed coffee beans. Arabica beans are known for their delicate flavor profile, often described as sweet, fruity, and acidic. They are usually grown at higher altitudes and are more expensive than Robusta beans.</p>
      </div>
    </div>
  </div>
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