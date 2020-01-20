<?php /* Template Name: CustomPageAjankohtaista */ ?>

      <?php get_header(); ?>





      <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">

                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>

                      <?php if(has_post_thumbnail()) : ?>
                        <div class="post-thumb">
                          <?php the_post_thumbnail(); ?>
                        </div>
                      <?php endif; ?>

                      <div class="blog-post">
                        <h2 class="blog-post-title">
                          <?php the_title(); ?>
                        </h2>
                        <?php the_content(); ?>
                        </div><!-- /.blog-post -->

                <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('Sivua ei löytynyt'); ?></p>
                <?php endif; ?>



          </div><!-- /.blog-main -->

          <aside class="col-md-4 blog-sidebar">

                  <?php if(is_active_sidebar('ajankohtaista')) : ?>
                    <?php dynamic_sidebar('ajankohtaista'); ?>
                  <?php endif; ?>

          </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

      </main><!-- /.container -->

    

<?php get_footer(); ?>
