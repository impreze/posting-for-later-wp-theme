<?php get_header(); ?>
<?php get_sidebar(); ?>


<!-- Main Content -->
				<div class="col-md-7" id="main-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                <article class="post" id="post-<?php the_ID(); ?>">
                    <div class="post-title">
                        <a title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="post-meta">Posted on <?php the_time( get_option( 'date_format' ) ); ?></div>
                    <div class="post-content"><?php the_content(); ?></div>
                    <div class="post-meta">
                        <?php if ( count( get_the_category() ) ) : ?>
                            <span class="cat-links">Categories: <?php echo get_the_category_list( ', ' ); ?></span>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endwhile; ?>   

            <?php wpex_pagination(); ?>


					
				</div><!-- End Main Content -->


<?php get_footer(); ?>