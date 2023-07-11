

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
<meta charset="<?php bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animation.css">
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div class="top_header">
<div class="container">
<div class="header_items">
<div class="header_logo">
<img src="<?php the_field('header_logo'); ?>" alt="logo">
</div>

<div class="header_nav">
<?php the_field('list-navbar'); ?>
</div>

<div class="header_connect">
<a href="https://t.me/albaaru" target="_blank" rel="noopener noreferrer">
<img src="<?php the_field('telegram_logo');?>" alt="telegram">
</a>
<a href="https://wa.me/996558131339" target="_blank" rel="noopener noreferrer">

<img src="<?php the_field('whatsapp_logo');?>" alt="whatsapp">

</a>
<div class="header_connection">
<div class="header_num"><?php the_field('header-number');?></div>

</div>
</div>


<div class="header_burger">
<img id="burger" src="<?php echo get_template_directory_uri(); ?>/assets/svg/burger.svg" alt="">
</div>

<div id="close" class="header_close">
<img src="<?php echo get_template_directory_uri(); ?>/assets/svg/burgerclose.svg" alt="">
</div>


</div>
</div>
</div>


<header class="header"
style="background: url('<?php the_field('main_img');?>') no-repeat; background-size: cover; background-position: top center;">
<div class="container">
<div class="header_inner">
<div class="header_items">
<div class="header_logo">
<img src="<?php the_field('header_logo'); ?>" alt="logo">
</div>

<div class="header_nav">
<?php the_field('list-navbar'); ?>

</div>

<div class="header_connect">
<a href="https://t.me/albaaru" target="_blank" rel="noopener noreferrer">
<img src="<?php the_field('telegram_logo');?>" alt="telegram">
</a>
<a href="https://wa.me/996558131339" target="_blank" rel="noopener noreferrer">

<img src="<?php the_field('whatsapp_logo');?>" alt="whatsapp">


</a>
<div class="header_connection">
<div class="header_num"><?php the_field('header-number');?></div>

</div>

</div>

<div class="header_burger">
<img id="burger" src="<?php echo get_template_directory_uri(); ?>/assets/svg/burger.svg" alt="">
</div>

<div id="close" class="header_close">
<img src="<?php echo get_template_directory_uri(); ?>/assets/svg/burgerclose.svg" alt="">
</div>


</div>


<div id="menu" class="header_menu">

<div class="menu_header">
<div class="menu_header_inner">
<!-- <div class="menu_header__logo"><img src="<?php the_field('header_logo'); ?>" alt="logo"></div> -->
<div class="menu_header__closeBtn"><img id="burger" src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="">
</div>
</div>
</div>
<div class="header_menuinner">


<div class="header_nav2">
<a href="#Услуги" class="header_links active">Услуги</a>
<a href="#Примерыработ" class="header_links active">Примеры работ</a>
<a href="#Отзывы" class="header_links active">Отзывы</a>
<a href="#Заказать" class="header_links active">Заказать</a>
</div>

<div class="header_connect2">
<div class="header_connection">
<div class="header_num"><?php the_field('header-number');?></div>

</div>

<div class="header_sites">

<a href="https://t.me/albaaru" target="_blank">
<img src="<?php the_field('telegram_logo');?>" alt="telegram">


</a>
<a href="https://wa.me/996558131339" target="_blank">
<img src="<?php the_field('whatsapp_logo');?>" alt="whatsapp">

</a>
<a href="https://instagram.com/_borzz07" target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/assets/svg/service/instagram copy.svg" alt="">
</a>
</div>
</div>
</div>
</div>