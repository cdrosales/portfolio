<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?> 
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title');?></title>
</head>
<body <?php body_class();?>> 

<div class="header-wrapper">

    <a href="http://cararosales.com">
        <h1><?php bloginfo(); ?></h1>
    </a>

    <div class="nav">
        <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
    </div>
    
</div>