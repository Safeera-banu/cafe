<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHOP | THE DAILY GRIND</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <?php include('header.php') ?>

  <main class="cart-page">
    <h1>Your Cart</h1>
    <div id="cart-items"></div>
  </main>

  <script>
    const cartItemsDiv = document.getElementById("cart-items");
    const cart = JSON.parse(localStorage.getItem("cart")) || [];

    if (cart.length === 0) {
      cartItemsDiv.innerHTML = "<p>Your cart is empty.</p>";
    } else {
      cart.forEach((item) => {
        const itemDiv = document.createElement("div");
        itemDiv.innerHTML = `
          <img src="${item.image}" alt="${item.name}" />
          <h3>${item.name}</h3>
          <p>Price: Rs. ${item.price}</p>
          <p>Quantity: ${item.quantity}</p>
        `;
        cartItemsDiv.appendChild(itemDiv);
      });
    }
  </script>

  <?php include('footer.php') ?>
</body>

</html>
