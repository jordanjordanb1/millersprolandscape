<?
include_once(__DIR__.'/../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

$version = $_ENV['VERSION'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name"robots" content="index,follow" />

    <meta name="theme-color" content="#306e23">
    <meta name="msapplication-navbutton-color" content="#306e23">
    <meta name="apple-mobile-web-app-status-bar-style" content="#306e23">
    
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics<?php echo ($_ENV['ENV'] == 'development') ? '_debug' : ''; ?>.js','ga');
        
        ga('create', 'UA-158421781-1', 'auto');
        ga('send', 'pageview');
        
        ga('set', {
          page: '/<?php echo $page; ?>',
          title: '<?php echo $page_name; ?>'
        });
    </script>

    <link rel="apple-touch-icon" sizes="57x57" href="static/assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="static/assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="static/assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="static/assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="static/assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="static/assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="static/assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="static/assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="static/assets/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="static/assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="static/assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="static/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="static/assets/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link href="css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" rel="stylesheet" />
    <link href="css/style.css?v=<? echo md5($version) ?>" rel="stylesheet">

    <link rel="prerender" href="https://millersprolandscape.com/contact" />
    <link rel="prerender" href="https://millersprolandscape.com/pool_installation" />

    <title><?php echo $page_name; ?> | Millers Pro Landscape | Martha's Vineyard</title>
    <link rel="canonical" href="https://millersprolandscape.com/<?php echo $page; ?>" />

    <style>body, html {scroll-behavior:smooth;}</style>

    <script defer src="js/jquery.min.js"></script>
    <script defer src="js/popper.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script
        defer
        src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"
        integrity="sha256-CtKylYan+AJuoH8jrMht1+1PMhMqrKnB8K5g012WN5I="
        crossorigin="anonymous"
    ></script>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="1YhIOyl2"></script>
</head>

<body>

<?php
    include_once('facebook_chat.php');
    include_once('header.php');
    include_once('menu.php');
?>
