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
        <p class="blog-post-meta">
          <?php the_time('d.m.Y'); ?>
          <?php the_category(', '); ?>
           </a>
        </p>

        <?php the_content(); ?>

        <hr>

          <table class="table table-borderless">
              <tbody>
                <tr>
                  <td align="left"><?php next_post_link('%link', 'Seuraava'); ?></td>
                  <td align="right"><?php previous_post_link('%link', 'Edellinen'); ?></td>
                </tr>
              </tbody>
          </table>

        <hr>

        <?php comments_template();?>

      </div><!-- /.blog-post -->

    <?php endwhile; ?>
    <?php else : ?>
        <p><?php __('Ei blogitekstejä!'); ?></p>
    <?php endif; ?>



    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">

        <?php get_search_form(); ?>

      <?php get_sidebar(); ?>

    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer(); ?>
