<?php
  require_once 'config.php';

  $sql = "SELECT * FROM menu";
  $all_product = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sugar Daddy Coffee and Eatery</title>
    <script src="https://kit.fontawesome.com/fe279e408d.js"></script>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <section id="header">
      <a href="#"><img src="img/Logo.png" width="80" height="50" class="logo" alt="" /></a>

      <div>
        <ul id="navbar">
          <li><a href="index.html">Home</a></li>
          <li><a class="active" href="Menu Book.html">Menu Book</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.html"><i class="fa-solid fa-store" style="color: #422d4d"></i></a>
          </li>
          <a href="#" id="close"><i class="fa fa-times"></i> </a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-store" style="color: #422d4d"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>

    <section id="page-header">
      <h2>#enjoy your meals</h2>
      <p>We ensure organic food and coffee for you. Hoping you and your family enjoy it.</p>
    </section>

    <section id="product1" class="section-p1">
      <div class="pro-container">
      <?php
        while($row = mysqli_fetch_assoc($all_product)){
      
      ?>
        <div class="pro" onclick="window.location.href='smenu.html'">
          <img src="<?php echo $row["Image"] ?>" alt="" />
          <div class="des">
            <span>Beloved Menu</span>
            <h5><?php echo $row["Name"]?></h5>
            <div class="Star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>Idr <?php echo $row["Price"]?></h4>
          </div>
          <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>
        <?php
        }
      ?>
      </div>
    </section>

    <section id="pagination" class="section-p1">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#"><i class="fa fa-long-arrow-right"></i></a>
    </section>

    <section id="newsletter" class="section-p1">
      <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our <span>special offer</span>.</p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="black">Sign Up</button>
      </div>
    </section>

    <footer class="section-p1 section-m1">
      <div class="col">
        <img class="logo" src="img/Logo.png" width="80" height="50" class="logo" alt="" />
        <h4>Contact</h4>
        <p><strong>Address:</strong>Jl. Pantai Nyanyi, Beraban, Kec. Kediri-Tabanan, Bali</p>
        <p><strong>Phone:</strong>+62 8123 8041 485</p>
        <p><strong>Hours:</strong>08.00 am - 04.00 pm, Mon - Sat</p>
        <div class="follow">
          <h4>Follow Us</h4>
          <div class="icon">
            <a href="https://instagram.com/sugardaddycafe.nyanyi?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Help</a>
      </div>
      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="img/apps.png" alt="" />
          <img src="img/gplay.png" alt="" />
        </div>
      </div>
      <div class="copyright">
        <p>@2023, Sugar Daddy - Ecommerce</p>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
