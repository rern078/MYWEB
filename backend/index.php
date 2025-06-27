<?php
session_start();
$host = $_SERVER['HTTP_HOST'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$page = end($segments);
include_once "./config/pageUrl.php";
$contentPage = getPageFile();
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <?php include_once("config/inc/title.php") ?>
</head>

<body>
      <?php if ($page == 'login') { ?>
            <?php include "../backend/resources/login.php"; ?>
      <?php } elseif ($page == 'register') { ?>
            <?php include "../backend/resources/register.php"; ?>
      <?php } else { ?>
            <div class="container-scroller">
                  <?php include "config/inc/header.php"; ?>
                  <div class="container-fluid page-body-wrapper">
                        <?php include "config/inc/sidebar.php"; ?>
                        <div class="main-panel">
                              <?php
                              if (file_exists($contentPage)) {
                                    include $contentPage;
                              } else {
                                    echo "<p>Page not found: " . htmlspecialchars($contentPage) . "</p>";
                              }
                              include "config/inc/footer.php";
                              ?>
                        </div>
                  </div>
            </div>
      <?php } ?>
</body>

</html>