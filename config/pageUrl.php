<?php
include_once "global.php";

function getPageFile()
{
      $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $segments = explode('/', trim($path, '/'));
      $page = end($segments);
      $template = $_SESSION['Template'] ?? '';

      switch ($page) {
            case 'login':
                  return "resources/login/login_{$template}.php";
            case 'register':
                  return "resources/signup/register_{$template}.php";
            case 'blog-category':
                  return "resources/games/category/blog_category_{$template}.php";
            case '404':
                  $customPage  = "resources/404/404_{$template}.php";
                  return file_exists($customPage) ? $customPage : "resources/404/404.php";
            case 'contact-us':
                  $customPage = "resources/contactus/contact_{$template}.php";
                  return file_exists($customPage) ? $customPage : "resources/contactus/contactus.php";
            case '':
            case 'index':
            default:
                  return "resources/index/index_{$template}.php";
      }
}
