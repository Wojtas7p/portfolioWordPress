<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
   
      <nav class="nav-content">
         <?php wp_nav_menu( array('menu'=> 'header', 'container'=> '', 'menu_class'=> '') ); ?>
            <button title="nav-button" type="button" class="blank"><i class="fas fa-bars"></i></button>
            <ul class="link-contener ">
                    <li><a rel="noopener noreferrer" href="https://www.facebook.com/" target="_blank">
                    <?=wp_get_attachment_image( 8 , 'full',false, ['class'=>'tools-img']) ?></a>
                     <a rel="noopener noreferrer" href="https://github.com/" target="_blank">
                     <?=wp_get_attachment_image( 9 , 'full',false, ['class'=>'tools-img']) ?></a></li>
            </ul>
        </nav>
   
  </header>