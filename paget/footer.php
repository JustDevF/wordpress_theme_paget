<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
		<!--Footer-->
		<footer class="row"> 
      <!--Logo-->
        <div class="col-12 col-sm-4 col-md-4"> 
          <?php 
            $custom_logo_id = get_theme_mod('custom_logo'); 
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );  
          ?> 
          <img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('description'); ?> " />
        </div>
        <!--#logo--> 
           <div class="col-12 col-sm-4 col-md-4"> 
            <p><?php echo get_theme_mod('paget_adresse'); ?><br /> 
            <?php echo get_theme_mod('paget_postal'); ?> <?php echo get_theme_mod('paget_ville'); ?></p> 
           </div> 
           <div class="col-12 col-sm-4 col-md-4"> 
             <p>Tél : <?php echo get_theme_mod('paget_tel'); ?><br /> 
             Mail : <a href="mailto:<?php echo get_theme_mod('paget_mail'); ?>"><?php echo get_theme_mod('paget_mail'); ?></a></p> 
           </div> 
           <div id="copyright" class="col-12 col-sm-12 col-md-12"> 
            <p><?php echo get_theme_mod('paget_copy'); ?></p> 
           </div>
			<!--Afficher le formulaire du plugin my-mail-->
			<div>
				 <?php echo do_shortcode( '[mymails]' ) ?>  
			</div>
    </footer>  
    <!--#Footer-->

    </div><!--#container-fluid-->

    <!--le script pour jQuery et le script de Bootstrap -->
    <script src="<?php bloginfo('template_url'); ?>/paget_assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/paget_assets/js/bootstrap.min.js"></script> 
    <!--#le script pour jQuery et le script de Bootstrap -->
</body> 
</html> 
