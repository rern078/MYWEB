<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>News5</title>
<meta name="description" content="News5 a clean, modern and pixel-perfect multipurpose blogging HTML5 website template.">
<meta name="keywords" content="saas, saas template, site template, software, startup, digital product, html5, landing, marketing, bootstrap, uikit3, agency, ai, digital agency, it solutions, nodejs">
<!-- Open Graph Tags -->
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="News5">
<meta property="og:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
<meta property="og:url" content="https://unistudio.co/html/news5/">
<meta property="og:site_name" content="News5">
<meta property="og:image" content="https://unistudio.co/html/news5/assets/images/common/seo-image.jpg">
<meta property="og:image:width" content="1180">
<meta property="og:image:height" content="600">
<meta property="og:image:type" content="image/png">
<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="News5">
<meta name="twitter:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
<meta name="twitter:image" content="https://unistudio.co/html/news5/assets/images/common/seo-image.jpg">
<?php
if ($_SESSION['Template'] == 'template1') {
      include "config/layouts/title/title_template1.php";
} elseif ($_SESSION['Template'] == 'template2') {
      include "config/layouts/title/title_template2.php";
} elseif ($_SESSION['Template'] == 'template3') {
      include "config/layouts/title/title_template3.php";
} else {
      echo "<p>Title not found.</p>";
}
?>