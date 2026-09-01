<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Catch Themes
 * @subpackage Catch Kathmandu
 * @since Catch Kathmandu 1.0
 */
?>
	<?php 
    /** 
     * catchkathmandu_content_sidebar_end hook
     *
     * @hooked catchkathmandu_content_sidebar_wrap_end - 10
	 * @hooked catchkathmandu_third_sidebar - 15
     */
    do_action( 'catchkathmandu_content_sidebar_end' ); 
    ?>  

	</div><!-- #main .site-main -->
    
	<?php 
    /** 
     * catchkathmandu_after_main hook
     */
    do_action( 'catchkathmandu_after_main' ); 
    ?>
        
	<footer id="colophon" role="contentinfo">
		<?php
        /** 
         * catchkathmandu_before_footer_sidebar hook
         */
        do_action( 'catchkathmandu_before_footer_sidebar' );    

		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with three columns of widgets.
		 */
                /***Se incrusta html para colocar una barra de titulo sobre el carrusel de entes adscritos 16/05/2017 YG***/
                echo '<div class="separador-entes" style="line-height: 55px;font-size:25px;"><h3><span>&nbsp;&nbsp;ENTES ADSCRITOS</span></h3></div>';
                /**********************************************************************************************************/
                /****Se inserta shortcode para generar el carrusel de logos de entes adscritos 16/05/2017 YG***************/
		echo do_shortcode('[wpaft_logo_slider category="entes_adscritos"]'); 
                /**********************************************************************************************************/
                echo '<div style="width:100%;text-align:center;padding-top:30px;padding-bottom:30px;"><a href="https://twitter.com/FonturOficialve" target="_blank"><img src="wp-content/uploads/redes-sociales/twitter.png" title="Fontur Oficial" width="97px" height="72px" style="padding-right: 100px;display: inline-block;"></a><a href="https://www.facebook.com/FonturOficial" target="_blank"><img src="wp-content/uploads/redes-sociales/facebook.png" title="Fontur Oficial" width="97px" height="72px" style="padding-right:100px;"></a></a><a href="https://www.instagram.com/fontur_oficial/" target="_blank"><img src="wp-content/uploads/redes-sociales/instagram.png" title="Fontur Oficial" width="97px" height="72px"></a></div>';
                echo '<div style="width:100%;">' .'<img src="wp-content/uploads/pie/pie_pagina.jpg" style="width:100%;">'.'</div>';
		/** 
		 * catchkathmandu_after_footer_sidebar hook
		 */
		do_action( 'catchkathmandu_after_footer_sidebar' ); ?>   
           
        <div id="site-generator" class="container">
			<?php 
            /** 
             * catchkathmandu_before_site_info hook
             */
            do_action( 'catchkathmandu_before_site_info' ); ?>  	        
        	<div class="site-info">
            	<?php 
				/** 
				 * catchkathmandu_site_info hook
				 *
				 * @hooked catchkathmandu_footer_content - 10
				 */
				do_action( 'catchkathmandu_site_generator' ); ?> 
          	</div><!-- .site-info -->
            
			<?php 
            /** 
             * catchkathmandu_after_site_info hook
             */
            do_action( 'catchkathmandu_after_site_info' ); ?>              
       	</div><!-- #site-generator --> 
        
        <?php
        /** 
		 * catchkathmandu_after_site_generator hook
		 */
		do_action( 'catchkathmandu_after_site_generator' ); ?>  
               
	</footer><!-- #colophon .site-footer -->
    
    <?php 
    /** 
     * catchkathmandu_after_footer hook
	 *
     * @hooked catchkathmandu_scrollup - 10
     */
    do_action( 'catchkathmandu_after_footer' ); 
    ?> 
    
</div><!-- #page .hfeed .site -->

<?php 
/** 
 * catchkathmandu_after hook
 */
do_action( 'catchkathmandu_after' );

wp_footer(); ?>

</body>
</html>