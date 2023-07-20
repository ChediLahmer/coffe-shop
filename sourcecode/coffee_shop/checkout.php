<?php
$message=false;
$cartTotal = 0;
if(isset($_GET['total'])) {
  $cartTotal = $_GET['total'];
}

if(isset($_POST['checkout'])) {
  $cartTotal = 0;
  $message=true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<div class="container" >

    <form id="checkout-form" class="the-form" >
    <div class="form-body">
        <div class="row">
            
            <div class="col">
            

                <h3 class="title">billing address</h3>
                
                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="chedi lahmer" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="manzah" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="tunis" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="image/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. chedi lahmer" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
  <span>exp month:</span>
  <select required>
    <option value="">--Select a month--</option>
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
  </select>
</div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" required>
                    </div>
                </div>

            </div>
    
        </div>
        <?php if($cartTotal == 0) { ?>
  <p>Cart Total: <?php echo '$'.$cartTotal . '<br><span style="color: green; font-weight: bold;">checkout successful</span>'; ?></p>
<?php } else { ?>
  <p>Cart Total: <?php echo '$'.$cartTotal; ?></p>
<?php } ?>
<a href="menu.php" class="back-button"><i class="fas fa-arrow-left"></i> Back to Menu</a>
        <input type="submit" value="proceed to checkout" class="submit-btn">
    </form>

</div> 
</div>   
    <script src="js/script.js"></script>
    <script src="js/checkout.js"></script>
</body>
</html>