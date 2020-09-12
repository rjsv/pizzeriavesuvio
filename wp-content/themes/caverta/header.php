<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head(); ?>  
   </head>
   <?php $mt_header_display = get_theme_mod( 'mt_header_display', 'mt_header1');
      switch ($mt_header_display) {
      case 'mt_header1':
             get_template_part('include/assets/headers/section', 'header1');
             break;
      case 'mt_header2':
              get_template_part('include/assets/headers/section', 'header2');
             break;
      case 'mt_header3':
              get_template_part('include/assets/headers/section', 'header3');
             break;	
      default:
               get_template_part('include/assets/headers/section', 'header1');
      }
    ?>