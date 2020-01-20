<?php get_header(); ?>

<main role="main" class="container">

  <div class="row">
    <div class="col-md-12 blog-main">
        <?php if(is_active_sidebar('box1')) : ?>
          <?php dynamic_sidebar('box1'); ?>
        <?php endif; ?>
    </div>
  </div>

  <div class="row matchrow">
    <div class="col-md-4 col-xs-4 blog-main">
		<?php get_search_form(); ?>
        <?php if(is_active_sidebar('box4')) : ?>
          <?php dynamic_sidebar('box4'); ?>
        <?php endif; ?>
    </div>


    <div class="col-md-8 col-xs-8 blog-main">
        <?php if(is_active_sidebar('box5')) : ?>
          <?php dynamic_sidebar('box5'); ?>
        <?php endif; ?>
	</div>
	</div>

  <div class="row">
    <div class="col-md-4 col-xs-4 blog-main">
        <?php if(is_active_sidebar('box2')) : ?>
          <?php dynamic_sidebar('box2'); ?>
        <?php endif; ?>
    </div>

    <div class="col-md-4 col-xs-4 blog-main">
        <?php if(is_active_sidebar('box3')) : ?>
          <?php dynamic_sidebar('box3'); ?>
        <?php endif; ?>
    </div>

    <div class="col-md-4 col-xs-4 blog-main">
        <?php if(is_active_sidebar('box6')) : ?>
          <?php dynamic_sidebar('box6'); ?>
        <?php endif; ?>
    </div>
  </div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer(); ?>
