<?php
    session_start();
    if (!isset($_SESSION['role_id'])) {
        header('Location: index.php?chon=t&id=login');
        exit();
    }
    if ($_SESSION['role_id'] == 4) {
        echo'Bạn chưa được cấp quyền truy cập vào trang này';
        exit();
    }
     
        include ("./class/product.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
 
    <title>Shaif's Cuisine</title>
    <!-- <link rel="stylesheet" href="./reset.css"> -->
    <link rel="stylesheet" href="./globalStyles.css">
    <link rel="stylesheet" href="./components.css">
    <link rel="stylesheet" href="./adminClients.css">
    
    <!-- <link rel="stylesheet" href="./css/admin.css"> -->
    <!-- aos library css  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Add your custom css -->
    
    <link rel="stylesheet" href="./components.css">
</head>

<body>
    <!-- Nav Section --><?php

    
       

 

        include("./admin/vieww/adminnav.php");

  


      
        // Contronler
      
         if (isset($_GET['page_layout'])) {
             switch($_GET['page_layout']) {  
     

     
                 case 'sanpham':
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
     

                            
                         include("admin/sanpham/product.php");
                         break;



                case 'themsp':
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
        
   
                                
                            include("admin/sanpham/themsp.php");
                            break;


                case 'xoasp':
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
            
       
                                    
                                include("admin/sanpham/xoasp.php");
                                break;



                case 'suasp':
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
                
           
                                        
                                    include("admin/sanpham/suasp.php");
                                    break;


                                   
     
     
               
     
                  case 'nguoidung':
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
                             include("admin/nguoidung/user.php");
                             break;
     
                 case 'thongke':
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
                                 include("admin/thongke/statistical.php");
                                 break;
                default:
                            include("admin/sanpham/product.php");
                         break;

                
             }
         }
     ?>
     
     <!--
     
     if (isset($_GET['id']))
     -->
  

      
        
    

    
    

    
    <!-- End Footer -->


    <!-- aos script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- custom script -->
    <script src="./main.js"></script>
</body>

</html>