<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CONTACT | THE DAILY GRIND</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
  
  <!-- header  -->
  <?php include('header.php') ?>

  <section class="contact-section">
    <div class="contact-header">
      <h2>Contact Us</h2>
      <p>We’d love to hear from you! Feel free to get in touch via the form or contact details below.</p>
    </div>

    <div class="contact-container">
      <!-- Contact Info -->
      <div class="contact-info">
        <h3>Café Details</h3>
        <p><strong>Address:</strong> 123 Brew Street, Bean City</p>
        <p><strong>Phone:</strong> +91 9876543210</p>
        <p><strong>Email:</strong> info@dailygrindcafe.com</p>

        <div class="map-container">
          <!-- Map Placeholder (you can embed a real map here) -->
          <iframe src="https://www.google.com/maps/embed?..." frameborder="0" class="contact-map"
            allowfullscreen=""></iframe>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <h3>Send a Message</h3>
        <form>
          <input type="text" placeholder="Your Name" required />
          <input type="email" placeholder="Your Email" required />
          <textarea rows="5" placeholder="Your Message" required></textarea>
          <button type="submit">Send Message</button>
        </form>
      </div>
    </div>
  </section>




  <!-- <section class="opening-hours">
  <h2>Opening Hours</h2>
  <ul>
    <li><strong>Monday – Friday:</strong> 8:00 AM – 8:00 PM</li>
    <li><strong>Saturday – Sunday:</strong> 9:00 AM – 10:00 PM</li>
  </ul>
</section> -->

  <!-- <section class="hours-section">
  <div class="container">
    <h2 class="section-title">Opening Hours</h2>
    <div class="hours-card">
      <ul>
        <li><span>Monday – Friday</span><span>8:00 AM – 8:00 PM</span></li>
        <li><span>Saturday</span><span>9:00 AM – 10:00 PM</span></li>
        <li><span>Sunday</span><span>9:00 AM – 10:00 PM</span></li>
      </ul>
    </div>
  </div>
</section> -->




  <!-- why choose us -->

  <!-- <section class="why-choose-us">
    <div class="container"></div>
    <h2>Why Choose Us?</h2>
    <hr>

    <div class="features-flex">
      <div class="">
        <span>🌿</span>
        <h3>Quality Ingredients</h3>
        <p>We use only the finest, ethically sourced ingredients.</p>
      </div>
      <div class="">
        <span>🚚</span>
        <h3>Fast Delivery</h3>
        <p>Get your order delivered quickly and efficiently.</p>
      </div>
      <div class="">
        <span>🧼</span>
        <h3>Hygiene Standards</h3>
        <p>We maintain the highest standards of cleanliness and hygiene.</p>
      </div>
     
    </div>
    </div>
  </section> -->
  <!-- Why Choose Us Section -->
  <section class="why-choose-us">
    <div class="container">
      <h2>Why Choose Us</h2>
      <div class="features">
        <div class="feature-card">
          <i class="fa-solid fa-mug-hot"></i>
          <h3>Premium Quality</h3>
          <p>We serve the finest coffee, brewed with high-quality beans and ingredients.</p>
        </div>
        <div class="feature-card">
          <i class="fa-solid fa-truck-fast"></i>
          <h3>Fast Delivery</h3>
          <p>Your favorite food and drinks delivered to your door in no time.</p>
        </div>
        <div class="feature-card">
          <i class="fa-solid fa-leaf"></i>
          <h3>Eco Friendly</h3>
          <p>We care for the planet—eco-friendly packaging and sustainability practices.</p>
        </div>
        <div class="feature-card">
          <i class="fa-solid fa-users"></i>
          <h3>Friendly Staff</h3>
          <p>Our team is dedicated to making your visit warm and welcoming every time.</p>
        </div>
      </div>
    </div>
  </section>



  <!-- footer  -->

  <?php include('footer.php') ?>

</body>

</html>
