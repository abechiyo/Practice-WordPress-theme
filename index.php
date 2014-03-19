<?php get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Hello, WordPress and Bootstrap</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
  </div>
</div>


<div class="container">

<?php if (have_posts()) : ?>


  <?php if(is_front_page()): ?>
  <!-- Example row of columns -->
  <div class="row">



  <?php while (have_posts()) : the_post(); ?>
  <div class="col-md-4">
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(''); ?></p>
    <p><a class="btn btn-default" href="<?php the_permalink(); ?>" role="button">View details &raquo;</a></p>


  </div>
  <?php endwhile; ?>

  </div>

  <div class="navigation">
      <?php next_posts_link(trim(__('&laquo; 前へ', 'default'))) ?>
      <?php previous_posts_link(trim(__('次へ &raquo;', 'default'))) ?>
  </div>

  <?php else: ?>
    <?php the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>

  <?php endif; ?>

  <hr>

<?php endif; ?>


<?php get_footer(); ?>  





