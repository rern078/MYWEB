<?php
include_once "global.php";

function getPageFile()
{
      $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $segments = explode('/', trim($path, '/'));
      $page = end($segments);
      $template = $_SESSION['Template'] ?? 'template1'; // Default fallback

      switch ($page) {
            case 'login':
                  $file = "resources/login/login_{$template}.php";
                  break;
            case 'register':
                  $file = "resources/signup/register_{$template}.php";
                  break;
            case 'blog-category':
                  $file = "resources/games/category/blog_category_{$template}.php";
                  break;
            case '404':
                  $customPage = "resources/404/404_{$template}.php";
                  $file = file_exists($customPage) ? $customPage : "resources/404/404.php";
                  break;
            case 'contact-us':
                  $customPage = "resources/contactus/contact_{$template}.php";
                  $file = file_exists($customPage) ? $customPage : "resources/contactus/contactus.php";
                  break;
            case '':
            case 'index':
            default:
                  $file = "resources/index/index_{$template}.php";
                  break;
      }

      // Debug information (remove in production)
      if (isset($_GET['debug'])) {
            echo "Page: " . $page . "<br>";
            echo "Template: " . $template . "<br>";
            echo "File: " . $file . "<br>";
            echo "File exists: " . (file_exists($file) ? 'Yes' : 'No') . "<br>";
      }

      return $file;
}
