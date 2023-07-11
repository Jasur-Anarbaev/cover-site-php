<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package RedHat
*/

?>



<footer class="footer">
<div class="container">
<div class="footer_inner">
<div class="footer_logo">
<img src="<?php the_field('header_logo'); ?>" alt="logo">
</div>
<div class="footer_nav">
<?php the_field('footer_text');?>
</div>
<div class="footer_map">
<img src="<?php the_field('footer_location'); ?>" alt="location">
<div class="footer_infor">
<div class="footer_title"><?php the_field('footer_title');?></div>
<div class="footer_subtitle"><?php the_field('footer_subtitle');?></div>
</div>
</div>
<div class="footer_connection">
<div class="footer_alinks">
<a href="https://t.me/albaaru" target="_blank"><img src="<?php the_field('footer_telegram_logo');?>"
alt=""></a> <a href="https://wa.me/996558131339" target="_blank"><img
src="<?php the_field('footer_whatsapp_logo');?>" alt=""></a> <a
href="https://instagram.com/_borzz07" target="_blank"><img
src="<?php the_field('footer_instagram-logo');?>" alt=""></a>
</div>
<div class="footer_info">
<img src="<?php echo get_template_directory_uri(); ?>/assets/svg/service/review.svg" alt="">
<div class="footer_info2">
<div class="footer_num"><?php the_field('footer_number');?></div>

</div>
</div>
</div>

</div>

<div class="footer_alinks2">
<a href="https://t.me/albaaru" target="_blank"><img src="./assets/svg/service/telegram.svg"
alt=""></a> <a href="https://wa.me/996558131339" target="_blank"><img
src="<?php echo get_template_directory_uri(); ?>/assets/svg/service/whatsapp.svg" alt=""></a> <a
href="https://instagram.com/_borzz07" target="_blank"><img
src="<?php echo get_template_directory_uri(); ?>/assets/svg/service/instagram copy.svg" alt=""></a>
</div>

<div class="footer_subtitles">
<div class="footer_subtitle2"> <?php the_field('footer_design_system_');?></div>
</div>
</div>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="<?php  echo get_template_directory_uri(); ?>/index.js"></script>

</body>
<?php wp_footer(); ?>
</html>