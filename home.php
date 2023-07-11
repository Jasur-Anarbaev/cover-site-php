<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<div class="header_main">
<div class="header_title"><?php the_field('main_title');?></div>
<div class="header_subtitle"><?php the_field('main_subtitle');?></div>
<?php the_field('main_info');?>  

<a href="#Заказать">
<button type="submit" class="header_submit">Заказать химчистку</button></a>
</div>
</div>
</div>
</header>


<section class="section" id="Услуги">
<div class="container">
<div class="category">
<div class="category_title"><?php the_field('clean_title');?></div>
<div class="category_subtitle">
<?php the_field('clean_subtitle');?>
</div>
</div>
<div class="section_inner">
<div id="section_items" class="section_items">
<?php
global $post;

$myposts = get_posts([ 
    'numberposts' => 6,
]);

if( $myposts ){
    foreach( $myposts as $post ){
        setup_postdata( $post );
        ?>
        <div class="section_item">
        <div>
        <?php the_post_thumbnail(
            array(490, 266),
            array(
                'class' => 'section_img'
                )
            );?>
            <div class="section_name"> <?php the_title(); ?> </div>
            <div class="section_priced"><?php the_content(); ?></div>
            <button class="section_button">Подробнее</button>
            </div>
            <div id="section_info" class="section_info">
            <button class="section_clos">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="" />
            </button>
            
            <div class="section_information">
            <div class="section_title">Стулья</div>
            <div class="section_price">(от 2000 сом)</div>
            </div>
            <div class="section_infos">
            <div class="section_titles">Срок работы:</div>
            <div class="section_suptitle">3-4 дня</div>
            </div>
            <div class="section_infos">
            <div class="section_titles">Вывоз доставка:</div>
            <div class="section_suptitle">Бесплатно</div>
            </div>
            <div class="section_infos">
            <div class="section_titles">Минимальный заказ:</div>
            <div class="section_suptitle">1000 сом</div>
            </div>
            <button class="section_stock">Скидка на самовывоз 10 %</button>
            </div>
            </div>
            <?php 
        }
    } else {
        
    }
    
    wp_reset_postdata(); 
    ?>
    <div class="section_item">
    <div>
    <img class="section_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section_images/1.png" alt="">
    <div class="section_name">Мойка ковров</div>
    <div class="section_priced">от 2000 сом</div>
    <button class="section_button">Подробнее</button>
    </div>
    <div id="section_info" class="section_info">
    <button class="section_clos">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="" />
    </button>
    
    <div class="section_information">
    <div class="section_title">Стулья</div>
    <div class="section_price">(от 2000 сом)</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Срок работы:</div>
    <div class="section_suptitle">3-4 дня</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Вывоз доставка:</div>
    <div class="section_suptitle">Бесплатно</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Минимальный заказ:</div>
    <div class="section_suptitle">1000 сом</div>
    </div>
    <button class="section_stock">Скидка на самовывоз 10 %</button>
    </div>
    </div> 
    
    <div class="section_item">
    <div>
    <img class="section_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section_images/2.png" alt="">
    <div class="section_name">Химчистка мебели</div>
    <div class="section_priced">от 2000 сом</div>
    <button class="section_button">Подробнее</button>
    </div>
    
    <div id="section_info" class="section_info">
    <button class="section_clos">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="" />
    </button>
    <div class="section_information">
    <div class="section_title">Стулья</div>
    <div class="section_price">(от 2000 сом)</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Срок работы:</div>
    <div class="section_suptitle">3-4 дня</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Вывоз доставка:</div>
    <div class="section_suptitle">Бесплатно</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Минимальный заказ:</div>
    <div class="section_suptitle">1000 сом</div>
    </div>
    <button class="section_stock">Скидка на самовывоз 10 %</button>
    </div>
    </div>
    
    <div class="section_item">
    <div>
    <img class="section_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section_images/3.png" alt="">
    <div class="section_name">Стирка одиялов</div>
    <div class="section_priced">от 2000 сом</div>
    <button class="section_button">Подробнее</button>
    </div>
    
    <div id="section_info" class="section_info">
    <button class="section_clos">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="" />
    </button>
    <div class="section_information">
    <div class="section_title">Стулья</div>
    <div class="section_price">(от 2000 сом)</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Срок работы:</div>
    <div class="section_suptitle">3-4 дня</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Вывоз доставка:</div>
    <div class="section_suptitle">Бесплатно</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Минимальный заказ:</div>
    <div class="section_suptitle">1000 сом</div>
    </div>
    <button class="section_stock">Скидка на самовывоз 10 %</button>
    </div>
    </div>
    
    <div class="section_item">
    <div>
    <img class="section_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section_images/4.png" alt="">
    <div class="section_name">Стирка штор</div>
    <div class="section_priced">от 2000 сом</div>
    <button class="section_button">Подробнее</button>
    </div>
    
    <div id="section_info" class="section_info">
    <button class="section_clos">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="" />
    </button>
    <div class="section_information">
    <div class="section_title">Стулья</div>
    <div class="section_price">(от 2000 сом)</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Срок работы:</div>
    <div class="section_suptitle">3-4 дня</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Вывоз доставка:</div>
    <div class="section_suptitle">Бесплатно</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Минимальный заказ:</div>
    <div class="section_suptitle">1000 сом</div>
    </div>
    <button class="section_stock">Скидка на самовывоз 10 %</button>
    </div>
    </div>
    
    <div class="section_item">
    <div>
    <img class="section_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section_images/5.png" alt="">
    <div class="section_name">Чистка тошоков</div>
    <div class="section_priced">от 2000 сом</div>
    <button class="section_button">Подробнее</button>
    </div>
    
    <div id="section_info" class="section_info">
    <button class="section_clos">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="" />
    </button>
    <div class="section_information">
    <div class="section_title">Стулья</div>
    <div class="section_price">(от 2000 сом)</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Срок работы:</div>
    <div class="section_suptitle">3-4 дня</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Вывоз доставка:</div>
    <div class="section_suptitle">Бесплатно</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Минимальный заказ:</div>
    <div class="section_suptitle">1000 сом</div>
    </div>
    <button class="section_stock">Скидка на самовывоз 10 %</button>
    </div>
    </div>
    
    <div class="section_item">
    <div>
    <img class="section_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section_images/6.png" alt="">
    <div class="section_name">Химчистка одежды</div>
    <div class="section_priced">от 2000 сом</div>
    <button class="section_button">Подробнее</button>
    </div>
    
    <div id="section_info" class="section_info">
    <button class="section_clos">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="" />
    </button>
    <div class="section_information">
    <div class="section_title">Стулья</div>
    <div class="section_price">(от 2000 сом)</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Срок работы:</div>
    <div class="section_suptitle">3-4 дня</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Вывоз доставка:</div>
    <div class="section_suptitle">Бесплатно</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Минимальный заказ:</div>
    <div class="section_suptitle">1000 сом</div>
    </div>
    <button class="section_stock">Скидка на самовывоз 10 %</button>
    </div>
    </div>
    
    <div class="section_item active">
    <div>
    <img class="section_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section_images/7.png" alt="">
    <div class="section_name">Химчистка текстиля</div>
    <div class="section_priced">от 2000 сом</div>
    <button class="section_button">Подробнее</button>
    </div>
    
    <div id="section_info" class="section_info">
    <button class="section_clos">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="" />
    </button>
    <div class="section_information">
    <div class="section_title">Стулья</div>
    <div class="section_price">(от 2000 сом)</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Срок работы:</div>
    <div class="section_suptitle">3-4 дня</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Вывоз доставка:</div>
    <div class="section_suptitle">Бесплатно</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Минимальный заказ:</div>
    <div class="section_suptitle">1000 сом</div>
    </div>
    <button class="section_stock">Скидка на самовывоз 10 %</button>
    </div>
    </div>
    
    <div class="section_item active">
    <div>
    <img class="section_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/section_images/7.png" alt="">
    <div class="section_name">Химчистка текстиля</div>
    <div class="section_priced">от 2000 сом</div>
    <button class="section_button">Подробнее</button>
    </div>
    
    <div id="section_info" class="section_info">
    <button class="section_clos">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close.svg" alt="" />
    </button>
    <div class="section_information">
    <div class="section_title">Стулья</div>
    <div class="section_price">(от 2000 сом)</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Срок работы:</div>
    <div class="section_suptitle">3-4 дня</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Вывоз доставка:</div>
    <div class="section_suptitle">Бесплатно</div>
    </div>
    <div class="section_infos">
    <div class="section_titles">Минимальный заказ:</div>
    <div class="section_suptitle">1000 сом</div>
    </div>
    <button class="section_stock">Скидка на самовывоз 10 %</button>
    </div>
    </div>
    </div>
    
    <button id="section_show_button" class="section_button2">Увидеть больше</button>
    <button id="section_hide_button" class="section_button2" hidden>Увидеть меньше</button>
    </div>
    </div>
    </section>
    
    <section class="cleaning" id="Примерыработ">
    <div class="container">
    <div class="category">
    <div class="category_title"><?php the_field('cleaning_title'); ?></div>
    <div class="category_subtitle active">
    
    <?php the_field('cleaning_subtitle');?>
    </div>
    </div>
    
    <div class="cleaning_inner">
    <div class="cleaning_video">
    <img width="100%" height="665px" class="cleaning_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cleaning.png" alt="">
    <button class="cleaning_button" id="dad"><svg width="34" height="36" viewBox="0 0 34 36" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path id="sis"
    d="M3 17.9062V11.6762C3 3.95282 8.48333 0.779485 15.18 4.65282L20.57 7.77948L25.96 10.9062C32.6567 14.7795 32.6567 21.1028 25.96 24.9762L20.57 28.1028L15.18 31.2295C8.48333 35.0328 3 31.8828 3 24.1362V17.9062Z"
    stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"
    stroke-linejoin="round" />
    </svg></button>
    <video controls preload="auto" class="cleaning_mp4" width="100%" height="665px">
    <source src="<?php echo get_template_directory_uri();?>/assets/img/get.mp4" type='video/ogg; codecs="theora, vorbis"'>
    </video>
    </div>
    </div>
    
    <div class="cleaning_items">
    <div class="cleaning_item">
    <?php the_field('cleaning_text1'); ?>
    
    </div>
    <div class="cleaning_item">
    <?php the_field('cleaning_text2'); ?>
    
    </div>
    <div class="cleaning_item">
    <?php the_field('cleaning_text3'); ?>
    
    </div>
    
    </div>
    </section>
    
    
    <section class="equipments">
    <div class="feedbacks_header">
    <h2><?php the_field('furniture_title');?></h2>
    <p><?php the_field('furniture_subtitle');?></p>
    </div>
    
    <div class="equimpent_imgs">
    <div class="grid_element">
    <img src="<?php the_field('equimpent_img1');?>" alt="">
    </div>
    <div class="grid_element">
    <img src="<?php the_field('equimpent_img2');?>" alt="">
    </div>
    <div class="grid_element">
    <img src="<?php the_field('equimpent_img3');?>" alt="">
    </div>
    <div class="grid_element">
    <img src="<?php the_field('equimpent_img4');?>" alt="">
    </div>
    </div>
    
    <div class="swiper tranding-slider">
    <div class="swiper-wrapper">
    <div class="grid_element swiper-slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/1.png" alt="">
    </div>
    <div class="grid_element swiper-slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/2.png" alt="">
    </div>
    <div class="grid_element swiper-slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/3.png" alt="">
    </div>
    <div class="grid_element swiper-slide">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/4.png" alt="">
    </div>
    </div>
    <div class="tranding-slider-control">
    <div class="swiper-button-prev slider-arrow">
    <ion-icon name="arrow-back-outline"></ion-icon>
    </div>
    <div class="swiper-button-next slider-arrow">
    <ion-icon name="arrow-forward-outline"></ion-icon>
    </div>
    <div class="swiper-pagination"></div>
    </div>
    </div>
    
    </section>
    
    <section class="feedbacks" id="Отзывы">
    <div class="feedbacks_header">
    <h2><?php the_field('reviews_title') ?></h2>
    <p><?php the_field('reviews_subtitle') ?></p>
    </div>
    <div class="swiper tranding-slider">
    <div class="swiper-wrapper">
    
    <div class="feedback swiper-slide">
    <?php the_field('reviews_content1');?>
    
    </div>
    
    <div class="feedback swiper-slide">
    <?php the_field('reviews_content2');?>
    
    </div>
    
    <div class="feedback swiper-slide">
    <?php the_field('reviews_content3');?>
    
    </div>
    
    <div class="feedback swiper-slide">
    <?php the_field('reviews_content1');?>
    
    </div>
    </div>
    
    
    <div class="tranding-slider-control">
    <div class="swiper-button-prev slider-arrow">
    <ion-icon name="arrow-back-outline"></ion-icon>
    </div>
    <div class="swiper-button-next slider-arrow">
    <ion-icon name="arrow-forward-outline"></ion-icon>
    </div>
    <div class="swiper-pagination"></div>
    </div>
    </div>
    </section>
    
    
    <section class="contact-from" id="Заказать">
    <div class="form_container">
    <h2><?php the_field('service_title');?></h2>
    <p><?php the_field('service_subtitle');?></p>
    
    <form id="formdata" action="mailto:nurulllob@gmail.com" method="post">
    <?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]'); ?>
    </form>
    
    <div class="thank">
    <div class="thankyou">
    <img class="service_img" src="<?php echo get_template_directory_uri(); ?>/assets/svg/service/thankyou.svg" alt="">
    <div class="thankyou_info">Спасибо мы приняли ваш запрос в скором времени
    наши специалисты с вами свяжуться</div>
    </div>
    </div>
    
    <div class="address_container">
    <?php  the_field('service_icons');?>
    </div>
    </div>
    
    <img class="form_main_img" src="<?php the_field('service_img');?>" alt="">
    
    <div class="swiper tranding-slider">
    <div class="swiper-wrapper">
    <div class="grid_element swiper-slide">
    <img src="<?php the_field('slider_img1');?>" alt="">
    </div>
    <div class="grid_element swiper-slide">
    <img src="<?php the_field('slider_img2');?>" alt="">
    
    </div>
    <div class="grid_element swiper-slide">
    <img src="<?php the_field('slider_img3');?>" alt="">
    
    </div>
    </div>
    <div class="tranding-slider-control">
    <div class="swiper-button-prev slider-arrow">
    <ion-icon name="arrow-back-outline"></ion-icon>
    </div>
    <div class="swiper-button-next slider-arrow">
    <ion-icon name="arrow-forward-outline"></ion-icon>
    </div>
    <div class="swiper-pagination"></div>
    </div>
    </div>
    
    </section>
    <?php get_footer(); ?>
    
    
    