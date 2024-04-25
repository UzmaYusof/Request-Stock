  <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
    <h2>Cart</h2>
    <ul>
      <?php foreach ($_SESSION['cart'] as $stock): ?>
        <li><?= htmlspecialchars($stock) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <?php if (isset($_POST['add_to_cart'])): ?>
    <?php
    // Add the selected stock to the cart
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }
    $_SESSION['cart'][] = htmlspecialchars($_POST['stock']);
    ?>
    <p>The selected stock has been added to the cart.</p>
  <?php endif; ?>