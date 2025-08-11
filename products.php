<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LUXE Accessories</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

  <header>
    <div class="logo">
        <img src="logo2.jpg" alt="">
         <div class="logo-text">
          <h2>STRANDS N' LUXE</h2>
    <h5><em>embrace Your Texture, enhance Your Beauty...</em></h5>
         </div>
    </div>  

      <nav>
        <a href="index.html">Home</a>
        <a href="accessories.html">LUXE Accessories</a>
        <a href="#">LUXE Products</a>
      </nav>
  </header>

  <main>
     <div class="top-bar">
    <button class="cart-btn" onclick="showCart()">🛒 My Cart (<span id="cartCount">0</span>)</button>
  </div>

  <h2>Ayuvedic</h2>
  <div class="product-grid">
    <div class="product">
      <img src="infusedherboil.jpg" alt="Hair Oil">
      <p><strong>Infused Rosemary Oil</strong></p>
      <p>#3500</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>

    <div class="product">
      <img src="coconutoil.jpg" alt="Hair Oil">
      <p><strong>Cold-press Coconut Oil</strong></p>
      <p>#5000</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>

    <div class="product">
      <img src="hairmasks.jpg" alt="Hair Masks">
      <p><strong>Ayuverdic Hair Masks</strong></p>
      <p>#2000</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>

    <div class="product">
      <img src="Herbs.jpg" alt="Herbs">
      <p><strong>Ayuverdic Herbs</strong></p>
      <p>#7000</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>
  </div>

<h2>Hair Essentials</h2>
   <div class="product-grid">
    <div class="product">
      <img src="satinbonnet.jpg" alt="Bonnets">
      <p><strong>Satin Sleeping Bonnets</strong></p>
      <p>1pcs | #2000</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>

    <div class="product">
      <img src="Scalpmassager.jpg" alt="Scalpmassager">
      <p><strong>Scalp Massager</strong></p>
      <p>1pcs | #3500</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>

    <div class="product">
      <img src="detangling brush.jpg" alt="Brush">
      <p><strong>Detangling Brush</strong></p>
      <p>1pcs | #700</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>

    <div class="product">
      <img src="spraybottle.jpg" alt="Spray">
      <p><strong>Spray Bottle</strong></p>
      <p>1pcs | #1500</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>
  </div>

  <h2>Shampoos N' Conditioners</h2>
  <div class="product-grid">
    <div class="product">
      <img src="completewashday.jpg" alt="Shampoo">
      <p><strong>Hair Chemist (Macadamia Oil) Full Kit</strong></p>
      <p>#15000</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>

    <div class="product">
      <img src="conditioner.jpg" alt="Shampoo">
      <p><strong>OUAI Leave-In Conditioner</strong></p>
      <p>#8000</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>

    <div class="product">
      <img src="SheamoistureshampooXconditioner.jpg" alt="Shampoo">
      <p><strong>Shea Moisture Shampoo N' Conditioner</strong></p>
      <p>#9500</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>

    <div class="product">
      <img src="coconutmilk.jpg" alt="Shampoo">
      <p><strong>ogx Coconut Milk Hydrating Shampoo N' Conditioner</strong></p>
      <p>#8600</p>
      <button onclick="addToCart()">Add to Cart</button>
      <button>Buy Now</button>
    </div>
  </div>
  </main>
  
  <footer>
    <div>Contact Us <br> 📧 email: luxestrands@gmail.com | ☎ tel: 07062110294</div>
    <div>Copyright ©<span id="date"></span></div>
  </footer>
</body>

</html>
