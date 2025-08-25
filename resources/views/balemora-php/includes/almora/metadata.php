<?php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == 'balemora-almora-overview.php') {
?>
    <title>Balemora Wellness Retreats | Balemora Almora</title>
    <meta name="description" content="Balemora Almora, nestled in the Himalayan foothills, offers a serene retreat with breathtaking views, perfect for reconnecting with nature and finding inner peace." />
<?php
} else if ($currentPage == 'balemora-almora-living.php') {
?>
    <title>Balemora Wellness Retreats | Balemora Almora | Living</title>
    <meta name="description" content="Unwind in elegant spaces offering breathtaking views, premium amenities, and warm hospitality for a peaceful retreat or luxurious escape." />
<?php
} else if ($currentPage == "balemora-almora-gallery.php") {
?>
    <title>Balemora Wellness Retreats | Balemora Almora | Gallery</title>
    <meta name="description" content="Take a visual stroll through Balemora Almora, where every frame captures the charm, tranquility, and beauty of life amidst nature's serenity." />
<?php
} else if ($currentPage == "balemora-almora-special-offers.php") {
?>
    <title>Balemora Wellness Retreats | Balemora Almora | Offers</title>
    <meta name="description" content="Exclusive offers and handpicked packages designed to elevate your stay, whether you're here to unwind, explore, or celebrate." />
<?php
} else if ($currentPage == "balemora-almora-contact-us.php") {
?>
    <title>Balemora Wellness Retreats | Balemora Almora | Contact Us</title>
    <meta name="description" content="Have questions or ready to plan your stay? We’re just a message away. Reach out and let us help you experience Balemora Wellness Retreats." />
<?php
}
?>