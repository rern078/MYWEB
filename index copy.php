<?php
session_start();
if (isset($_GET['template'])) {
      $_SESSION['dir'] = $_GET['template'];
}

switch ($_SERVER['HTTP_HOST']) {
      case '10.0.0.89:2003':
            $_SESSION['dir'] = 'sasa007';
            break;
}

$template = $_SESSION['dir'] ?? '';
$template1 = ['fafa008', 'fafa007', 'fafa006'];
$template2 = ['sasa008', 'sasa007', 'sasa006'];
$template3 = ['momo008', 'momo007', 'momo006'];

if (in_array($template, $template1)) {
      $_SESSION['Template'] = 'template1';
} elseif (in_array($template, $template2)) {
      $_SESSION['Template'] = 'template2';
} elseif (in_array($template, $template3)) {
      $_SESSION['Template'] = 'template3';
}

$publicPath = 'public/' . $_SESSION['Template'];
include_once "./config/pageUrl.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <?php require_once "config/layouts/title/title.inc.php" ?>
</head>

<body data-dir="<?php echo htmlspecialchars($template); ?>" data-template="<?php echo htmlspecialchars($_SESSION['Template'] ?? ''); ?>">
      <?php
      if ($_SESSION['Template'] == 'template1') {
            include "config/layouts/header/header_template1.php";
            include "resources/index/index_template1.php";
            include "config/layouts/footer/footer_template1.php";
      } elseif ($_SESSION['Template'] == 'template2') {
            include "config/layouts/header/header_template2.php";
            include "resources/index/index_template2.php";
            include "config/layouts/footer/footer_template2.php";
      } elseif ($_SESSION['Template'] == 'template3') {
            include "config/layouts/header/header_template3.php";
            include "resources/index/index_template3.php";
            include "config/layouts/footer/footer_template3.php";
      } else {
            echo "<p>Template not found.</p>";
      }

      include_once "./config/global.php";
      ?>
</body>

</html>