<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DM Emgineering Ahmedabad</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="assets/lib/icomoon/icomoon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/lib/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/lib/owl/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

    <!-- Main Stylesheet File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">
    <?php require 'header.php' ?>
    <!-- ==== HEADERWRAP ==== -->
    
    <div class="product-wrap container">
    <?php 
        $type = $_REQUEST["type"];
        switch ($type) {
            case "Cap-Sealing-Machine":
                    $listProducts = $products["Cap Sealing Machine"]; 
                    $listKey = "Cap Sealing Machine";
                    include 'single.php';
                break;
            case "Sticker-Labeling-Machine":
                    $listProducts = $products["Sticker Labeling Machine"]; 
                    $listKey = "Sticker Labeling Machine";
                    include 'single.php';
                break;
            case "Liquid-Filling-Machine":
                    $listProducts = $products["Liquid Filling Machine"]; 
                    $listKey = "Liquid Filling Machine";
                    include 'single.php';
                break;
            case "Washing-Machine":
                    $listProducts = $products["Washing Machine"]; 
                    $listKey = "Washing Machine";
                    include 'single.php';
                break;
            case "Carton-Coding-Machine":
                    $listProducts = $products["Carton Coding Machine"];
                    $listKey = "Carton Coding Machine";
                    include 'single.php'; 
                break;
            case "Capping-Machine":
                    $listProducts = $products["Capping Machine"];
                    $listKey = "Capping Machine";
                    include 'single.php'; 
                break;
            case "Powder-Filling-Machine":
                    $listProducts = $products["Powder Filling Machine"]; 
                    $listKey = "Powder Filling Machine";
                    include 'single.php';
                break;
            case "Label-Coding-Machine":
                    $listProducts = $products["Label Coding Machine"]; 
                    $listKey = "Label Coding Machine";
                    include 'single.php';
                break;
            default:
                    $listProductsAll = $products;
                    include "all.php";
        }
    ?>
    </div>
    <!-- container -->
    <?php require 'footer.php' ?>
    <!-- JavaScript Libraries -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="assets/lib/owl/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>