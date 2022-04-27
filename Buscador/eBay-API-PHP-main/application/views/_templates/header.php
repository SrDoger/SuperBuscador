<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo SITE_BASE; ?>css/style.css">
    <?php if (function_exists('customPageHeader')){
      // If a single page needs some javascript or other functionality
      // not needed on all pages, include it in the function customPageHeader
      // on that page. 
    customPageHeader();
    }?>

    <title><?php isset($PageTitle) ? print($PageTitle) : print("eBay API Demo")?></title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
     <a class="navbar-brand" href="<?php echo SITE_BASE; ?>home/index">eBay API Demo</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <a class="nav-link" href="<?php echo SITE_BASE; ?>home/index">Setup</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="<?php echo SITE_BASE; ?>home/categories">Categories</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="<?php echo SITE_BASE; ?>home/specifics">Item Specifics</a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href="<?php echo SITE_BASE; ?>home/tokens">Tokens</a>
           </li>
       </ul>
    </div>
  </nav>

  <main role="main" class="container">


    
