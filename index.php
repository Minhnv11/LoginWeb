<?php
#library
require "library/users.php";
#data
require "data/users.php";
require "data/post.php";
#template
require "library/template.php";

ob_start();
session_start();


    // get_header();
   
    // $page = $_GET['page']; 
    $page = (isset($_GET['page']))?$_GET['page']:'home';
    $path = "pages/{$page}.php";
    if(file_exists($path)){
        require($path);
    }

    if( !is_login() && $page != 'login'){
        redirect("?page=login");
    }

    // get_footer();
?>