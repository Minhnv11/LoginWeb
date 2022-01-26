<?php
#Get header
function get_header(){
    $path_header = "include/header.php" ;
    if(file_exists($path_header)){
        require($path_header);
    }else{
        // require "include/404.php";
    }
}
#Get footer
function get_footer(){
    $path_footer = "include/footer.php";
    if(isset($path_footer)){
        require($path_footer);
    }else{

    }
}

#Show Array
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

# Redirect
function redirect($url){
    if(isset($url)){
        header("Location: {$url}");
    }
}

?>