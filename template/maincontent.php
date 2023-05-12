<?php
    if (isset($_GET['id'])) {
        switch($_GET['id']) {
            case 'home':
                '
                <link rel="stylesheet" href="./reset.css">
                <link rel="stylesheet" href="./globalStyles.css">
                <link rel="stylesheet" href="./components.css">
                <!-- aos library css  -->
                <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
                <!-- Add your custom css -->
                <link rel="stylesheet" href="./home.css">
                <link rel="stylesheet" href="./components.css">
                ';
                include("template/hero.php");
                include("template/storeinfo.php");
                include("template/ourspecial.php");
                include("template/topdishes.php");
                include("template/newsletter.php");
                include("template/eventmedia.php");
                include("template/eventinfo.php");
                include("template/whyus.php");
                include("template/testimonial.php");
                
                break;
            case 'menu':
                '
                <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
                <link rel="stylesheet" href="./reset.css">
                <link rel="stylesheet" href="./globalStyles.css">
                <link rel="stylesheet" href="./components.css">
                <!-- aos library css  -->
                <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
                <!-- Add your custom css -->
                <link rel="stylesheet" href="./menu.css">
                ';
                include("template/menu.php");
                include("template/newsletter.php");
                break;
            case 'about':
                include("template/about.php");
                include("template/newsletter.php");
                break;
            case 'contact':
                include("template/contact.php");
                include("template/newsletter.php");
                break;
            case 'login':
                include("template/login.php");
                break;
            case 'register':
                include("template/register.php");
                
                break;
           case 'cart':
               include("template/cart.php");
               break;
            case 'detail':
                include("template/productdetails.php");
                break;  
            case 'xulycart':
                include("template/xulycart.php");
                break; 
            case 'thanhtoan':
                include("template/thanhtoan.php");
                break;    
        }
    }
    else{
        '
                <link rel="stylesheet" href="./reset.css">
                <link rel="stylesheet" href="./globalStyles.css">
                <link rel="stylesheet" href="./components.css">
                <!-- aos library css  -->
                <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
                <!-- Add your custom css -->
                <link rel="stylesheet" href="./home.css">
                <link rel="stylesheet" href="./components.css">
                ';
                include("template/hero.php");
                include("template/storeinfo.php");
                include("template/ourspecial.php");
                include("template/topdishes.php");
                include("template/newsletter.php");
                include("template/eventmedia.php");
                include("template/eventinfo.php");
                include("template/whyus.php");
                include("template/testimonial.php");
                
    }
?>

<!--

if (isset($_GET['id']))
-->