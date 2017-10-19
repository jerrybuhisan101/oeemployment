<?php
/**
 * @package somalite
 */


/**
 * Soma Default Header Style
 */
if ( ! function_exists( 'somalite_header_default_style' ) ) :
function somalite_header_default_style() {
	?>
		<header>
	        <!-- logo & navigation -->
	        <div id="navigation" class="scroll-fix">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-3 col-sm-3 hidden-xs">
	                        <?php
	                            if ( has_custom_logo() ) {
	                                ?>
	                                    <div class="soma-logo">
	                                        <span class="logo-helper"></span>
	                                        <?php
	                                            somalite_the_custom_logo();                                            
	                                        ?>                            
	                                    </div>
	                                <?php
	                            }
	                        ?> 

	                        <?php
	                        	if(esc_attr(get_bloginfo( 'name' ))) {
	                        		?>
		                        		<h1 class="site-title">
				                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a>
				                        </h1> 
				                        <?php
				                            $description = esc_attr(get_bloginfo( 'description', 'display' ));
				                            if ( $description || is_customize_preview() ) { 
				                                ?>
				                                    <p class="site-description"><?php echo $description; ?></p>
				                                <?php 
				                            }
				                        ?>		
				                    <?php
	                        	}	
	                        ?>	                        
	                    </div>
	                    <div class="col-md-9 col-sm-9">
	                        <div class="soma-top-menu">
	                            <?php
	                            	$topbar_phone=esc_attr(get_theme_mod( 'sm_topbar_phone'));
	                                if(!empty($topbar_phone)) {
	                                    ?>
	                                        <i class="fa fa-phone"></i>
	                                        <span class="topbar-phone">
	                                            <?php _e('Call Us','somalite'); ?> : <?php echo esc_attr(get_theme_mod( 'sm_topbar_phone'));  ?>
	                                        </span>
	                                    <?php
	                                }
	                            ?>                                                             
	                            <span class="top-social">
	                                <?php if("" != esc_attr(get_theme_mod( 'sm_topbar_icon1' ))) { ?> <a href="<?php echo esc_url(get_theme_mod( 'sm_topbar_icon1_url' )); ?>" target="_blank"><i class="fa <?php echo esc_attr(get_theme_mod( 'sm_topbar_icon1' )); ?>"></i></a>  <?php } ?>
	                                <?php if("" != esc_attr(get_theme_mod( 'sm_topbar_icon2' ))) { ?> <a href="<?php echo esc_url(get_theme_mod( 'sm_topbar_icon2_url' )); ?>" target="_blank"><i class="fa <?php echo esc_attr(get_theme_mod( 'sm_topbar_icon2' )); ?>"></i></a>  <?php } ?>
	                                <?php if("" != esc_attr(get_theme_mod( 'sm_topbar_icon3' ))) { ?> <a href="<?php echo esc_url(get_theme_mod( 'sm_topbar_icon3_url' )); ?>" target="_blank"><i class="fa <?php echo esc_attr(get_theme_mod( 'sm_topbar_icon3' )); ?>"></i></a>  <?php } ?>                                
	                            </span>
	                        </div>
	                        <div class="nav">
	                            <nav class="navbar navbar-inverse navbar-right">
	                                <div class="container-fluid">
	                                    <div class="navbar-header">
	                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	                                            <span class="icon-bar"></span>
	                                            <span class="icon-bar"></span>
	                                            <span class="icon-bar"></span>
	                                        </button>                                        
	                                        <?php
	                                        	$theme_content_logo=esc_url(get_theme_mod( 'sm_theme_content_logo' ));
	                                            if(!empty($theme_content_logo)) {
	                                                ?>
	                                                    <a class="visible-xs hidden-md hidden-sm" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="img-responsive navbar-brand" src="<?php echo esc_url( get_theme_mod( 'sm_theme_content_logo' ) ); ?>" alt="theme-logo" /></a>
	                                                <?php
	                                            }
	                                        ?>
	                                        <h1 class="site-title visible-xs hidden-md hidden-sm" >
	                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a>
	                                        </h1> 
	                                        <?php
	                                            $description = esc_attr(get_bloginfo( 'description', 'display' ));
	                                            if ( $description || is_customize_preview() ) { 
	                                                ?>
	                                                    <p class="site-description visible-xs hidden-md hidden-sm"><?php echo $description; ?></p>
	                                                <?php 
	                                            }
	                                        ?>
	                                        
	                                    </div>
	                                    <?php
	                                        wp_nav_menu( array(
	                                            'menu'              => 'primary',
	                                            'theme_location'    => 'primary',
	                                            'depth'             => 3,  // This displays menu level of depth 3 only
	                                            'container'         => 'div',
	                                            'container_class'   => 'collapse navbar-collapse',
	                                            'container_id'      => 'myNavbar',
	                                            'menu_class'        => 'nav navbar-nav',
	                                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                                            'walker'            => new wp_bootstrap_navwalker())
	                                        );
	                                    ?>
	                                </div>
	                            </nav>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </header>    	
	<?php	
}
endif;



