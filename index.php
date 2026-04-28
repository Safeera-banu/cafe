<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>THE DAILY GRIND</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>


  <?php include('header.php') ?>



  <!-- Hero Section  -->

  <section class="hero-section">
    <div class="hero-banner">
      <img src="image\banner\pexels-eka-sutrisno-940646-1863622.jpg" alt="Cafe Banner" />
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <h1>Bringing the Café to Your Couch</h1>
        <p>
          Enjoy the warmth and comfort of our café, delivered right to your doorstep. From our signature brews
          to our delectable pastries, we’re here to make your day a little brighter.
        </p>
        <div class="hero-buttons">
          <a href="#booking" class="btn btn-primary">Table Reservation</a>
          <a href="cart.php" class="btn btn-secondary">Order Online</a>
        </div>
      </div>
    </div>
  </section>



  <!-- about us -->

  <section class="about-section">
    <h2 class="about-heading">About Us</h2>
    <div class="about-container">
      <div class="about-image">
        <img src="image\pexels-wendywei-1787141.jpg" alt="Cafe Interior">
      </div>
      <div class="about-details">
        <h3>The Daily Grind</h3>
        <p>
          Nestled in the heart of the city, The Daily Grind brings together community, comfort, and the aroma of freshly
          brewed coffee. Whether you’re catching up with friends or diving into your favorite book, our café offers the
          perfect ambiance and treats to make every visit special...
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero incidunt sit, laudantium asperiores eos
          pariatur voluptates possimus enim fugit a quod consequuntur doloremque iste debitis nihil rerum odio nisi
          quasi! sfk  
        <a href="about.php">Read more →</a>
        </p>
      </div>
    </div>
  </section>



  <!-- Customer favorite -->

  <section class="favorites-section container ">
    <h2 class="favorites-heading">Customer Favorites</h2>
    <hr>
    <br>
    <br>
    <div class="favorites-slider">
      <div class="slider-track" id="sliderTrack">
        <!-- Cards will be injected by JS -->
      </div>
    </div>
  </section>

  <br>
  <br>



  <!-- table booking -->
 
  <section class="booking-wrapper" id="booking">
    <div class="booking-container">
      <!-- Table Booking Form -->
      <div class="booking-form">
        <h2>Book a Table</h2>
        <form action="booking-form.php" method="post" id="tableForm">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name" required>

          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" placeholder="Your phone number" required>

          <label for="tableNumber">Table Number</label>
          <input type="number" id="tableNumber" name="tableNumber" min="1" placeholder="Table number" required>

          <label for="people">Guests</label>
          <input type="number" id="people" name="people" min="1" placeholder="Number of guests" required>

          <label for="booking_date">Date</label>
          <input type="date" id="booking_date" name="booking_date" required>

          <label for="booking_time">Time</label>
          <input type="time" id="booking_time" name="booking_time" required>

          <button type="submit">Book Table</button>
        </form>

        <?php if (isset($_GET['booking'])): ?>
          <p id="booking-status" class="booking-status <?php echo htmlspecialchars($_GET['booking']); ?>">
            <?php
              if ($_GET['booking'] === 'success') {
                  echo 'Your table booking has been saved.';
              } elseif ($_GET['booking'] === 'invalid') {
                  echo 'Please fill all booking fields correctly.';
              } else {
                  echo 'Sorry, booking could not be saved. Please try again.';
              }
            ?>
          </p>
        <?php endif; ?>
      </div>
      <div class="quote-section">
        <blockquote>
          “Every sip tells a story discover yours at The Daily Grind.”
        </blockquote>
      </div>

    </div>
  </section>

  <br>
  <br>
  <br>



  <!-- main section  -->

  <section id="home-menu" class="features-section">
    <div class="features-heading">
      <h2>What We Offer</h2>
      <p>Experience the best of our cafe, wherever you are. From freshly brewed coffee to mouth-watering pastries,
        we've got something for everyone.</p>
    </div>

    <div class="feature-cards">
      <div class="feature-card">
        <img src="image\home-img\freshly-brewed-coffee.png" alt="Freshly Brewed Coffee" />
        <h3>Freshly Brewed Coffee</h3>
        <p>Our coffee is sourced from the finest beans, roasted to perfection, and brewed fresh daily.</p>
      </div>
      <div class="feature-card">
        <img src="image\menu-img\tea\herbal-tea.png" alt="Delicious Pastries" />
        <h3>Delicious Pastries</h3>
        <p>Indulge in our selection of pastries, baked fresh every morning with love and care.</p>
      </div>
      <div class="feature-card">
        <img src="image\menu-img\smoothies\Sunrise Smoothie.png" alt="Cozy Atmosphere" />
        <h3>Cozy Atmosphere</h3>
        <p>Enjoy the cozy ambiance of our cafe, now available for you to experience at home.</p>
      </div>


      <div class="feature-card">
        <img src="image\menu-img\desserts\cheesecake.png" alt="Freshly Brewed Coffee" />
        <h3>Freshly Brewed Coffee</h3>
        <p>Our coffee is sourced from the finest beans, roasted to perfection, and brewed fresh daily.</p>
      </div>
      <div class="feature-card">
        <img src="image\menu-img\breakfast\breakfast-burrito.png" alt="Delicious Pastries" />
        <h3>Delicious Pastries</h3>
        <p>Indulge in our selection of pastries, baked fresh every morning with love and care.</p>
      </div>
      <div class="feature-card">
        <img src="image\menu-img\snacks\hummus-veggies.png" alt="Cozy Atmosphere" />
        <h3>Cozy Atmosphere</h3>
        <p>Enjoy the cozy ambiance of our cafe, now available for you to experience at home.</p>
      </div>
    </div>
  </section>
<br>
<br>


  <?php include('footer.php') ?>



  <!-- favorite Script -->

  <script>
    const items = [
      {
        img: "image/menu-img/breakfast/avocado-toast.png",
        title: "Chocolate Chip Muffin",
        desc: "Soft and gooey, loaded with chocolate chips."
      },
      {
        img: "image/menu-img/breakfast/breakfast-burrito.png",
        title: "Caramel Macchiato",
        desc: "Rich espresso with sweet caramel milk foam."
      },
      {
        img: "image/menu-img/breakfast/oatmeal.png",
        title: "Paneer Tikka Sandwich",
        desc: "Grilled paneer with fresh veggies and spice."
      },
      {
        img: "image/menu-img/breakfast/pancakes.png",
        title: "Paneer Tikka Sandwich",
        desc: "Grilled paneer with fresh veggies and spice."
      },
      {
        img: "image/menu-img/breakfast/waffles.png",
        title: "Paneer Tikka Sandwich",
        desc: "Grilled paneer with fresh veggies and spice."
      },
      {
        img: "image/menu-img/breakfast/yogurt-parfait.png",
        title: "Paneer Tikka Sandwich",
        desc: "Grilled paneer with fresh veggies and spice."
      }
    ];

    const track = document.getElementById("sliderTrack");

    function createCard(item) {
      return `
     
        <div class="card">
          <img src="${item.img}" alt="${item.title}">
          <h3>${item.title}</h3>
          <p>${item.desc}</p>
           <a href="menu.php"><button>View</button></a>
        </div>
      `;
    }


    // Fill the slider with enough items to loop smoothly
    for (let i = 0; i < 4; i++) {
      items.forEach(item => {
        track.innerHTML += createCard(item);
      });
    }
  </script>



</body>

</html>
