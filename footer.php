<?php /*findme link to services*/

if ($post->post_parent) {

   if ( get_the_title($post->post_parent) == 'Услуги' &&  !array_search($post->ID, array('', '9505', '9501', '9492'))){ ?>
    <div class='contactHolder'>
        <a href="<?php echo site_url(); ?>/services/" target="_self" class="qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-icon" style="font-size: 16px">
                <span class="qodef-btn-text"><?php _e('Все услуги', 'startit'); ?></span>
            <span class="qodef-btn-text-icon"><i class="qodef-icon-simple-line-icon icon-rocket "></i></span>
        </a>
    </div>

   <?php }
}
?>

<?php

qode_startit_get_footer();

global $qode_startit_toolbar;
if(isset($qode_startit_toolbar)) include("toolbar.php");

?>

<a href="#contact_form_pop" id="fancybox-inline" class="fancybox"></a>
<div style="display:none" class="fancybox-hidden">
<div id="contact_form_pop">
<?php
    if ( shortcode_exists( 'contact-form-7' ) ) {
        echo do_shortcode('[contact-form-7 id="7079" title="Before close"]');
    }
?>

</div>
</div>
<script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/cookie-show.js"></script>

<!--<a href="#callme_form_pop" id="fancybox-inline" class="fancybox"></a>-->
<div style="display:none" class="fancybox-hidden">
<div id="callme_form_pop">
<?php
    if ( shortcode_exists( 'contact-form-7' ) ) {
        echo do_shortcode('[contact-form-7 id="7271" title="Обратный звонок"]');
    }
?>
  </div>
</div>


<div style="display:none" class="fancybox-hidden">
<div id="promotion_form_pop">
<?php
    if ( shortcode_exists( 'contact-form-7' ) ) {
        echo do_shortcode('[contact-form-7 id="7293" title="Получить скидку"]');
    }
?>
</div>
</div>

<a href="#thankscustom" id="fancybox-inline" class="fancybox"></a>
<div style="display:none" class="fancybox-hidden">
<div id="thankscustom" style="display: block;min-width: 200px;height: 100%;">
</div>
</div>