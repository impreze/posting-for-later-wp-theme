				<div class="col-md-2" id="sidebar">
                    
					<div class="sidebar-nav">
						<div class="navbar navbar-pills" role="navigation">
                            				<section id="logo">
        							<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            								<img alt="Website Logo" src="<?php bloginfo( 'template_url' ); ?>/images/logo.png">
        							</a>
    							</section>                            
				<section id="site-info">
                                <h3><?php bloginfo( 'name' ); ?></h3>
                                <h5><?php bloginfo( 'description' ); ?>t</h5>
                            </section>
                            
							<div class="navbar-header">
                                
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								<!-- <span class="visible-xs navbar-brand">Menu</span> -->
							</div>
                            
                            
							<?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse sidebar-navbar-collapse',
        	'container_id'      => '',
                'menu_class'        => 'nav navbar-nav nav-pills nav-stacked',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
							<!--/.nav-collapse -->
						</div>
					</div>
				</div>