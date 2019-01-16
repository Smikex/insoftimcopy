<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php if ( !is_user_logged_in() && defined('WP_PRODUCTION') ) {?>
<!-- Google Tag Manager -->
<script>dataLayer=[];(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TTCMDNS');</script>
<!-- End Google Tag Manager -->
<?php } ?>
    <?php qode_startit_wp_title(); ?>
    <?php
    /**
     * @see qode_startit_header_meta() - hooked with 10
     * @see qode_user_scalable - hooked with 10
     */
    ?>
	<?php do_action('qode_startit_header_meta'); ?>

	<?php wp_head(); ?>
  <link rel='shortcut icon' type='image/png' href='<?=site_url()?>/favicon.png' />
</head>

<body <?php body_class(); ?>>
<?php if ( !is_user_logged_in() && defined('WP_PRODUCTION') ) {?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTCMDNS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php } ?>
<?php qode_startit_get_side_area(); ?>

<div class="qodef-wrapper">
    <div class="qodef-wrapper-inner">
        <?php qode_startit_get_header(); ?>

        <?php if(qode_startit_options()->getOptionValue('show_back_button') == "yes") { ?>
            <a id='qodef-back-to-top'  href='#'>
                <span class="qodef-icon-stack">
                     <?php
                        qode_startit_icon_collections()->getBackToTopIcon('font_awesome');
                    ?>
                </span>
            </a>
        <?php } ?>
        <?php qode_startit_get_full_screen_menu(); ?>

        <div class="qodef-content" <?php qode_startit_content_elem_style_attr(); ?>>
 <div class="qodef-content-inner">