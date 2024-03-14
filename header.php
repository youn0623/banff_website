<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banff Website</title>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css');?>">
    <?php wp_head();?>
</head>
<body>
    <nav>
        <a href="<?php echo get_theme_file_uri('front-page.php');?>">Home</a>
        <a href="<?php echo get_theme_file_uri('front-page.php');?>">About</a>
        <a href="<?php echo get_theme_file_uri('front-page.php');?>">Contact</a>
        <a href="<?php echo get_theme_file_uri('front-page.php');?>">Attractions</a>
    </nav>
    <header>
        <p>this is a header</p>
    </header>
