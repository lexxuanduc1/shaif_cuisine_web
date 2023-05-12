<?php
    include("./class/product.php");
     $product=new product();                  
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Product Details</title>
</head>
<body>
<script type="text/javascript">
    
</script>


   
  <form action="">
      <div class="container_detail">
        <div class="box">
    <?php
      $item = $product->getProductbyId($_GET['id_pro']);
      $product->showProductDetails($item);

    ?>
           
          </div>      

         <a class = "goback" href="javascript: history.go(-1)">Go Back</a>
          
          
  </form>

      <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap');


:root{
    --primary-color: #d6e5d8;
    --secondary-color: #26643b;
    --tertiary-color:#a2de96;
    --yellow-color:#ffb900;
    --gray-color: #808080;
}

*{
    box-sizing: border-box;
    font-family: 'Poppin';
    line-height: 1;
    padding: 0;
    margin: 0;
}

.container_detail{
    /* background-color: var(--primary-color); */
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.box{
    background-color: white;
    border-radius: 10px;
    box-shadow: 5px 5px 10px 1px rgb(0, 0, 0, 12%);
    padding: 45px;
    margin: 15px 0;
    width: 950px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: auto 1fr;
    grid-template-areas: 
    "images info"
    "images description";
    grid-gap: 35px;
}
.box .product_name {
  font-size: 30px;
}
.box .images{
    grid-area: images;
    display: grid;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: auto 1fr;
    grid-template-areas: 
    "active activea active"
    "idle idle idle";
    grid-gap: 5px;
}

.box .iamges .img-holder img{
    width: 100px;
    display: block;
    border-radius: 10px;
}

.box .iamges .img-holder.active{
    grid-area: active;
}

.box .images .img-holder:not(.active):hover{
    opacity: 0.95;
    cursor: pointer;
}

.box .basic-info{
    grid-area: info;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.box .basic-info .rate{
    color: var(--yellow-color);
    /* float: none;
	display: inline-block; */
}

.rate {
    padding: 0 10px 0 0;
    grid-area: info;
    display: flex;
    flex-direction: rows;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float: left;
    width: 15px;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 21px;
    color:#ccc;
	margin-bottom: 0;
	line-height: 21px;
}
.rate:not(:checked) > label:before {
    content: '\2605';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}



.box .basic-info span{
    font-weight: 800;
    font-size: 25px;
}

.box .basic-info .options a{
    font-family: Poppins;
    font-weight: bolder;
    font-size: 13px;
    border: none;
    border-radius: 8px;
    color: white;
    background: var(--green-1);
    width: 120px;
    height: 40px;
    margin-top: 10px;
    letter-spacing: 2px;
}

.box .basic-info .options a:hover{
    background-color: var(--tertiary-color);
}






.box .description{
    grid-area: description;
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.box .description p{
    color: var(--gray-color);
    font-size: 14px;
    line-height: 1.5;
}



.box .description .social{
    list-style: none;
    display: flex;
}

.box .description .social a{
    margin-right: 15px;
    color: var(--gray-color);
}

.box .description .social a:hover{
    color: var(--secondary-color);
}

@media (max-width: 768px){
    .box{
        width: 600px;
        grid-template-areas:
        "images info"
        "description description" ;
    }
    .box .images{
        gap: 3px;
    }
    .box .images .img-holder img{
        border-radius: 5px;
    }
}
        .goback{
          color: white;
          background-color: #26643b;
          display: inline-block;
          padding: 10px 15px;
          text-decoration: none;
          font-weight: 600;
          font-size: 12px;
          border-radius: 5px;
          text-align: center;
        }
        .goback:hover{
          background-color: var(--tertiary-color);
        }
        .goback{
          width:100px;
        }
       
      </style>

    </div>
    
  </div>



</body>
</html>