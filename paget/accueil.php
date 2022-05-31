<?php
/* 
Template Name: Accueil 
*/ 
?>

<!--Afficher le header-->
<?php get_header();?>

<!--Le contenu de la page-->

    <!--Image d'accueil-->
    <section id="imgaccueil" class="row"> 
        <div class="col-12 col-sm-12 col-md-12"> 
            <?php     
                $image = get_field('image_accueil'); 
                if(!empty($image) ): ?> 

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
            <?php endif; ?>  
        </div>  
    </section> 
    <!--#Imgae-->
    
    <!--Text bienvenue et image -->
    <section  id="bienvenue" class="row"> 
        <div class="col-12 col-sm-6 col-md-6"> 
            <h2><?php the_field('titre_bienvenue'); ?> </h2> 
            <p> <?php the_field('texte_bienvenue'); ?>  </p> 
        </div> 
        <div class="col-12 col-sm-6 col-md-6"> 
            <?php     
                 $image = get_field('image_bienvenue'); 
                if( !empty($image) ): ?> 
    
                <img src="<?php echo $image['url']; ?>" alt="<?php echo 
                $image['alt']; ?>" /> 
            <?php endif; ?> 
        </div> 
    </section> 
    <!--Text et image -->

    <!-- Text et bouton -->
    <section id="btjoindre" class="row"> 
        <div class="col-12 col-sm-8 col-md-8"> 
            <p><?php the_field('texte_a_gauche_du_bouton'); ?> </p> 
        </div> 
        <div class="col-12 col-sm-4 col-md-4">
            <?php $link = get_field('lien_du_bouton'); ?>  
            <a href="<?php echo $link; ?>"> 
             <button> 
                <?php the_field('texte_bouton'); ?>  
             </button> 
            </a> 
         </div> 
    </section> 
    <!-- #Text et bouton -->

    <!-- section de 4 colonnes -->
    <section id="cabinet" class="row"> 
    
        <div class="col-12 col-sm-12 col-md-12"> 
            <h2><?php the_field('titre_section_4_colonnes'); ?></h2>
        </div> 
            
        <div class="col-12 col-sm-6 col-md-3"> 
            <h3><?php the_field('titre_colonne_1'); ?></h3>  
            <?php     
                $image = get_field('image_colonne_1'); 
                if( !empty($image) ): ?> 
                
                <img src="<?php echo $image['url']; ?>" alt="<?php echo 
                $image['alt']; ?>" /> 
                
            <?php endif; ?> 

            <p><?php the_field('text_colonne_1'); ?></p>  
            <?php $link = get_field('url_lien_colonne_1'); ?> 
            <a href="<?php echo $link; ?>">
            <?php the_field('texte_lien_colonne_1'); ?></a> 
        </div> 
            
        <div class="col-12 col-sm-6 col-md-3"> 
            <h3><?php the_field('titre_colonne_2'); ?></h3>  
            <?php     
                $image = get_field('image_colonne_2'); 
                if( !empty($image) ): ?> 
                
                <img src="<?php echo $image['url']; ?>" alt="<?php echo 
                $image['alt']; ?>" /> 
                
            <?php endif; ?> 

            <p><?php the_field('text_colonne_2'); ?></p>  
            <?php $link = get_field('url_lien_colonne_2'); ?> 
            <a href="<?php echo $link; ?>">
            <?php the_field('texte_lien_colonne_2'); ?></a>
        </div> 
            
        <div class="col-12 col-sm-6 col-md-3"> 
            <h3><?php the_field('titre_colonne_3'); ?></h3>  
            <?php     
                $image = get_field('image_colonne_3'); 
                if( !empty($image) ): ?> 
                
                <img src="<?php echo $image['url']; ?>" alt="<?php echo 
                $image['alt']; ?>" /> 
                
            <?php endif; ?> 
            <p><?php the_field('text_colonne_3'); ?></p>
            <?php $link = get_field('url_lien_colonne_3'); ?> 
            <a href="<?php echo $link; ?>">
            <?php the_field('texte_lien_colonne_3'); ?></a>
        </div> 
            
        <div class="col-12 col-sm-6 col-md-3"> 
            <h3><?php the_field('titre_colonne_4'); ?></h3>  
            <?php     
                $image = get_field('image_colonne_4'); 
                if( !empty($image) ): ?> 
                
                <img src="<?php echo $image['url']; ?>" alt="<?php echo 
                $image['alt']; ?>" /> 
                
            <?php endif; ?>

            <p><?php the_field('text_colonne_4'); ?></p> 
            <a href="<?php echo $link; ?>">
            <?php the_field('texte_lien_colonne_4'); ?></a> 
        </div> 
        
    </section> 
     <!-- # section de 4 colonnes  -->
<?php 
    get_footer();
?>