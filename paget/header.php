<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!doctype html> 
<html lang="fr"> 
<head>
     <!--character encoding--> 
     <meta charset="UTF-8">
     <!--pour le responsive-->
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <title>Nathalie Paget</title> 
     
     <!--charger les liens css-->
     <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/paget_assets/css/bootstrap.min.css" />
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/paget_assets/css/style.css">
     
     <!-- action permettant de charger d'autres styles -->
     <?php wp_head() ?>
     <!-- #actionpermettant de charger d'autres styles -->
 
</head> 
<body> 
    <!--Container-fluid-->
    <div class="container-fluid"> 
    <!--row répresente une ligne et col une colonne-->

    <!--En-tête-->
    <header class="row">
        <!--Logo-->  
        <div class="col-12 col-sm-4 col-md-4">
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' ); 
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );  
            ?> 
            <!--Titre-->
            <img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('description'); ?> " />  
                <h1><?php bloginfo('title'); ?></h1> 
        </div>
        <!--#Logo--> 

        <!--Navigation menu responsive--> 
        <div class="col-12 col-sm-8 col-md-8"> 
            <nav class="navbar navbar-expand-lg navbar-light"> 
                <button class="navbar-toggler" type="button" 
                data-toggle="collapse" data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" 
                aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button> 
                 
                <!--Afficher le menu-->
                <?php wp_nav_menu( array( 'container' => '','items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>' ) ); ?>
            </nav>
        </div> 
        <!--#Navigation menu responsive--> 
    </header>
    <!--#En-tête--> 

    <!--Le fil d'ariane-->
    <?php 
        if( shortcode_exists('mybreadcrumb')){  
            echo do_shortcode('[mybreadcrumb]'); 
        } 
    ?> 
    <!--Le fil d'ariane-->
    
    <!--Imgae-->
	
