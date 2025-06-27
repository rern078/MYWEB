<?php
include_once "global.php";

function getPageFile()
{
      $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $segments = explode('/', trim($path, '/'));
      $page = end($segments);

      switch ($page) {
            case 'login':
                  return "../backend/resources/login.php";
            case 'register':
                  return "../backend/resources/register.php";
            case 'blog-category':
                  return "../backend/resources/blog_category.php";
            case 'add-product':
                  return "../backend/resources/products/product_add.php";
            case 'add-category':
                  return "../backend/resources/categories/category_add.php";
            case '404':
                  $customPage  = "../backend/resources/404/404.php";
                  return file_exists($customPage) ? $customPage : "../backend/resources/404/404.php";
            case 'contact-us':
                  $customPage = "../backend/resources/contactus/contact.php";
                  return file_exists($customPage) ? $customPage : "../backend/resources/contactus/contactus.php";
            case '':
            case 'index':
            case 'dashboard':
            default:
                  return "../backend/resources/index.php";
      }
}
