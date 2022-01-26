<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pulic/Css/reset.css">
    <link rel="stylesheet" href="./pulic/Css/style.css">
    <title>User Manager</title>
</head>
<body>
    <div id="wrapper">
        <div id="header">
        <div id="user"><p>お帰りなさい <strong><?php if(isset($_SESSION['user_login'])) echo $_SESSION['user_login']; ?></strong> 様 </p></div>
        <div class="logout"><a href="?page=logout">Log out</a></div>
            <div id="logo">
                <div id="logo_text">WEBSITE</div>
            </div>
            <ul id="main_menu">
                <li class="menu_item"><a href="?page=home">HOME</a></li>
                <li class="menu_item"><a href="?page=news">NEWS</a></li>
                <li class="menu_item"><a href="?page=shop">SHOPPING</a></li>
                <li class="menu_item"><a href="?page=video">VIDEO</a></li>
                <li class="menu_item"><a href="?page=sport">SPORT</a></li>
                <li class="menu_item"><a href=""></a></li>
            </ul>
            
        </div>
        <!-- END HEADER  -->
      
  