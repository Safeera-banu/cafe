<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MENU | THE DAILY GRIND</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">  
</head>
<body>
  <!-- header  -->
  <?php include('header.php') ?>

  <div class="search-bar">   
    <input type="text" id="searchInput" placeholder="Search for coffee, tea, desserts..."  onkeyup="search()">   
  </div>

  <!-- menu  -->
  <section class="menu-section" id="menu-section">
    <h2 class="section-title">Coffee</h2>
    <div class="menu-grid">

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\coffee\Latte-coffee.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Another Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\coffee\Cappuccino-coffee.png" alt="Latte">
        <h3>Vanilla Latte</h3>
        <p class="description">Creamy latte with a touch of vanilla flavor.</p>
        <p class="price">₹150</p>
        <p class="availability not-available">Not Available</p>
        <button class="add-to-cart" disabled>Add to Cart</button>
      </div>

      <!-- Add more cards as needed... -->
      <div class="menu-card">
        <img src="image\menu-img\coffee\Iced-coffee.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <div class="menu-card">
        <img src="image\menu-img\coffee\Espresso-coffee.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <div class="menu-card">
        <img src="image\menu-img\coffee\Americano-coffee.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <div class="menu-card">
        <img src="image\menu-img\coffee\Latte-coffee.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

    </div>

    <h2 class="section-title"> Breakfast</h2>

    <div class="menu-grid">

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\breakfast\avocado-toast.png" alt="Cappuccino">
        <h3>Avocado Toast</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Another Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\breakfast\breakfast-burrito.png" alt="Latte">
        <h3>Vanilla Latte</h3>
        <p class="description">Creamy latte with a touch of vanilla flavor.</p>
        <p class="price">₹150</p>
        <p class="availability not-available">Not Available</p>
        <button class="add-to-cart" disabled>Add to Cart</button>
      </div>

      <!-- Add more cards as needed... -->

      <!-- Another Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\breakfast\oatmeal.png" alt="Latte">
        <h3>Vanilla Latte</h3>
        <p class="description">Creamy latte with a touch of vanilla flavor.</p>
        <p class="price">₹150</p>
        <p class="availability available"> Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Another Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\breakfast\pancakes.png" alt="Latte">
        <h3>Vanilla Latte</h3>
        <p class="description">Creamy latte with a touch of vanilla flavor.</p>
        <p class="price">₹150</p>
        <p class="availability not-available">Not Available</p>
        <button class="add-to-cart" disabled>Add to Cart</button>
      </div>

      <!-- Another Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\breakfast\waffles.png" alt="Latte">
        <h3>Vanilla Latte</h3>
        <p class="description">Creamy latte with a touch of vanilla flavor.</p>
        <p class="price">₹150</p>
        <p class="availability not-available">Not Available</p>
        <button class="add-to-cart" disabled>Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\breakfast\yogurt-parfait.png" alt="Cappuccino">
        <h3>Avocado Toast</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>


    </div>




    <h2 class="section-title">Snacks</h2>
    <div class="menu-grid">

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\snacks\chips-salsa.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Another Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\snacks\energy-bars.png" alt="Latte">
        <h3>Vanilla Latte</h3>
        <p class="description">Creamy latte with a touch of vanilla flavor.</p>
        <p class="price">₹150</p>
        <p class="availability not-available">Not Available</p>
        <button class="add-to-cart" disabled>Add to Cart</button>
      </div>

      <!-- Add more cards as needed... -->
      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\snacks\fruit-salad.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\snacks\hummus-veggies.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\snacks\popcorn.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\snacks\trail-mix.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

    </div>



    <h2 class="section-title">Tea</h2>
    <div class="menu-grid">

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\tea\black-tea.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Another Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\tea\chai-latte.png" alt="Latte">
        <h3>Vanilla Latte</h3>
        <p class="description">Creamy latte with a touch of vanilla flavor.</p>
        <p class="price">₹150</p>
        <p class="availability not-available">Not Available</p>
        <button class="add-to-cart" disabled>Add to Cart</button>
      </div>

      <!-- Add more cards as needed... -->
      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\tea\green-tea.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\tea\herbal-tea.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\tea\iced-tea.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\tea\matcha-latte.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

    </div>


    <h2 class="section-title">Desserts</h2>
    <div class="menu-grid">

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\desserts\brownies.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Another Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\desserts\cheesecake.png" alt="Latte">
        <h3>Vanilla Latte</h3>
        <p class="description">Creamy latte with a touch of vanilla flavor.</p>
        <p class="price">₹150</p>
        <p class="availability not-available">Not Available</p>
        <button class="add-to-cart" disabled>Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\desserts\chocolate-chip-cookies.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\desserts\cinnamon-rolls.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\desserts\muffins.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\desserts\scones.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Add more cards as needed... -->

    </div>


    <h2 class="section-title">Smoothie</h2>
    <div class="menu-grid">

      <!-- Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\coffee\Latte-coffee.png" alt="Cappuccino">
        <h3>Classic Cappuccino</h3>
        <p class="description">Rich, smooth espresso with steamed milk and foam.</p>
        <p class="price">₹120</p>
        <p class="availability available">Available</p>
        <button class="add-to-cart">Add to Cart</button>
      </div>

      <!-- Another Menu Item -->
      <div class="menu-card">
        <img src="image\menu-img\coffee\Cappuccino-coffee.png" alt="Latte">
        <h3>Vanilla Latte</h3>
        <p class="description">Creamy latte with a touch of vanilla flavor.</p>
        <p class="price">₹150</p>
        <p class="availability not-available">Not Available</p>
        <button class="add-to-cart" disabled>Add to Cart</button>
      </div>

      <!-- Add more cards as needed... -->

    </div>

  </section>

  <script src="serch.js"></script>

  <!-- footer  -->
  <?php include('footer.php') ?>

</body>

</html>
