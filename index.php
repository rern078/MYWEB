<?php
session_start();
$host = $_SERVER['HTTP_HOST'];
if (isset($_GET['template'])) {
      $safeTemplate = basename($_GET['template']);
      $_SESSION['dir'] = $safeTemplate;
}

define('DEV_HOST', '10.0.0.89:2003');
if ($_SERVER['HTTP_HOST'] === DEV_HOST) {
      $_SESSION['dir'] = 'sasa006';
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
} else {
      // Default fallback if no template is detected
      $_SESSION['Template'] = 'template1';
}

$templateName = $_SESSION['Template'];
$publicPath = "public/{$templateName}";
$imagePath = $publicPath; // Add this line to define imagePath for template2

include_once "./config/pageUrl.php";
$contentPage = getPageFile();

// Debug information (remove in production)
if (isset($_GET['debug'])) {
      echo "Template: " . $template . "<br>";
      echo "Template Name: " . $templateName . "<br>";
      echo "Public Path: " . $publicPath . "<br>";
      echo "Content Page: " . $contentPage . "<br>";
      echo "File exists: " . (file_exists($contentPage) ? 'Yes' : 'No') . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <?php require_once "config/layouts/title/title.inc.php"; ?>
</head>

<body data-dir="<?php echo htmlspecialchars($template); ?>" data-template="<?php echo htmlspecialchars($_SESSION['Template'] ?? ''); ?>" <?php if ($templateName == 'template1') { ?> class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-gray-200 overflow-x-hidden" <?php } ?>>
      <?php
      // Include header
      $headerFile = "config/layouts/header/header_{$templateName}.php";
      if (file_exists($headerFile)) {
            include $headerFile;
      } else {
            echo "<!-- Header file not found: " . htmlspecialchars($headerFile) . " -->";
            echo "<p>Header not found for template: " . htmlspecialchars($templateName) . "</p>";
      }

      // Page content
      if (file_exists($contentPage)) {
            include $contentPage;
      } else {
            echo "<p>Page not found: " . htmlspecialchars($contentPage) . "</p>";
            echo "<p>Template: " . htmlspecialchars($templateName) . "</p>";
            echo "<p>Public Path: " . htmlspecialchars($publicPath) . "</p>";
      }

      // Include footer
      $footerFile = "config/layouts/footer/footer_{$templateName}.php";
      if (file_exists($footerFile)) {
            include $footerFile;
      } else {
            echo "<!-- Footer file not found: " . htmlspecialchars($footerFile) . " -->";
            echo "<p>Footer not found for template: " . htmlspecialchars($templateName) . "</p>";
      }

      // Global settings
      include_once "./config/global.php";
      ?>

</body>

</html>