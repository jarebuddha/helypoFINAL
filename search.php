  <?php get_header(); ?>






  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">


        <?php if(have_posts()) : ?>

			      <h4>Hakutulokset » "<?php the_search_query(); ?>"</h4>
            <?php while(have_posts()) : the_post(); ?>

            <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumb">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
                </div>
            <?php endif; ?>

		    <div class="blog-post">

            <h2 class="blog-post-title">
              <a href="<?php the_permalink();?>">
                <?php the_title(); ?>
              </a>
            </h2>

            <p class="blog-post-meta">
              <?php the_time('d.m.Y'); ?>
              <?php the_category(', '); ?>
            </p>


          <?php the_excerpt(); ?>
              <a href="<?php the_permalink();?>">Lue lisää</a>

        </div><!-- /.blog-post -->

        <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('Ei blogitekstejä!'); ?></p>
        <?php endif; ?>

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Aikaisemmat</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Uudemmat</a>
          </nav>

      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">

          <?php get_search_form(); ?>

        <?php get_sidebar(); ?>

      </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

  </main><!-- /.container -->

<?php get_footer(); ?>
