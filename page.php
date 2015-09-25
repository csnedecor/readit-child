<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package readit
 */

get_header(); ?>

<header class="entry-header">
    <div class="grid grid-pad">
        <div class="col-1-1">
            <div class="cover-image">
          <?php the_title( '<h1 class="page-entry-title">', '</h1>' ) ?>
              <?php if(is_page("PERRI O'SHAUGHNESSY")) : ?>
                <h2 class="page-entry-subtitle">
                    <em>New York Times</em> bestselling author of the Nina Reilly series and more
                </h2>
                 <?php endif; ?>
            </div>
        </div>
    </div>
</header><!-- .entry-header -->

<section id="page-content" class="blog-archive">
    <div class="grid grid-pad">
        <div class="col-8-12">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'page' ); ?>

                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
            </div><!-- #primary -->
    </div>
        <?php get_sidebar(); ?>

  </div>
    <!--Add Owl Slider for books: -->
    <div class="grid grid-pad">
        <article id="books-slider">
            <div class="entry-content">
                <h1>The Books (in order of publication)</h1>
                <?php echo do_shortcode("[owl-carousel category='books' autoPlay='true' items='4' navigation=true navigationText=<,> lazyLoad=true]"); ?></div>
        </article>
    </div>
</section>
<?php get_footer(); ?>
