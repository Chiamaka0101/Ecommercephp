<?php
$recommendation = '';
if (isset($_COOKIE['categoryPreference'])) {
    $preference = $_COOKIE['categoryPreference'];
    if ($preference == 'accessories') {
        $recommendation = "You might like our newest bows, pins, and clawclips!";
    } elseif ($preference == 'products') {
        $recommendation = "Check out our natural hair oils and conditioners!";
    }
}
?>
<?php if ($recommendation): ?>
  <div class="recommendation">
    <p><strong>Recommended for you:</strong> <?= $recommendation ?></p>
  </div>
<?php endif; ?>