 <?php
    function header1(
        $body_class = "home-page",
        $wrapper    = false,
        $tooltip    = false,
        $nav_show   = true,
        $nav_item   = "home",
        $title      = "ColoredChain",
        $wp = false
    ) {
        
    // Server root
    $coloredchain = "http://" . $_SERVER['SERVER_NAME'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("/blog", '', dirname($_SERVER['SCRIPT_FILENAME'])));
    
    // Relative root
    $root = "";

    if ($nav_item == "blog") {
        $root = ".";
    }

?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
<?php if ($wp == false) { ?>
    <title><?= $title ?></title>
<?php } ?>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
     <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ff6600">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    
    <link href='/assets/css/roboto.css' rel='stylesheet' type='text/css'> 
    <link href='/assets/css/robotoslab.css' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/plugins/flexslider/flexslider.css">
<?php if ($tooltip == true) { ?>
    <!-- Tooltip -->    
<?php } ?>
    
    <link type="text/css" rel="stylesheet" href="/assets/plugins/rrssb/css/rrssb.css" />
    <!-- Counter Timer CSS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
	<link rel="stylesheet" href="/assets/css/jquery.countdown.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="<?= $body_class ?>">   
<?php if ($wrapper == true) { ?>
    <div class="upper-wrapper">
<?php } ?>
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">
            <h1 class="logo">
                <a href="/"><span class="text">ColoredChain</span><span class="brand"></span></a>
            </h1><!--//coloredchain logo-->
           <?php
                   include($root . "./inc_navbar.php");
                   navbar($nav_show,$nav_item);
            ?>
        </div><!--//container-->
    </header><!--//header-->
<?php    
}
?>