/**
 * Soma Shop Header Style
 */
if ( ! function_exists( 'somalite_header_shop_style' ) ) :
function somalite_header_shop_style() {
	?>
		<header>
	        <!-- logo & navigation -->
	        <div id="navigation" class="scroll-fix">
	        	<div class="soma-top-header">
	        		<div class="container">
		                <div class="row">
		                	<div class="col-md-12">
		                        <div class="soma-top-menu">
		                            <?php
		                            	$topbar_phone=esc_attr(get_theme_mod( 'sm_topbar_phone' ));
		                                if(!empty($topbar_phone)) {
		                                    ?>
		                                        <i class="fa fa-phone"></i>
		                                        <span class="topbar-phone">
		                                            <?php _e('Call Us','somalite'); ?> : <?php echo esc_attr(get_theme_mod( 'sm_topbar_phone'));  ?>
		                                        </span>
		                                    <?php
		                                }
		                            ?>                                                             
		                            <?php
		                            	if(somalite_is_woocommerce_activated()) {
		                            		?>
		                            			<span class="top-menu-links">
		                            				<?php
		                            					if(is_user_logged_in()){
		                            						?>
		                            							<a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id'))); ?>"><i class="fa fa-lock"></i><?php _e('My Account','somalite'); ?></a>           			
		                            						<?php		                            						
		                            					}
		                            					else{
		                            						?>
		                            							<a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id'))); ?>"><i class="fa fa-lock"></i><?php _e('Login','somalite'); ?></a> |         			
		                            							<a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id'))); ?>"><i class="fa fa-user"></i><?php _e('Register','somalite'); ?></a>        			
		                            						<?php		                            							
		                            					}
		                            				?>				              					
					              					
					                            </span>
		                            		<?php
		                            	}
		                            ?>
		                            <span class="top-social">
		                            	<?php if("" != esc_attr(get_theme_mod( 'sm_topbar_icon1' ))) { ?> <a href="<?php echo esc_url(get_theme_mod( 'sm_topbar_icon1_url' )); ?>" target="_blank"><i class="fa <?php echo esc_attr(get_theme_mod( 'sm_topbar_icon1' )); ?>"></i></a>  <?php } ?>
	                                	<?php if("" != esc_attr(get_theme_mod( 'sm_topbar_icon2' ))) { ?> <a href="<?php echo esc_url(get_theme_mod( 'sm_topbar_icon2_url' )); ?>" target="_blank"><i class="fa <?php echo esc_attr(get_theme_mod( 'sm_topbar_icon2' )); ?>"></i></a>  <?php } ?>
	                                	<?php if("" != esc_attr(get_theme_mod( 'sm_topbar_icon3' ))) { ?> <a href="<?php echo esc_url(get_theme_mod( 'sm_topbar_icon3_url' )); ?>" target="_blank"><i class="fa <?php echo esc_attr(get_theme_mod( 'sm_topbar_icon3' )); ?>"></i></a>  <?php } ?>		                                
		                            </span>		                            
		                        </div>
		                        
		                    </div>	
		                </div>
		            </div>
	        	</div>
	            <div class="container">
	                <div class="row">	                	
	                    <div class="col-md-3 col-sm-3 hidden-xs">
	                        <?php
	                            if ( has_custom_logo() ) {
	                                ?>
	                                    <div class="soma-logo">
	                                        <span class="logo-helper"></span>
	                                        <?php
	                                            somalite_the_custom_logo();                                            
	                                        ?>                            
	                                    </div>
	                                <?php
	                            }
	                        ?>                                           

	                        <?php
	                        	if(esc_attr(get_bloginfo( 'name' ))) {
	                        		?>
		                        		<h1 class="site-title">
				                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a>
				                        </h1> 
				                        <?php
				                            $description = esc_attr(get_bloginfo( 'description', 'display' ));
				                            if ( $description || is_customize_preview() ) { 
				                                ?>
				                                    <p class="site-description"><?php echo $description; ?></p>
				                                <?php 
				                            }
				                        ?>		
				                    <?php
	                        	}	
	                        ?>	                        
	                    </div>
	                    <div class="col-md-9 col-sm-12">
	                    	<div class="products-search">
	                    		<?php 
	                    			if ( somalite_is_woocommerce_activated() ) {
	                    				get_template_part( 'template-parts/product-search' ); 
	                    			}
	                    			else{
	                    				?>
	                    					<div class="soma-blog-search">
	                    				<?php
	                    				get_search_form();
	                    				?>
	                    					</div>
	                    				<?php
	                    			}

	                    		?>
	                    	</div>
	                    </div>
	                    
	                </div>
	            </div>
	            <div id="shop-nav" >
		        	<div class="container">
		        		<div class="row">
		        			<div class="col-md-12">
		        				<div class="nav">
		                            <nav class="navbar navbar-inverse">
		                                <div class="container-fluid">
		                                    <div class="navbar-header">
		                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		                                            <span class="icon-bar"></span>
		                                            <span class="icon-bar"></span>
		                                            <span class="icon-bar"></span>
		                                        </button>                                        
		                                        <?php
		                                        	$theme_content_logo=esc_url(get_theme_mod( 'sm_theme_content_logo' ));
		                                            if(!empty($theme_content_logo)) {
		                                                ?>
		                                                    <a class="visible-xs hidden-md hidden-sm" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="img-responsive navbar-brand" src="<?php echo esc_url( get_theme_mod( 'sm_theme_content_logo' ) ); ?>" alt="theme-logo" /></a>
		                                                <?php
		                                            }
		                                        ?>
		                                        <h1 class="site-title visible-xs hidden-md hidden-sm" >
		                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a>
		                                        </h1> 
		                                        <?php
		                                            $description = esc_attr(get_bloginfo( 'description', 'display' ));
		                                            if ( $description || is_customize_preview() ) { 
		                                                ?>
		                                                    <p class="site-description visible-xs hidden-md hidden-sm"><?php echo $description; ?></p>
		                                                <?php 
		                                            }
		                                        ?>		                                        
		                                    </div>
		                                    <?php
		                                        wp_nav_menu( array(
		                                            'menu'              => 'primary',
		                                            'theme_location'    => 'primary',
		                                            'depth'             => 3,  // This displays menu level of depth 3 only
		                                            'container'         => 'div',
		                                            'container_class'   => 'collapse navbar-collapse',
		                                            'container_id'      => 'myNavbar',
		                                            'menu_class'        => 'nav navbar-nav',
		                                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                                            'walker'            => new wp_bootstrap_navwalker())
		                                        );
		                                    ?>
		                                </div>
		                            </nav>
		                        </div>
		                    </div>
		                </div>
		            </div>
		    	</div>
	        </div>
	    </header>
	<?php		

}
endif;


if ( ! function_exists( 'somalite_action_header_hook' ) ) :
function somalite_action_header_hook() {
	if("style1" === esc_attr(get_theme_mod( 'sm_header_styles','style1'))) {
	    add_action( 'somalite_action_header', 'somalite_header_default_style' );
	}
	else{
	    add_action( 'somalite_action_header', 'somalite_header_shop_style' );
	}
}
endif;
add_action( 'wp', 'somalite_action_header_hook' );



