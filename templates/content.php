<article <?php post_class(); ?>>
  <?php $image = get_field('large'); ?>
  <?php the_post_thumbnail(); ?>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_field('tag-line'); ?>
  </div>
</article>
